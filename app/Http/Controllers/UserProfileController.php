<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
Use Illuminate\Http\Request;
Use App\Http\Requests\UserStoreRequest;
Use App\Http\Requests\UserEditRequest;
use App\User;
use App\UserProfile;
use Auth;
use Image;

class UserProfileController extends Controller
{
    public function create()
    {
        return view('user.profile.create');
    }

    public function store(UserStoreRequest $request)
    {

        $attributes = [];
        $attributes['user_id'] = auth()->user()->id;
        $attributes['title'] = request()->get('title');
        $attributes['body'] = request()->get('body');
        $profile = UserProfile::create($attributes);

        return response()->redirectTo('user/profile/'.$profile->id.'/show');
    }

    public function show($id)
    {
        $profile = UserProfile::findOrFail($id);

        return view('user.profile.show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = UserProfile::findorFail($id);

        return view('user.profile.edit', compact('profile'));
    }

    public function update($id, UserEditRequest $request)
    {
        $profile = UserProfile::findOrFail($id);

        $attributes = [];
        if (request()->has('title')) {
            $attributes['title'] = request()->get('title');
        }

        if (request()->has('body')) {
            $attributes['body'] = request()->get('body');
        }

        if (request()-> hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
    
        $profile->update($attributes);

        return response()->redirectTo('/user/profile/'.$profile->id.'/show');
    }

    public function destroy($id)
    {
        UserProfile::findOrFail($id)->delete();

        return response()->redirectTo('home');
    }

}
