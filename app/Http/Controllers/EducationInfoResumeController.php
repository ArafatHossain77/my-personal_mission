<?php

namespace App\Http\Controllers;

use App\Models\EducationInfoResume;
use App\Models\PersonalInfoResume;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EducationInfoResumeController extends Controller
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
    public function storeResumeEducationData(Request $request): RedirectResponse
    {
        $userResumeEducationData = $request->only('level_of_education', 'major_group', 'result_division_class', 'marks', 'years_of_passing',
            'institute_name');
        EducationInfoResume::create($userResumeEducationData);
//        EducationInfoResume::($userResumeEducationData as $educationData);
        return redirect()->route('personalResumeView')->with(["success" => 'Your data updated Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(EducationInfoResume $educationInfoResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EducationInfoResume $educationInfoResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EducationInfoResume $educationInfoResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EducationInfoResume $educationInfoResume)
    {
        //
    }
}
