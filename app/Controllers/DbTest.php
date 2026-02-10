<?php

namespace App\Controllers;

class DbTest extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        return $db->simpleQuery('SELECT 1')
            ? 'DB Connected'
            : 'DB Failed';
    }
}
