<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function view(Request $request) {
        $user_wants_language = $request->get('language', 'vietnamese');

        $posts = Post::query()
            ->where('visible', '=', true)
            ->where('language', '=', $user_wants_language)
            ->orderByDesc('published_date')
            ->get();

        return view("landing-page", [
            'current_language' => $user_wants_language,
            'post_data' => $posts
        ]);
    }
}
