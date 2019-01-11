<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('admin.dashboard', compact('posts'));
    }
}
