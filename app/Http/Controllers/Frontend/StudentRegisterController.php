<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\StudentRegister;
use App\Model\RollCall;
use App\Http\Requests\Frontend\StudentRegisterRequest;
Use Alert;
use Image;
use Storage;
use Redirect;
use Flash;

class StudentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = StudentRegister::where('gender', '=', 'male')->get();
        return view('admin.register.index',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRegisterRequest $request)
    {
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $name);  
            $data = $name;  
        }
        $form = $request->all();
        $form['image']=json_encode($data);
        StudentRegister::create($form);
        Alert::success('Success', 'Registration Successfully');
        //return view('frontend.registration');
        return redirect(route('registration'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $register = StudentRegister::find($id);
        if (empty($register)) {
            Flash::error('student not found');
            return redirect(route('admin.register.index'));
        }

        return view('admin.register.show', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $register = StudentRegister::find($id);
        if(empty($register)) {
            Alert::error('Error', 'Student Not Found');
            return redirect(route('admin.register.index'));
        }
        $register->update($request->all());
        Alert::success('Success', 'Successfully Updated Student');
        return redirect(route('register.index'));
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
    public function user(){
        $registers = StudentRegister::where('status', '=', 1)->where('gender', '=', 'male')->get();
        return view('frontend.select',compact('registers'));
    }
    public function fselect(){
        $registers = StudentRegister::where('status', '=', 1)->where('gender', '=', 'female')->get();
        return view('frontend.select',compact('registers'));
    }






   //rollcall 
    // public function roll(){
    //     $rolls = StudentRegister::where('status', '=', 1)->where('gender', '=', 'male')->get();
    //     return view('admin.roll.index',compact('rolls'));
    // }
    // public function rolledit($id)
    // {
    //     $roll = StudentRegister::find($id);
    //     if(empty($roll)) {
    //         Alert::error('Error', 'Rule Not Found');
    //         return redirect(route('admin.roll.index'));
    //     }
    //     return view('admin.roll.edit', compact('roll'));
    // }
    // public function rollupdate(Request $request, $id){
    //     $roll = StudentRegister::find($id);
    //     //dd($request->id);
    //     if(empty($roll)) {
    //         Alert::error('Error', 'Student Not Found');
    //         return redirect(route('rollcall/roll'));
    //     }
    //     RollCall::create($request->all());
    //     //$rolls->create($request->all());
    //     Alert::success('Success', 'Successfully Inserted RollCall');
    //     return redirect(route('rollcall/roll'));
    // }
}
