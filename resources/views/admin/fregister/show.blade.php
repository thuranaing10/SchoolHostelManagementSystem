@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Student Details
        </h1>
    </section>
    <div class="content">
        {{-- <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <a href="{!! route('register.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div> --}}
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <!-- Flash -->
        
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <form method="post" action="{{ url('fregister/'.$register->id) }}">
                    {{ csrf_field() }}
                    <table class="table table-striped table-hover tbl_repeat" id="sortable">
                            <tr>
                                <td cols="2" align="center">
                                    <img src="{{ asset('/images/' . json_decode($register->image,true)) }}" class="img-fluid" width="120" height="120">
                                </td>
                            </tr>
                            <tr>
                                <td>Roll No:</td>
                                <td>{!! $register->rollno !!}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{!! $register->name !!}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{!! $register->phone !!}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{!! $register->email !!}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{!! $register->address !!}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{!! $register->gender !!}</td>
                            </tr>
                            <tr>
                                <td>NRC</td>
                                <td>{!! $register->nrc !!}</td>
                            </tr>
                            <tr>
                                <td>Father's Name</td>
                                <td>{!! $register->fname !!}</td>
                            </tr>
                            <tr>
                                <td>Father's Profession</td>
                                <td>{!! $register->fpro !!}</td>
                            </tr>
                            <tr>
                                <td>Mother's Name</td>
                                <td>{!! $register->mname !!}</td>
                            </tr>
                            <tr>
                                <td>Mother's Profession</td>
                                <td>{!! $register->mpro !!}</td>
                            </tr>
                            <tr>
                                <td>Parents' Phone</td>
                                <td>{!! $register->pphone !!}</td>
                            </tr>
                            <tr>
                                <td>Select</td>
                                <td>
                                    <!-- <div class="form-group col-sm-6"> -->
                                        <div class="btn-group" id="status" data-toggle="buttons">
                                            @if($register->status == 1)
                                                <label class="btn btn-default btn-on btn-xs active">
                                                <input type="radio" value="1" name="status">Yes</label>
                                                <label class="btn btn-default btn-off btn-xs">
                                                <input type="radio" value="0" name="status">No</label>
                                            @else
                                                <label class="btn btn-default btn-on btn-xs">
                                                <input type="radio" value="1" name="status">Yes</label>
                                                <label class="btn btn-default btn-off btn-xs active">
                                                <input type="radio" value="0" name="status">No</label>
                                            @endif

                                        </div>
                                    <!-- </div> -->
                                </td>
                            </tr>
                    </table>
                    <div class="form-group col-sm-12">
                       <button type="submit" class="btn btn-primary">Update</button>
                       <a href="{{ url('fregister/index') }}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection