<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfoResume;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PersonalInfoResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function storeResumeInfoData(Request $request): RedirectResponse
    {
        $userResumeInfoData = $request->only('full_name', 'father_name', 'mother_name', 'date_of_birth', 'about_me',
            'present_address', 'city','region', 'zip_code', 'country');

        PersonalInfoResume::create($userResumeInfoData);
        return redirect()->route('personalResumeView')->with(["success" => 'A new Cover Latter created Successfully']);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalInfoResume $personalInfoResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInfoResume $personalInfoResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInfoResume $personalInfoResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInfoResume $personalInfoResume)
    {
        //
    }
}
