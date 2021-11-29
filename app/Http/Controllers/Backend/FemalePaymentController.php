<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Payment;
use App\Model\StudentRegister;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;

class FemalePaymentController extends Controller
{
    public function index()
    {
        $rolls = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();
        return view('admin.fpayment.index',compact('rolls'));
    }
    public function edit($id)
    {
        $roll = StudentRegister::find($id);
        if(empty($roll)) {
            Alert::error('Error', 'Rule Not Found');
            return redirect(route('admin.fpayment.index'));
        }
        return view('admin.fpayment.edit', compact('roll'));
    }
    public function update(Request $request, $id)
    {
        $roll = StudentRegister::find($id);
        if(empty($roll)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('fpayment.index'));
        }
        $form = $request->all();
        $form['student_registers_id'] = $request->id;
        Payment::create($form);
        Alert::success('Success', 'Successfully Paid');
        return redirect(route('fpayment.index'));
    }
    public function show($id)
    {
        $rolls = StudentRegister::find($id);
        if (empty($rolls)) {
            Flash::error('payment not found');
            return redirect(route('admin.fpayment.index'));
        }
        return view('admin.fpayment.show', compact('rolls'));
    }
    public function destroy($id)
    {
        $payment = Payment::find($id);
        if(empty($payment)) {
            Alert::error('Error', 'payment Not Found');
            return redirect(route('fpayment.index'));
        }
        $payment->delete();
        Alert::success('Success', 'Successfully deleted Payment');
        return redirect(route('fpayment.index'));
    }
}
