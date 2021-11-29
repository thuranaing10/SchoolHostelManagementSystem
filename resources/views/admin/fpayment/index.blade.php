@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment
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
                        <!-- <th>Status</th>
                        <th>Date</th> -->
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($rolls as $roll)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $roll->rollno !!}</td>
                            <td>{!! $roll->name !!}</td>    
                            {{--<td>{!! showPrettyStatus1($roll->status) !!}</td>--}}
                            <td>
                                <div>
                                    <a href="{!! route('fpayment.edit', [$roll->id]) !!}"
                               class='btn btn-sm btn-primary'><!-- <i class="fa fa-check-square-o"></i> -->&nbsp;Pay</a>&nbsp;&nbsp;

                                    <a href="{!! route('fpayment.show', [$roll->id]) !!}" class='btn btn-primary btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
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