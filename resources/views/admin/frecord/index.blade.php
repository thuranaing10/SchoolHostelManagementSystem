@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Roll Call Record
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
                        <!-- <th>Attendance</th> -->
                        <!-- <th>Date</th> -->
                        <th colspan="3">View Details</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($rolls as $roll)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $roll->rollno !!}</td>
                            <td>{!! $roll->name !!}</td>
                            {{--<td>{!! showPrettyStatus1($roll->status) !!}</td>--}}
                            {{--<td>{!! $roll->date !!}</td>--}}
                                
                            {{--<td>{!! showPrettyStatus1($roll->status) !!}</td>--}}
                            <td>
                                <div class='btn-group'>
                                    <a href="{!! route('frecord.show', [$roll->id]) !!}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"></i>  All Records</a>
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