<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAll()
    {
        $groups = User::find(Auth::user()->id)->groups;

        return view('groups', ['groups' => $groups] );
    }

    public function create()
    {
        return view('groupCreate');
    }

    public function create_check(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:3|max:100'
        ]);

        $newGroup = new Group();
        $newGroup->name = $request->input('name');
        $newGroup->description = empty($request->input('description')) ? "" : $request->input('description');

        $newGroup->save();
        $newGroup->users()->attach(Auth::user(), ['is_owner' => 1]);

        return redirect('/groups');
    }
}
