<?php

namespace App\Models;

use CodeIgniter\Model;

class CalendarModel extends Model
{
    protected $table = 'calendar_items';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'title',
        'description',
        'start_datetime',
        'end_datetime',
        'item_type',
        'source',
        'location',
        'external_event_id'
    ];

    public function getCalendarItems($user_id)
    {
        return $this->where('user_id', $user_id)
                    ->orderBy('start_datetime', 'ASC')
                    ->findAll();
    }

    public function importGoogleEvents($events, $user_id)
    {
        foreach ($events as $event) {
            $externalId = $event->getId();

            $existing = $this->where('external_event_id', $externalId)
                             ->where('source', 'google')
                             ->where('user_id', $user_id)
                             ->first();

            $start = $event->getStart()->getDateTime() ?: $event->getStart()->getDate();
            $end   = $event->getEnd()->getDateTime() ?: $event->getEnd()->getDate();

            $data = [
                'user_id'           => $user_id,
                'title'             => $event->getSummary() ?: 'Google Event',
                'description'       => $event->getDescription(),
                'start_datetime'    => date('Y-m-d H:i:s', strtotime($start)),
                'end_datetime'      => $end ? date('Y-m-d H:i:s', strtotime($end)) : null,
                'item_type'         => 'timetable',
                'source'            => 'google',
                'location'          => $event->getLocation(),
                'external_event_id' => $externalId
            ];

            if ($existing) {
                $this->update($existing['id'], $data);
            } else {
                $this->insert($data);
            }
        }
    }
}