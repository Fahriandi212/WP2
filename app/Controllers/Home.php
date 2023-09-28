<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'nama' => 'Fahriandi Azis',
            'nim' => '19220620',
            'kelas' => '19.3C.05'
        ];
        return view('welcome_message', $data);
    }
}
