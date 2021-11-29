@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Registrated Students
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

                <table class="table table-striped table-hover tbl_repeat" id="sortable">
                    <thead>
                        <th>No.</th>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Father's Name</th>
                        <th>Select</th>
                        <th colspan="3">View Details</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($registers as $register)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $register->rollno !!}</td>
                            <td>{!! $register->name !!}</td>
                            <td>{!! $register->phone !!}</td>
                            <td>{!! $register->fname !!}</td>
                            <td>{!! showPrettyStatus($register->status) !!}</td>
                            <td>
                                <div class='btn-group'>
                                    <a href="{!! route('register.show', [$register->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection