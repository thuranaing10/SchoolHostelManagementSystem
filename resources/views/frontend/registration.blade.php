@extends('frontend.layout.app')
@section('content')
<h3 align="center"><b>2019-2020 Academic Year<br>Student Hostel Registration Form</b></h3>
<div class="table-m-50 container">
<form method="post" action="{{ url('registration') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
        <label for="rollno"><b>Roll No:</b></label>
        <input type="text" id="rollno" class="form-control" name="rollno" placeholder="Enter your rollno">
    </div>
    <div class="form-group">
        <label for="name"><b>Name</b></label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="ph"><b>Phone No:</b></label>
        <input type="text" id="ph" class="form-control" name="phone" placeholder="Enter your phone no">
    </div>
    <div class="form-group">
        <label for="email"><b>Email</b></label>
        <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email">
    </div>
    <div class="form-group">
        <label for="address"><b>Address</b></label>
        <input type="text" id="address" class="form-control" name="address" placeholder="Enter your address">
    </div>
    <div class="form-check form-group">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
        <label class="form-check-label" for="exampleRadios1" style="font-size: 15px;"><b>Male</b></label>
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
        <label class="form-check-label" for="exampleRadios2" style="font-size: 15px;"><b>Female</b></label>
    </div>
    <!-- <div>
        
        <input type="radio" name="gender" value="male">&nbsp;&nbsp;&nbsp;
        <label for="male">Male</label> -->
        <!-- <label for="female">Female</label>
        <input type="radio" class="form-control" name="gender" value="female"> -->
   <!-- </div> -->
    <div class="form-group">
        <label for="nrc"><b>NRC</b></label>
        <input type="text" id="nrc" class="form-control" name="nrc" placeholder="Enter your nrc">
    </div>
    <div class="form-group">
        <label for="fname"><b>Father's Name</b></label>
        <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter your father's name">
    </div>
    <div class="form-group">
        <label for="fpro"><b>Father's Profession</b></label>
        <input type="text" id="fpro" class="form-control" name="fpro" placeholder="Enter your father's profession">
    </div>
    <div class="form-group">
        <label for="mname"><b>Mother's Name</b></label>
        <input type="text" id="mname" class="form-control" name="mname" placeholder="Enter your mother's name">
    </div>
    <div class="form-group">
        <label for="mpro"><b>Mother's Profession</b></label>
        <input type="text" id="mpro" class="form-control" name="mpro" placeholder="Enter your father's profession">
    </div>
    <div class="form-group">
        <label for="pphone"><b>Parents' Phone No:</b></label>
        <input type="text"id="pphone" class="form-control" name="pphone" placeholder="Enter your parents' phone no:">
    </div>
    <div class="form-group">
        <label for="image"><b>Image</b></label>
        <input type="file" id="gallery-photo-add" class="form-control-file" name="image" multiple="">
        <div class="gallery"></div>
    </div><br>
  <button type="submit" class="btn btn-primary" style="margin-left: 3%;">Submit</button>
</form>
</div>
<br>
@endsection