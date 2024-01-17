<?php

 function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'additional_field' => $data['additional_field'], // Add your additional fields here
    ]);
}

