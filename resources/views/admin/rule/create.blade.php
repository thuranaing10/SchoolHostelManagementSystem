@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Create Rule
        </h1>
        <span class="breadcrumb"><a href='{{ route("rule.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Rule</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'rule.store', 'files' => 'true']) !!}
                    <div class="form-group col-sm-12">
                        <textarea id="description" class="editor" name="description" rows="10" cols="50"></textarea>
                         @if ($errors->has('description'))
                             <span class="text-danger">
                                 <strong>{{ $errors->first('description') }}</strong>
                             </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('rule.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection