<?php

namespace App\classes;

class User{
    private $data= [];

    public function getAllUser()
    {
        $this->data = [
            0 => [
                'id' => 1,
                'name' => 'Thomas Westphal',
                'email' => 'thomas@bhs.de',
                'password'=> '@abcde00',
            ],
            1 => [
                'id' => 2,
                'name' => 'Paula kokic',
                'email' => 'paula@bhs.de',
                'password'=> '@452paula',
            ],
            2 => [
                'id' => 3,
                'name' => 'Johannes Hoecherl',
                'email' => 'johannes@bhs.de',
                'password'=> 'abc123456',
            ],
            3 => [
                'id' => 4,
                'name' => 'Hira Nahar',
                'email' => 'hira@bhs.de',
                'password'=> '123456',
            ],
            4 => [
                'id' => 5,
                'name' => 'Motiur Rahman',
                'email' => 'motiur@bhs.de',
                'password'=> '123456',
            ]
        ];
        return $this->data;
    }
}