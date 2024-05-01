<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user_detail.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'user_id' => 'required|unique:user_details,user_id',
            'present_address' => 'nullable|string|max:255',
            'permanent_address' => 'nullable|string|max:255',
            'mobile_no' => 'nullable|string|max:20',
            'alternative_mobile_no' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'alternative_email' => 'nullable|email|max:255',
            'career_object' => 'nullable|string',
            'father_name' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|in:Male,Female,Other',
            'marital_status' => 'nullable|in:Single,Married,Divorced,Widowed',
            'nationality' => 'nullable|string|max:255',
            'religion' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:10',
        ]);

        // Create portfolio
        UserDetail::create($request->all());

        return redirect()->back()->with('success', 'Portfolio created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
