@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment
        </h1>
        <span class="breadcrumb"><a href='{{ route("fpayment.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Payment</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($roll, ['route' => ['fpayment.update', $roll->id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('rollno', 'Roll No:') !!} <span class="text-danger">*</span>
                        <input type="text" name="rollno" class="form-control" value="<?php echo $roll->rollno; ?>" disabled required="" />
                        @if ($errors->has('rollno'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('rollno') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name:') !!} <span class="text-danger">*</span>   
                        <input type="text" name="name" class="form-control" value="<?php echo $roll->name; ?>" disabled required="" />
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('date', 'Payment Date:') !!} <span class="text-danger">*</span>
                        <input type="date" name="date" class="form-control" value="<?php echo date('m-d-Y') ?>" required="" />
                        @if ($errors->has('date'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('fpayment.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection