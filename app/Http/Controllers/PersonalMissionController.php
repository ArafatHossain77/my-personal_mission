<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\personalMission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

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
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
            ->where('users.id', '=', $user->id)
            ->whereYear('personal_missions.created_at', '=', now()->format('Y')) //this year
            ->whereMonth('personal_missions.created_at', '=', now()->format('m')) //this month
            ->get();
        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'));

//        return view('personal_mission.personalMissionUserView');
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
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
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
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag')
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
        PersonalMission::where('id', $request->id)->update($request->only('personal_mission', 'edit_flag'));
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
    public function personalMissionUserMissionEditDashboard(Request $request)
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
    public function personalMissionAdminEditAcceptIgnoreRequest(Request $request)
    {
        if ($request->action == 'accept'){
            PersonalMission::where('id', $request->id)->update(['edit_flag'=>2]);
            $user = Auth::user();
            $usersWithMissions = DB::table('users')
                ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
                ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
                ->get();
            return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);
        }elseif ($request->action == 'ignore') {
            PersonalMission::where('id', $request->id)->update(['edit_flag'=>0]);
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
        PersonalMission::where('id', $request->id)->update($request->only('personal_mission'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
            ->get();
        return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);
    }
    public function personalMissionUserMissionUpdate(Request $request)
    {

        PersonalMission::where('id', $request->id)->update($request->only('personal_mission'));
        $user = Auth::user();
        $usersWithMissions = DB::table('users')
            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
            ->get();
        return view('personal_mission.personalMissionUserView', compact('usersWithMissions'))->with('user', $user);
    }

//    public function personalMissionAdminMissionUpdate(Request $request)
//    {
//        PersonalMission::where('id', $request->id)->update($request->only('personal_missions'));
//        $user = Auth::user();
//        $usersWithMissions = DB::table('users')
//            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
//            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
//            ->get();
//        return view('personal_mission.personalMissionAdminView', compact('usersWithMissions'))->with('user', $user);
//    }
//    public function personalMissionUserMissionUpdate(Request $request)
//    {
//        PersonalMission::where('id', $request->id)->update($request->only('personal_mission'));
//        $user = Auth::user();
//        $usersWithMissions = DB::table('users')
//            ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
//            ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
//            ->get();
//        return view('userEditPersonalMissionViewDashboard', compact('usersWithMissions'))->with('user', $user);
//    }
//    public function missionUpdateAdmin(Request $request)
//    {
//        personalMission::where('id', $request->id)->update($request->only('personal_mission'));
//        $user = Auth::user();
//         $usersWithMissions = DB::table('users')
//        ->join('personal_missions', 'users.id', '=', 'personal_missions.user_id')
//       ->select('users.*', 'personal_missions.id', 'personal_missions.personal_mission', 'personal_missions.edit_flag', 'personal_missions.user_id')
//         ->get();
////        return redirect()->route("userEditPersonalMissionViewDashboard")->with('success','Your misssion updated   successfully in Database');
//        return view('personal_mission.admin_Personal_mission_edit_Dashboard', compact('usersWithMissions'))->with('user', $user);
//    }


//    public function mission_report()
//    {
//        return view('personal_mission.mission_report');
//    }

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



}
