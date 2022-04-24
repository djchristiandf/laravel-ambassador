<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AmbassadorController extends Controller
{
    public function index()
    {
        // return User::whereIsAdmin(0)->get(); // ols way This is the same as the snippet above
        return User::ambassadors()->get();
    }

}
