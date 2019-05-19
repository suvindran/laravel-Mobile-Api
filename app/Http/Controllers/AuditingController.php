<?php

namespace App\Http\Controllers;

use App\Auditing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuditingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $auditing = new Auditing;
        $auditing->aadhar_card = $request->aadhar_card;
        $auditing->pan_card = $request->pan_card;
        $auditing->insurence_policy = $request->insurence_policy;
        $auditing->gst_no = $request->gst_no;
        $auditing->others = $request->others;
        $auditing->commands = $request->commands;
        $auditing->user_id = $request->user_id;

        $auditing->save();

        return response()->json([
            'status' => 1,
            'data' => [],
            'message' => 'Auditing creates Susscessfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Auditing $auditing)
    {
        $user = Auditing::find($request->user_id);

        return response()->json([
            'status' => 1,
            'data' => [$user],
            'message' => 'Auditing creates Susscessfully'
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function edit(Auditing $auditing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auditing $auditing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auditing $auditing)
    {
        //
    }
}
