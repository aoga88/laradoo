<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

class HomeController extends AuthController
{
    public function index(Request $request) {
        return view('admin.index');
    }
}