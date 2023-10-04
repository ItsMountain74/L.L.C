<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;

class DashController extends Controller
{
    public function index()
    {
        return view('dash.index');
    }

    public function welcome()
    {
        $members = Team::all();
        $services = Service::all();

        return view('welcome', compact(['members', 'services']));
    }
}
