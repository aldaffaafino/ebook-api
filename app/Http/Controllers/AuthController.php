<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return [
            "NIS" => 3103119012,
            "Name" => "Al Daffa Ageng Firstarano",
            "Gender" => "Laki-laki",
            "Phone" => 6281390492040,
            "Class" => "XII RPL 1",
        ];
    }
}

