<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;

class FrontController extends Controller
{
    public function index(){

        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('pages.index', compact('users'));
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    public function user($user){

        $user = User::with('skills', 'schools', 'portfolios')->find($user);
        
        return view('pages.user.index', compact('user'));
    }

    public function profile($user){

        $user = User::with('skills', 'portfolios', 'schools')->find($user);
        
        return view('pages.user.profile', compact('user'));
    }

    public function settings(){
        return view('pages.user.settings');
    }

    public function following(){
        // dd(request());
        $user = User::find(request()->id);
        $following = $user->following;

        return view('pages.user.following', compact('following'));
    }

    public function followers(){

        $user = User::find(request()->id);
        $following = $user->followedBy;

        return view('pages.user.following', compact('following'));
    }

    public function search()
    {
        
        request()->validate([
            'search' => 'required'
        ]);

        $search['skills'] = Skill::search();
        $search['users'] = User::searchByFirstAndLast();
        $search['keywords'] = request()->q;

        return view('pages.search', $search);
    }

    public function cardPreview()
    {
        $user = User::find(auth()->user()->id);
        return view('pages.user.card', compact('user'));
    }
}
