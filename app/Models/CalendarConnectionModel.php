<?php

namespace App\Models;

use CodeIgniter\Model;

class CalendarConnectionModel extends Model
{
    protected $table = 'calendar_connections';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'provider',
        'provider_email',
        'last_synced_at'
    ];

    public function getConnection($user_id, $provider)
    {
        return $this->where('user_id', $user_id)
                    ->where('provider', $provider)
                    ->first();
    }

    public function saveConnection($user_id, $provider, $provider_email)
    {
        $existing = $this->getConnection($user_id, $provider);

        $data = [
            'user_id' => $user_id,
            'provider' => $provider,
            'provider_email' => $provider_email,
            'last_synced_at' => date('Y-m-d H:i:s')
        ];

        if ($existing) {
            $this->update($existing['id'], $data);
        } else {
            $this->insert($data);
        }
    }

    public function removeConnection($user_id, $provider)
    {
        return $this->where('user_id', $user_id)
                    ->where('provider', $provider)
                    ->delete();
    }
}