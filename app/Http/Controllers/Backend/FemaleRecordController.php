<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\RollCall;
use App\Model\StudentRegister;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;

class FemaleRecordController extends Controller
{
    public function index()
    {
        $rolls = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();
        //$rolls = RollCall::whereRaw('created_at IN (select MAX(created_at) FROM roll_calls GROUP BY rollno)')
        //->get();
        return view('admin.frecord.index',compact('rolls'));
    }
    public function show($id)
    {
        $rolls = StudentRegister::find($id);
        //->whereRaw('created_at IN (select MAX(created_at) FROM roll_calls GROUP BY date)')
        //->get();
        if (empty($rolls)) {
            Flash::error('record not found');
            return redirect(route('admin.frecord.index'));
        }
        return view('admin.frecord.show', compact('rolls'));
    }
}
