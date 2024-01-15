<?php

namespace App\Http\Controllers;

use App\Models\PersonalResume;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function personalResumeInfo()
    {
        return view('personal_resume.personal_resume_info');
    }
    public function personalResumeView()
    {
       return view('personal_resume.personal_resume_view');
    }

    public function personalResumeOutput()
    {
        return view('personal_resume.personal_resume_output');
    }
    public function EditPersonalResume()
    {
        return view('personal_resume.edit_personal_resume');
    }



    public function exportPDF()
    {
        $data1 = [
            'name' => 'AKASH',
            'date' => '2024-01-02'
        ];
        $user = Auth::user();
        $user = json_decode(json_encode($user), true);
        $user = [
            'user' => $user
        ];
        $pdf = Pdf::loadView('personal_mission.invoice', $user);
        return $pdf->download('invoice.pdf');

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
    public function show(PersonalResume $personalResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalResume $personalResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalResume $personalResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalResume $personalResume)
    {
        //
    }
}
