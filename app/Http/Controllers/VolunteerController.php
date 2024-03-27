<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerRequest;
use App\Models\Category;
use App\Models\State;
use App\Models\Volunteer;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{

    public function __construct()
    {
        view()->share('states', State::all());
        view()->share('categories', Category::all());
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $organization = Organization::where('user_id', $user->id)->first();
        $volunteer_openings = Volunteer::where('organization_id', $organization->id)->get(); // Fetch volunteer openings
        return view('recruit.index', compact('volunteer_openings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VolunteerRequest $request)
    {
        // Create new Volunteer Post instance and fill it with request data
        $volunteer = Volunteer::create($request->validated());


        return redirect()->route('recruit.index')->with('success', 'Job created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('opportunities.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
