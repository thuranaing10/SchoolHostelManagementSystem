@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment Records
        </h1>
        <span class="breadcrumb"><a href='{{ route("payment.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Payment</a></span>
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

                <table class="table table-striped table-hover tbl_repeat" id="sortable">
                    <tr>
                        <td><b>Roll No:</b></td>
                        <td>{!! $rolls->rollno !!}</td>
                    </tr>
                    <tr>
                        <td><b>Name</b></td>
                        <td>{!! $rolls->name !!}</td>
                    </tr>
                    <tr>
                        <td><b>Payment Date</b></td>
                        <td><b>Action</b></td>
                        <!-- <td>Attedance</td>
                        <td>Remarks</td> -->
                    </tr>
                    @foreach(getPayment($rolls->id) as $record)
                        <tr>
                            <td>{!! $record->date !!}</td>
                            <td><a href="#" type="button" data-id="{{ $record->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/payment/'.$record->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a></td>
                            {{--<td>{!! showPrettyStatus1($record->status) !!}</td>
                            <td>{!! $record->remark !!}</td>--}}
                        </tr>
                    @endforeach      
                        {{--<td>{!! showPrettyStatus1($roll->status) !!}</td>--}}
                        {{--<td>
                            <div class='btn-group'>
                                <a href="{!! route('record.show', [$roll->id]) !!}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i>  All Records</a>
                            </div>
                        </td>--}}
                </table>
            </div>
        </div>
    </div>
@endsection