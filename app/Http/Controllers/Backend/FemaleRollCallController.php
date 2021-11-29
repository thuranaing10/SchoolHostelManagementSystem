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

class FemaleRollCallController extends Controller
{
    public function index()
    {
        $rolls = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();
        return view('admin.froll.index',compact('rolls'));
    }
    public function edit($id)
    {
        $roll = StudentRegister::find($id);
        if(empty($roll)) {
            Alert::error('Error', 'Rule Not Found');
            return redirect(route('admin.froll.index'));
        }
        return view('admin.froll.edit', compact('roll'));
    }
    public function update(Request $request, $id)
    {
        $roll = StudentRegister::find($id);
        if(empty($roll)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('frollcall.index'));
        }
        $form = $request->all();
        $form['student_registers_id'] = $request->id;
        //$delete = RollCall::where($request->id,'=','student_registers_id')->where($request->date,'=','date')->get();
        //$delete = RollCall::where();
        //dd($delete);
        //$delete->delete();
        RollCall::create($form);
        Alert::success('Success', 'Successfully Inserted RollCall');
        return redirect(route('frollcall.index'));
    }
}
