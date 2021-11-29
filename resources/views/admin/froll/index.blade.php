@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <p style="float: right;"><?php echo date('d/m/Y'); ?></p>
        <h1>
            Roll Call 
        </h1>

    </section>
    <div class="content">
        {{--<div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                </div>
                <a href="{!! route('frollcall.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>--}}
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
                        <th>Today Attendance</th>
                        <th>Remarks</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($rolls as $roll)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $roll->rollno !!}</td>
                            <td>{!! $roll->name !!}</td>
                            <td>{!! showPrettyStatus1(getId($roll->id)) !!}</td>
                            <td>{!! getRemark($roll->id) !!}</td>
                            {{--<td>{!! showPrettyStatus($roll->status) !!}</td>--}}
                            <td>
                                <a href="{!! route('frollcall.edit', [$roll->id]) !!}"
                               class='btn btn-xs btn-primary'><!-- <i class="fa fa-check-square-o"></i> -->&nbsp;RollCall</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection