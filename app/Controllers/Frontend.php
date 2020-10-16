<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Frontend extends Controller
{
    public function index()
    {
        return view('frontend/login');
    }

    public function register()
    {
        return view('frontend/register');
    }

    public function auth()
    {
        echo "Haiii";
    }

    //--------------------------------------------------------------------

}
