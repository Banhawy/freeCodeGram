<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        // Inefficent way to find user
        $user = User::findOrFail($user);

        return view('profiles.index', [
            'user' => $user
        ]);

    }

    // Better way to find user & return view
    public function edit(\App\User $user)
    {
        $this->authorize('update', $user->profile);

        return view("profiles.edit", compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image ' => '',
        ]);

        auth()->$user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }

}
