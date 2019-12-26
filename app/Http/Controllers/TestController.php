<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class TestController extends Controller
{
    public function index(){
        $user='hehe';
        return response($user);
    }
}
