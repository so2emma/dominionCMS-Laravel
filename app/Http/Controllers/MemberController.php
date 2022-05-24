<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('membership_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'dob' => 'required|date',
            'address' => 'required|min:10',
            'phone' => 'required|digits:11',
            'email' => 'email',
            'gender' => 'required',
            'maritalStatus' => 'required',
            'weddingAnniversary' => 'nullable|date',
            'bornAgain' => 'required',
            'salvationDate' => 'nullable|date',
            'previousChurch' => 'nullable|min:3',
            'membershipClass' => 'required',
            'membershipCompletion' => 'nullable|date',
            'workerStatus' => 'required',
            'department' => 'nullable',
            'houseFellowshipStatus' => 'required',
            'fellowshipLocation' => 'nullable|min:3',
            'dateJoined' => 'nullable|date'
        ]);

        Member::create($validate);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
