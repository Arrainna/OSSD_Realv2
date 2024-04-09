<?php

namespace App\Http\Controllers;

use App\Models\activityLog;
use Illuminate\Http\Request;
use App\Models\Workspace;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $data['workspaces'] = Workspace::get()->all();
        return view('home', $data);
    }
    public function activityLogInLogOut() {
        $data['workspaces'] = Workspace::get()->all();
        $activityLog['user_activity'] = activityLog::get()->all();
        return view('activity_log', $data,$activityLog);
    }
}


