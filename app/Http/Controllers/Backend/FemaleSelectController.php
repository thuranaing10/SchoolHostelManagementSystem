<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StudentRegister;
Use Alert;
use Image;
use Storage;
use Redirect;

class FemaleSelectController extends Controller
{
    public function index()
    {
        $registers = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();;
        return view('admin.fselect.index',compact('registers'));
    }
    public function show($id)
    {
        $register = StudentRegister::find($id);
        if (empty($register)) {
            Flash::error('student not found');
            return redirect(route('admin.fselect.index'));
        }

        return view('admin.fselect.show', compact('register'));
    }
    public function update(Request $request, $id)
    {
        $register = StudentRegister::find($id);
        if(empty($register)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('admin.fselect.index'));
        }
        $register->update($request->all());
        Alert::success('Success', 'Successfully Updated Student');
        return redirect(route('fselect.index'));
    }
}
