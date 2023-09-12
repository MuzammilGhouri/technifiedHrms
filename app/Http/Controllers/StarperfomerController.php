<?php

namespace App\Http\Controllers;

use App\starperfomer;
use Illuminate\Http\Request;
use App\User;

class StarperfomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $star = starperfomer::all();
        
        return view('hrms.star.addStarperformer', compact('user', 'star'));
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
      $star = new starperfomer;
      $star->user_id = $request->user_id;
      $star->month = $request->month;
      $star->description = $request->description;
      $star->save();
      
      \Session::flash('flash_message', 'Star Performer successfully Added!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\starperfomer  $starperfomer
     * @return \Illuminate\Http\Response
     */
    public function show(starperfomer $starperfomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\starperfomer  $starperfomer
     * @return \Illuminate\Http\Response
     */
    public function edit(starperfomer $starperfomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\starperfomer  $starperfomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, starperfomer $starperfomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\starperfomer  $starperfomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(starperfomer $starperfomer)
    {
        //
    }
    
    public function performanceStatus(Request $request){
        // dd($request->all());   
        $star = starperfomer::where('user_id', $request->user_id)->first();
        $star->status = $request->status;
        $star->save();
        
        return response()->json(['message'=>'Status Updated', 'status' => true]);
    }
}
