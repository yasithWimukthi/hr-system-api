<?php

namespace App\Http\Controllers;

use App\Models\LeaveSettings;
use Illuminate\Http\Request;

class LeaveSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LeaveSettings::select()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveSettings  $leaveSettings
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveSettings $leaveSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveSettings  $leaveSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveSettings $leaveSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaveSettings  $leaveSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveSettings $leaveSettings)
    {
        $request->validate([
            'country' => 'required',
            'leave_name' => 'required',
            'relevant_days' => 'required',
            'joined_month' => 'required'
        ]);

        try{
            $leaveSettings->fill($request->post())->update();
            return LeaveSettings::select()->get();;
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while updating a eLEave settings!!'
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveSettings  $leaveSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveSettings $leaveSettings)
    {
        //
    }
}
