<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Fee;
use App\Http\Requests\Backend\FeeRequest;
Use Alert;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fee::paginate(25);
        return view('admin.fee.index', compact('fees'));
    }
    public function user(){
        $fees = Fee::paginate(25);
        return view('frontend.fee',compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeRequest $request)
    {
        Fee::create($request->all());
        Alert::success('Success', 'Successfully Created Fee');
        return redirect(route('fee.index'));
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
        $fee = Fee::find($id);
        if(empty($fee)) {
            Alert::error('Error', 'Fee Not Found');
            return redirect(route('fee.index'));
        }
        return view('admin.fee.edit', compact('fee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeeRequest $request, $id)
    {
        $fee = Fee::find($id);
        if(empty($fee)) {
            Alert::error('Error', 'Fee Not Found');
            return redirect(route('fee.index'));
        }
        $fee->update($request->all());
        Alert::success('Success', 'Successfully Updated Fee');
        return redirect(route('fee.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fee = Fee::find($id);
        if(empty($fee)) {
            Alert::error('Error', 'Fee Not Found');
            return redirect(route('fee.index'));
        }
        $fee->delete();
        Alert::success('Success', 'Successfully deleted Fee');
        return redirect(route('fee.index'));
    }
}
