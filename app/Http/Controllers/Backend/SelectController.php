<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StudentRegister;
Use Alert;
use Image;
use Storage;
use Redirect;

class SelectController extends Controller
{
    public function index()
    {
        $registers = StudentRegister::where('status', '=', 1)->where('gender', '=', 'male')->get();;
        return view('admin.select.index',compact('registers'));
    }
    public function show($id)
    {
        $register = StudentRegister::find($id);
        if (empty($register)) {
            Flash::error('student not found');
            return redirect(route('admin.select.index'));
        }

        return view('admin.select.show', compact('register'));
    }
    public function update(Request $request, $id)
    {
        $register = StudentRegister::find($id);
        if(empty($register)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('admin.select.index'));
        }
        $register->update($request->all());
        Alert::success('Success', 'Successfully Updated Student');
        return redirect(route('select.index'));
    }
}
