@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Rules
        </h1>
        
        <span class="breadcrumb"><a href='{{ route("rule.create") }}' class="btn btn-sm btn-primary"><i
                class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Rule</a></span>
    </section>
    <div class="content">
        {{-- <div class="row">
            <form method="GET">
                <div class="form-group col-sm-3 mmtext">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <a href="{!! route('rule.index') !!}" class="btn btn-info">Clear</a>
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
                        <th>Description</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($rules as $rule)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $rule->description !!}</td>
                            <td>
                            <a href="{!! route('rule.edit', [$rule->id]) !!}"
                               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                            <a href="#" type="button" data-id="{{ $rule->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/rule/'.$rule->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $rules->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection