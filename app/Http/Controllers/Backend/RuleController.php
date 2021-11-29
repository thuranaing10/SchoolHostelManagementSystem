<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Rule;
use App\Http\Requests\Backend\RuleRequest;
Use Alert;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rule::paginate(25);
        return view('admin.rule.index', compact('rules'));
    }
    public function user(){
        $rules = Rule::paginate(25);
        return view('frontend.rule',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleRequest $request)
    {
        Rule::create($request->all());
        Alert::success('Success', 'Successfully Created Rule');
        return redirect(route('rule.index'));
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
        $rule = Rule::find($id);
        if(empty($rule)) {
            Alert::error('Error', 'Rule Not Found');
            return redirect(route('rule.index'));
        }
        return view('admin.rule.edit', compact('rule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuleRequest $request, $id)
    {
        $rule = Rule::find($id);
        if(empty($rule)) {
            Alert::error('Error', 'Rule Not Found');
            return redirect(route('rule.index'));
        }
        $rule->update($request->all());
        Alert::success('Success', 'Successfully Updated Rule');
        return redirect(route('rule.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rule = Rule::find($id);
        if(empty($rule)) {
            Alert::error('Error', 'Rule Not Found');
            return redirect(route('rule.index'));
        }
        $rule->delete();
        Alert::success('Success', 'Successfully deleted Rule');
        return redirect(route('rule.index'));
    }
}
