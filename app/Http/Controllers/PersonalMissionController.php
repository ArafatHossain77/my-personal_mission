<?php

namespace App\Http\Controllers;

use App\Models\personalMission;
use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $missionData = $request->only('user_id', 'personal_mission', 'edit_flag',);
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
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y')) //this year
            ->whereMonth('personal_missions.created_at', '=', now()->format('m')) //this month
            ->get();
        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'));

    }

    public function personalMissionAdminView()
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
            ->get();
        return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);

//        return view('personal_mission.personalMissionAdminView');
    }

    public function userEditPersonalMissionViewDashboard()
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.mission_complete')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y')) //this year
            ->whereMonth('personal_missions.created_at', '=', now()->format('m')) //this month
            ->get();
        return view('personal_mission.user_Personal_mission_edit_Dashboard', compact('usersWithMissions'));
//        return view('personal_mission.userEditPersonalMissionViewDashboard');
    }

    public function admin_Personal_mission_edit_Dashboard()
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.mission_complete')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y')) //this year
            ->whereMonth('personal_missions.created_at', '=', now()->format('m')) //this month
            ->get();
        return view('personal_mission.admin_Personal_mission_edit_Dashboard', compact('usersWithMissions'));
//        return view('personal_mission.admin_Personal_mission_edit_Dashboard');
    }


    public function personalMissionUserEditRequest(Request $request)
    {
        personalMission::where('id', $request->id)->update($request->only('edit_flag'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
            ->where([['users.id', '=', $user->id]])
            ->whereYear('personal_missions.created_at', '=', now()->format('Y'))
            ->whereMonth('personal_missions.created_at', '=', now()->format('m'))
            ->get();
        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'));
    }

    public function personalMissionUserMissionEdit(Request $request)
    {
        PersonalMission::where('id', $request->id)->update($request->only('personal_mission', 'edit_flag', 'mission_complete'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.mission_complete')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y')) //this year
            ->whereMonth('personal_missions.created_at', '=', now()->format('m')) //this month
            ->get();

        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'));
    }

    public function personalMissionUserMissionEditDashboard(Request $request)
    {
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.mission_complete')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y')) //this year
            ->whereMonth('personal_missions.created_at', '=', now()->format('m')) //this month
            ->get();
        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'));
    }

    public function personalMissionAdminEditAcceptIgnoreRequest(Request $request)
    {
        if ($request->action == 'accept') {
            PersonalMission::where('id', $request->id)->update(['edit_flag' => 2]);
            $user = Auth::user();
            $usersWithMissions = DB::table('users')
                ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
                ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
                ->get();
            return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);
        } elseif ($request->action == 'ignore') {
            PersonalMission::where('id', $request->id)->update(['edit_flag' => 0]);
            $user = Auth::user();
            $usersWithMissions = DB::table('users')
                ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
                ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
                ->get();
            return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);
        }
    }

    public function personalMissionAdminMissionUpdate(Request $request)
    {
        PersonalMission::where('id', $request->id)->update($request->only('personal_mission', 'mission_complete'));
//        dd($request);
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id', 'personal_missions.mission_complete')
            ->get();
        return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);
    }

    public function personalMissionUserMissionUpdate(Request $request)
    {
        PersonalMission::where('id', $request->id)->update($request->only('personal_mission', 'mission_complete'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id', 'personal_missions.mission_complete')
            ->where('users.id', '=', $user->id)
            ->get();

        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'))->with('user', $user);
    }

    public function mission_report()
    {
        $user = Auth::user();
        $userMission = PersonalMission::where('user_id', $user->id)->orderBy('created_at', 'DESC')->first();
        $all_data = array($user, $userMission);
        $usersWithMissions = DB::table('users')
            ->leftJoin('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.*')
            ->get();
        return view('personal_mission.mission_report', compact('all_data'))->with('usersWithMissions', $usersWithMissions);
    }


    //mission cv Controller started here
    public function missionCV()
    {
        return view('personal_mission.personal_mission_cv');
    }

    public function missionCvInfo()
    {
        return view('personal_mission.personal_mission_cv_info');
    }

    public function storeCvData(Request $request): RedirectResponse
    {
        $userCvData = $request->only('full_name', 'father_name', 'mother_name', 'date_of_birth', 'about_me',
            'present_address', 'city', 'region', 'zip_code', 'zip_code', 'email', 'social_link', 'mobile_number',
            'emergency_contact', 'level_of_education', 'major_group', 'result_division_class', 'marks', 'years_of_passing',
            'institute_name', 'company_name', 'company_business', 'designation', 'department', 'responsibility', 'company_location',
            'employment_period', 'highlights');

        Users::create($userCvData);
        return redirect()->route('missionCV')->with(["success" => 'A new Cover Latter created Successfully']);
    }

    public function mission_cv_update(Request $request): RedirectResponse
    {
        Users::where('id', $request->id)->update($request->only('full_name', 'father_name', 'mother_name', 'date_of_birth', 'about_me',
            'present_address', 'city', 'region', 'zip_code', 'zip_code', 'email', 'social_link', 'mobile_number',
            'emergency_contact', 'level_of_education', 'major_group', 'result_division_class', 'marks', 'years_of_passing',
            'institute_name', 'company_name', 'company_business', 'designation', 'department', 'responsibility', 'company_location',
            'employment_period', 'highlights'));
        return redirect()->route("missionCV")->with('success', 'Your info updated   successfully in Database/ check it');
    }

    public function destroy(int $id): RedirectResponse
    {
        Users::where('id', $id)->delete();
        return redirect()->route("registration")->with('success', 'Your account  deleted  successfully form our server');
    }

    public function missionCvView()
    {
        return view('personal_mission.personal_mission_cv_view');
    }

}
