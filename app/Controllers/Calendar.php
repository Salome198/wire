<?php

namespace App\Controllers;

use App\Models\CalendarModel;
use App\Models\CalendarConnectionModel;

class Calendar extends BaseController
{
    public function index()
    {
        $calendarModel = new CalendarModel();
        $connectionModel = new CalendarConnectionModel();

        $user_id = session()->get('user_id');

        if (!$user_id) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $data['calendarItems'] = $calendarModel->getCalendarItems($user_id);
        $data['googleConnection'] = $connectionModel->getConnection($user_id, 'google');

        return view('calendar/index', $data);
    }

        public function connectGoogle()
    {
        $user_id = session()->get('user_id');

        if (!$user_id) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $client = new \Google\Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

        $client->setScopes([
            'https://www.googleapis.com/auth/calendar.events.readonly',
            'https://www.googleapis.com/auth/userinfo.email',
            'https://www.googleapis.com/auth/userinfo.profile',
            'openid'
        ]);

        $client->setAccessType('offline');
        $client->setIncludeGrantedScopes(false);
        $client->setPrompt('consent select_account');

        return redirect()->to($client->createAuthUrl());
    }

    public function googleCallback()
    {
        $user_id = session()->get('user_id');

        if (!$user_id) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $code = $this->request->getGet('code');

        if (!$code) {
            return redirect()->to('/calendar')->with('error', 'Google authorisation failed.');
        }

        $client = new \Google\Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

        $client->setScopes([
            'https://www.googleapis.com/auth/calendar.readonly',
            'https://www.googleapis.com/auth/userinfo.email',
            'https://www.googleapis.com/auth/userinfo.profile',
            'openid'
        ]);

        $token = $client->fetchAccessTokenWithAuthCode($code);

        if (isset($token['error'])) {
            return redirect()->to('/calendar')->with('error', 'Unable to fetch Google token.');
        }

        $client->setAccessToken($token);

        $oauthService = new \Google\Service\Oauth2($client);
        $userInfo = $oauthService->userinfo->get();
        $googleEmail = $userInfo->email;

        $calendarService = new \Google\Service\Calendar($client);

        $events = $calendarService->events->listEvents('primary', [
            'maxResults'   => 50,
            'orderBy'      => 'startTime',
            'singleEvents' => true,
            'timeMin'      => date('c'),
            'timeMax'      => date('c', strtotime('+3 months')),
        ]);

        $calendarModel = new CalendarModel();
        $calendarModel->importGoogleEvents($events->getItems(), $user_id);

        $connectionModel = new CalendarConnectionModel();
        $connectionModel->saveConnection($user_id, 'google', $googleEmail);

        return redirect()->to('/calendar')->with('success', 'Google Calendar synced successfully.');
    }

    public function disconnectGoogle()
    {
        $user_id = session()->get('user_id');

        if (!$user_id) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $calendarModel = new CalendarModel();
        $connectionModel = new CalendarConnectionModel();

        $calendarModel->where('user_id', $user_id)
                      ->where('source', 'google')
                      ->delete();

        $connectionModel->removeConnection($user_id, 'google');

        return redirect()->to('/calendar')->with('success', 'Google Calendar disconnected.');
    }
    
        public function apiList()
    {
        $user_id = $this->request->getGet('user_id');

        if (!$user_id) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Missing user_id',
                'items' => []
            ]);
        }

        $calendarModel = new CalendarModel();

        $items = $calendarModel->where('user_id', $user_id)
                            ->orderBy('start_datetime', 'ASC')
                            ->findAll();

        return $this->response->setJSON([
            'status' => 'success',
            'items' => $items
        ]);
    }
}