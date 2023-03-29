<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    { 
        $user_id = auth()->user()->id;
        return view('dashboard',[
            'posts' => Post::where('user_id', $user_id)->paginate(5),
        ]);
    }
}
