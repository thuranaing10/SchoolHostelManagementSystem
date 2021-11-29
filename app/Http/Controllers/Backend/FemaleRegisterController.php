<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StudentRegister;
use App\Http\Requests\Frontend\StudentRegisterRequest;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;

class FemaleRegisterController extends Controller
{
    public function index()
    {
        $registers = StudentRegister::where('gender', '=', 'female')->get();
        return view('admin.fregister.index',compact('registers'));
    }
    public function show($id)
    {
        $register = StudentRegister::find($id);
        if (empty($register)) {
            Flash::error('student not found');
            return redirect(route('admin.fregister.index'));
        }

        return view('admin.fregister.show', compact('register'));
    }
    public function update(Request $request, $id)
    {
        $register = StudentRegister::find($id);
        if(empty($register)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('admin.fregister.index'));
        }
        $register->update($request->all());
        Alert::success('Success', 'Successfully Updated Student');
        return redirect(route('fregister.index'));
    }
}
