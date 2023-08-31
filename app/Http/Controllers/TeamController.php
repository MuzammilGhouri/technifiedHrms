<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Team;
use App\Models\Role;
use App\Models\Department;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class TeamController extends Controller
{
    public function addTeam(Request $request)
    {
        $emps = User::get();
        $managers = User::whereHas('role', function ($q) {
            $q->where('role_id', '16');
        })->get();
        $department = Department::get();
        $leaders = Employee::where('status',1)->get();
        // dd($leaders);
        // $leaders = User::whereHas('role', function ($q) {
        //     $q->where('role_id', '5');
        // })->get();
        $keyword = $request->get('search');
        if(!empty($keyword)){
            $teams = Team::with(['employee', 'leader', 'manager'])->where('teams.name', 'LIKE', "%$keyword%")->get();
        }else{
            $teams = Team::with(['employee', 'leader', 'manager'])->get();
        }
        
        return view('hrms.team.add_team', compact('emps', 'managers','department', 'leaders','teams'));
    }

    public function processTeam(Request $request)
    {   
           
        $team_id = Team::max('team_id');
        
        if ($team_id == null) {
            
            $team_id = 1;
        } else {
            $team_id = $team_id + 1;
        }
        

                $addTeam = new Team();
                $addTeam->name = $request->team_name;
                $addTeam->depart_id = $request->department;
                $managerId = Department::where('id',$request->department)->first();
                $addTeam->manager_id = $managerId->head_id;
                $addTeam->leader_id = $request->leader_id;
                
                $addTeam->save();
        
        \Session::flash('flash_message', 'Team successfully added!');
        return redirect()->back();
    }

    public function showTeam(Request $request)
    {   
        $keyword = $request->get('search');
        if(!empty($keyword)){
            $teams = Team::with(['employee', 'leader', 'manager'])->where('teams.name', 'LIKE', "%$keyword%")->get();
        }else{
            $teams = Team::with(['employee', 'leader', 'manager'])->get();
        }
        return view('hrms.team.show_team', compact('teams'));
    }

    public function showEdit($id)
    {
        $managers = User::whereHas('role', function ($q) {
            $q->where('role_id', '16');
        })->get();

        $leaders = User::whereHas('role', function ($q) {
            $q->where('role_id', '5');
        })->get();

        $emps = User::get();
        $department = Department::get();
        $edit = Team::with(['manager', 'leader', 'employee'])->where('team_id', $id)->get();

        $team_member = [];
        foreach ($edit as $ed) {
            $team_member[] = json_decode($ed->member_id);
        }
        // dd($team_member);
        return view('hrms.team.edit_team', compact('edit', 'managers', 'leaders', 'emps','department', 'team_member'));
    }

    public function doEdit(Request $request, $id)
    {
       
        $edit = Team::where('team_id', $id)->first();
        $edit->name = $request->team_name;
        $edit->team_id = $request->id;
        $edit->depart_id = $request->department;
        $managerId = Department::where('id',$request->department)->first();
        $edit->manager_id = $managerId->head_id;
        $edit->leader_id = $request->leader_id;
        $edit->member_id = json_encode([$request->member_id]);
        $edit->update();
        
        
        return redirect('team-listing');

    }

    public function doDelete($id)
    {
        $team = Team::where('id',$id);
        $team->delete();

        \Session::flash('flash_message', 'Team member successfully removed!');
        return redirect('team-listing');
    }

    public function test()
    {
        $team_id = Team::max('team_id');
        $team_id = $team_id + 1;


    }


}