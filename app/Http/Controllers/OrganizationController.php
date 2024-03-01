<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OrganizationRequest;
use App\Models\State;

class OrganizationController extends Controller
{

    public function __construct()
    {
        view()->share('states', State::all());
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }


    public function store(OrganizationRequest $request)
    {
        $organization = Auth::user()->organization;

        // Update organization data
        $organization = Organization::create([
            'email' => $request->email,
            'org_name' => $request->org_name,
            'about' => $request->about,
            'address' => $request->address,
            'state_id' => $request->state_id,
            'user_id' => $request->user_id,
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar_path')) {
            $avatarPath = $request->file('avatar_path')->store('avatars', 'public');
            $organization->avatar_path = $avatarPath;
            $organization->save();
        }

        return redirect()->route('home')->with('success', 'Profile updated successfully!');
    }



    public function show()
    {
        $organization = Auth::user()->organization;
        return view('profiles.organization', compact('organization'));
    }

    /**
     * Show the form for editing the organization's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $organization = Auth::user()->organization;
        return view('profiles.edit_organization', compact('organization'));
    }

    /**
     * Update the organization's profile.
     *
     * @param  \App\Http\Requests\OrganizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationRequest $request)
    {
        $organization = Auth::user()->organization;

        // Update organization data
        $organization->update([
            'email' => $request->email,
            'company_name' => $request->company_name,
            'about' => $request->about,
            'address' => $request->address,
            'state' => $request->state,
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar_path')) {
            $avatarPath = $request->file('avatar_path')->store('avatars', 'public');
            $organization->avatar_path = $avatarPath;
            $organization->save();
        }

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }


}
