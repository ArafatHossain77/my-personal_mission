<?php

namespace App\Http\Controllers;

use App\Models\personalMission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalMissionController extends Controller
{
   public function user_mission()
   {
       return view('user_mission');
   }
    public function admin_mission()
    {
        return view('admin_mission');
    }

    public function personalMissionUser(): RedirectResponse
    {
        return redirect()->route('personalMissionDashboardUser');
    }
    public function personalMissionAdmin(): RedirectResponse
    {
        return redirect()->route('personalMissionDashboardAdmin');
    }
    public function personalMissionDashboardUser()
    {
        return view('user_mission');
    }
    public function personalMissionDashboardAdmin()
    {
        return view('admin_mission');
    }

    public function personalMissionCreateUser(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $missionData = $request->only('user_id', 'personal_mission','edit_flag',);
        $missionData['user_id'] = $user->id;
        personalMission::create($missionData);
        return redirect()->route('user_dashboard')->with(['success' => 'A new mission created successfully!']);
    }
    public function personalMissionCreateAdmin(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $missionData = $request->only('user_id', 'personal_mission');
        $missionData['user_id'] = $user->id;
        personalMission::create($missionData);
        return redirect()->route('admin_dashboard')->with(['success' => 'A new mission created successfully!']);
    }

    public function personalMissionUserView()
    {
        return view('personal_mission.personalMissionUserView');
    }

    public function personalMissionAdminView()
    {
        return view('personal_mission.personalMissionAdminView');
    }
    public function userEditPersonalMissionViewDashboard()
    {
        return view('personal_mission.userEditPersonalMissionViewDashboard');
    }

    public function admin_Personal_mission_edit_Dashboard()
    {
        return view('personal_mission.admin_Personal_mission_edit_Dashboard');
    }

}
