<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Localization::select()->get();
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
        $request->validate([
            'startTime' => 'required',
            'endTime' => 'required',
            'workingHours' => 'required',
            'gracePeriod' => 'required'
        ]);

        try {
            $localization = Holiday::create($request->all());
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while storing a localization!!'
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Localization  $localization
     * @return \Illuminate\Http\Response
     */
    public function show(Localization $localization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Localization  $localization
     * @return \Illuminate\Http\Response
     */
    public function edit(Localization $localization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Localization  $localization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localization $localization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localization  $localization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localization $localization)
    {
        //
    }
}
