@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Fee
        </h1>
        <span class="breadcrumb"><a href='{{ route("fee.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Fee</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($fee, ['route' => ['fee.update', $fee->id], 'method' => 'patch']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::label('title', 'Title:') !!} <span class="text-danger">*</span>
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('price', 'Price:') !!} <span class="text-danger">*</span>
                        {!! Form::number('price', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('price'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                       @endif
                    </div>


                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('fee.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection