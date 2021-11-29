@extends('frontend.layout.app')

@section('content')
<center><h3><b>Hostel Rules</b></h3></center>
<div class="rule container">
    <div class="content table-m-50">
        {{-- <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <a href="{!! route('rule.index') !!}" class="btn btn-info">Clear</a>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div> --}}
        <!-- <div class="box box-primary">
            <div class="box-body"> -->
                
                <table class="table table-striped" style="font-family: arial;">
                    <thead>
                        <th><b>No.</b></th>
                        <th><b>Description</b></th>
                        <!-- <th colspan="3">Action</th> -->
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($rules as $rule)
                        <tr style="width: 100px;height: 50px;">
                            <td>{{ $index++ }}</td>
                            <td>{!! $rule->description !!}</td>
                            {{--<td>
                            <a href="{!! route('rule.edit', [$rule->id]) !!}"
                               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                            <a href="#" type="button" data-id="{{ $rule->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/rule/'.$rule->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- <div class="pull-right"> -->
                    {{-- $rules->appends($_GET)->links() --}}
                <!-- </div> -->
        </div>
    </div>
@endsection