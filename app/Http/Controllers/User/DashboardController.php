<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public $user;

    public function __construct() 
    {
        $this->user = Auth::user();
    }
    
    function index() : View 
    {
        return view('user.dashboard', ['user' => $this->user]);
    }
}