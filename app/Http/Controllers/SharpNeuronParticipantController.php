<?php

namespace App\Http\Controllers;

use App\Models\sharpNeuronParticipant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SharpNeuronParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return game view
        return view ('games.sharpneurongame');
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

        // Form validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'school' => 'required',
            'grade' => 'required',
            'parent_email' => 'required',
            'parent_number' => 'required',
            'home_area' => 'required'
        ]);
        $child_Info = $request->all();
        $child_Info['birthday'] = Carbon::createFromFormat(config('app.date_format'), $request->birthday)->format('Y-m-d');
        sharpNeuronParticipant::create($child_Info );
//        return redirect()->away('https://kahoot.it/');
        return redirect()->route('registration_response');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sharpNeuronParticipant  $sharpNeuronParticipant
     * @return \Illuminate\Http\Response
     */
    public function show(sharpNeuronParticipant $sharpNeuronParticipant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sharpNeuronParticipant  $sharpNeuronParticipant
     * @return \Illuminate\Http\Response
     */
    public function edit(sharpNeuronParticipant $sharpNeuronParticipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sharpNeuronParticipant  $sharpNeuronParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sharpNeuronParticipant $sharpNeuronParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sharpNeuronParticipant  $sharpNeuronParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(sharpNeuronParticipant $sharpNeuronParticipant)
    {
        //
    }
}
