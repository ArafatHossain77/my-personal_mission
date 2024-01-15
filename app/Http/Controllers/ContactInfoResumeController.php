<?php

namespace App\Http\Controllers;

use App\Models\ContactInfoResume;
use App\Models\EducationInfoResume;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactInfoResumeController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeResumeContactData(Request $request): RedirectResponse
    {
        $userResumeContactData = $request->only('email', 'social_link', 'mobile_number', 'emergency_contact');

        ContactInfoResume::create($userResumeContactData);
        return redirect()->route('personalResumeView')->with(["success" => 'Your data updated Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactInfoResume $contactInfoResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactInfoResume $contactInfoResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactInfoResume $contactInfoResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactInfoResume $contactInfoResume)
    {
        //
    }
}
