<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ScheduleManagement;
use App\Http\Controllers\Controller;
use App\Models\TeamManagement;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Validator;

class ScheduleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $therapists = TeamManagement::whereStatus(true)->get();
        $schedules = ScheduleManagement::with('therapists')->get();
        
        return view('admin.resources_forms.schedule_management.index', compact('schedules','therapists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $therapists = TeamManagement::whereStatus(true)->get();
        return view('admin.resources_forms.schedule_management.add_create_schedule',compact('therapists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'insurance' => 'required',
            'team_management_id' => 'required',
        ]);
        
        $data = [];
        $data['schedule_name'] = $request->name;
        $data['schedule_email'] = $request->email;
        $data['schedule_phone'] = $request->phone;
        $data['schedule_message'] = $request->message;
        $data['schedule_insurance'] = $request->insurance;
        $data['team_management_id'] = $request->team_management_id;
        $data['is_active'] = 0;
        return $data;

        $ScheduleManagement = ScheduleManagement::create($data);
        if($ScheduleManagement){
            return back()->with('schedule_created','Schedule created successfully');
        }else{
            return back()->with('schedule_error','Schedule Fail');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScheduleManagement  $scheduleManagement
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleManagement $scheduleManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScheduleManagement  $scheduleManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleManagement $scheduleManagement, $id)
    {
        $therapists = TeamManagement::whereStatus(true)->get();
        $schedule = ScheduleManagement::where('id',$id)->first();
        
        
        return view('admin.resources_forms.schedule_management.edit_schedule',compact('schedule','therapists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScheduleManagement  $scheduleManagement
     * @return \Illuminate\Http\Response
     */
    public function schedule_update(Request $request, $id)
    {
        $validated = $request->validate([
            'schedule_name' => 'required',
            'schedule_email' => 'required|email',
            'schedule_phone' => 'required',
            'schedule_message' => 'required',
            'schedule_insurance' => 'required',
            'team_management_id' => 'required',
        ]);

        $input = $request->all();
        ScheduleManagement::find($id)->update($input);
        return back();
        // return redirect()->route('team_management')->with('success', 'You have successfully Updated a Therapist.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScheduleManagement  $scheduleManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ScheduleManagement $scheduleManagement,$id)
    {
        $delete = ScheduleManagement::find($id);
        $delete->delete();

        return back()->with('schedule_delete', 'Schedule Deleted suceessfuly!');
    }


    /**
     * status change from ScheduleManagement from table.
     *
     * @param  \App\Models\ScheduleManagement  $scheduleManagement
     * @return \Illuminate\Http\Response
     */
    public function schedule_status(Request $request,$id)
    {
        $schedule_status = ScheduleManagement::find($id);
        $newStatus = ($schedule_status->is_active == 0) ? 1 : 0;
        $schedule_status->update([
            'is_active' => $newStatus
        ]);
        // return $schedule_status;
        return redirect()->back()->with('schedule_status', 'Successfully Schedule status have been changed!');
    }


    public function schedule_view(Request $request,$id)
    {
        $therapists = TeamManagement::whereStatus(true)->get();
        $schedule = ScheduleManagement::with('therapist')->where('id',$id)->first();
        
        return view('admin.resources_forms.schedule_management.edit_schedule',compact('schedule','therapists','schedule'));
    }

    
}
