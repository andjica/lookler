<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Portfolio;
use App\Education;
use App\Color;

class UserController extends Controller
{
    
    public function editInfo()
    {
        $colors = Color::all();

        return view('pages.user.edit', compact('colors'));
    }

    public function follow()
    {
        if (auth()->user()->following->contains(request()->user_id))
        {
            auth()->user()->following()->detach(request()->user_id);
        }
        else auth()->user()->following()->attach(request()->user_id);

        return User::find(request()->user_id)->numberOfFollowers();
    }

    public function update()
    {
        $user = User::find(auth()->user()->id);

        $data = request()->validate([
            'first_name' => 'required|min:2|max:100',
            'last_name' => 'required|min:2|max:100',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|numeric',
            'position' => 'nullable|max:40',
            'bio' => 'nullable|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color_id' => 'nullable'
        ]);
        
        if (request()->has('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('img'), $imageName);

            $data['image'] = "img/".$imageName;
        }

        $user->update($data);
        

        return redirect()->back();
    }

    public function updateResume()
    {
        $data = request()->validate([
            'company' => 'required|max:255',
            'description' => 'required|max:255'
        ]);


        auth()->user()->portfolios()->save(new Portfolio($data));

        return redirect()->back();
    }

    public function updateSchool()
    {
        $data = request()->validate([
            'school' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        auth()->user()->schools()->save(new Education($data));

        return redirect()->back();
    }
}
