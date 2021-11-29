<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StudentRegister;
use App\Model\RollCall;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;

class RollCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolls = StudentRegister::where('status', '=', 1)->where('gender', '=', 'male')->get();
        return view('admin.roll.index',compact('rolls'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roll = StudentRegister::find($id);
        if(empty($roll)) {
            Alert::error('Error', 'Rule Not Found');
            return redirect(route('admin.roll.index'));
        }
        return view('admin.roll.edit', compact('roll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roll = StudentRegister::find($id);
        if(empty($roll)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('rollcall.index'));
        }
        $form = $request->all();
        $form['student_registers_id'] = $request->id;
        //$delete = RollCall::where($request->id,'=','student_registers_id')->where($request->date,'=','date')->get();
        //$delete = RollCall::where();
        //dd($delete);
        //$delete->delete();
        RollCall::create($form);
        Alert::success('Success', 'Successfully Inserted RollCall');
        return redirect(route('rollcall.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
