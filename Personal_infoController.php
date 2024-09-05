<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Personal_infoController extends Controller
{
    public function show()
    {
        $fullName ='Fatma Abdullah Ban ALI AL-hajj';
        $dateOfbirth = '11/6/2001';
        $address='Mukalla';
        $email = 'fteem0iph6@icloud.com';
        $gender = "female";
        $nationality = "Yemeni";
        $studentLevel = " Level 3";
        return view('personal_info',
        [
        'fullName' => $fullName,
         'dateOfbirth' => $dateOfbirth,
         'address'=> $address,
         'email'=> $email,
         'gender' => $gender,
         'nationality'=> $nationality,
         'studentLevel'=> $studentLevel,
        ]);
    } 
}
