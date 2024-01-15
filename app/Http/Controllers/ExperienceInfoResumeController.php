<?php

namespace App\Http\Controllers;

use App\Models\EducationInfoResume;
use App\Models\ExperienceInfoResume;
use Illuminate\Http\Request;

class ExperienceInfoResumeController extends Controller
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
    public function storeResumeExperienceData(Request $request): \Illuminate\Http\RedirectResponse
    {
        $userResumeExperienceData = $request->only('company_name', 'company_business', 'designation', 'department', 'responsibility',
            'company_location','employment_period');

        ExperienceInfoResume::create($userResumeExperienceData);
        return redirect()->route('personalResumeView')->with(["success" => 'Your data updated Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExperienceInfoResume $experienceInfoResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExperienceInfoResume $experienceInfoResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExperienceInfoResume $experienceInfoResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExperienceInfoResume $experienceInfoResume)
    {
        //
    }
}
