<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // 
    public function index()
    {

    
    $role=Auth::user()->role;
    if($role=="1")
    {
        return view('admin.layouts.default');
    }
if($role=="0")
{
    return view('user');
}
else{
    return view('dashboard');
}}
}
