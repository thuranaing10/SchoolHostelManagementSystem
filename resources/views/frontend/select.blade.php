@extends('frontend.layout.app')

@section('content')
<center><h3><b>Selected Students List</b></h3></center>
<div class="rule container">
    <div class="content table-m-50">
        <!-- <div class="clearfix"></div>
        <div class="clearfix"></div> -->

        <!-- Flash -->
        
        <!-- <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body"> -->
                <table class="table table-striped" style="font-family: arial;">
                    <thead>
                        <th><b>No.</b></th>
                        <th><b>Roll No</b></th>
                        <th><b>Name</b></th>
                        <th><b>Phone</b></th>
                        <th><b>Father's Name</b></th>
                        <!-- <th>Select</th> -->
                        <!-- <th colspan="3">View Details</th> -->
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($registers as $register)
                        <tr style="width: 100px;height: 50px;">
                            <td>{{ $index++ }}</td>
                            <td>{!! $register->rollno !!}</td>
                            <td>{!! $register->name !!}</td>
                            <td>{!! $register->phone !!}</td>
                            <td>{!! $register->fname !!}</td>
                            <!-- <td>{!! showPrettyStatus($register->status) !!}</td> -->
                            <!-- <td>
                                <div class='btn-group'>
                                    <a href="{!! route('select.show', [$register->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td> -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
           <!--  </div>
        </div> -->
    </div>
    </div>
@endsection