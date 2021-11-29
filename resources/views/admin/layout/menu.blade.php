@if('ADMIN' == Auth::user()->usertype)
<li class="{{ Request::is('user*') ? 'active' : '' }}">
    <a href="{{ route('user.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
@endif
<!-- male -->
@if('MALE' == Auth()->user()->usertype)
	<li class="{{ Request::is('register*') ? 'active' : '' }}">
	    <a href="{{ url('register/index') }}"><i class="fa fa-edit"></i><span>Registrated Students</span></a>
	</li>
	<li class="{{ Request::is('select*') ? 'active' : '' }}">
	    <a href="{{ route('select.index') }}"><i class="fa fa-edit"></i><span>Selected Students</span></a>
	</li>
	<li class="{{ Request::is('rollcall*') ? 'active' : '' }}">
	    <a href="{{ route('rollcall.index') }}"><i class="fa fa-edit"></i><span>Rollcall
	    </span></a>
	</li>
	<li class="{{ Request::is('record*') ? 'active' : '' }}">
	    <a href="{{ route('record.index') }}"><i class="fa fa-edit"></i><span>Rollcall Record
	    </span></a>
	</li>
	<li class="{{ Request::is('payment*') ? 'active' : '' }}">
	    <a href="{{ route('payment.index') }}"><i class="fa fa-edit"></i><span>Payment
	    </span></a>
	</li>
@endif

<!-- female -->
@if('FEMALE' == Auth()->user()->usertype)
	<li class="{{ Request::is('fregister*') ? 'active' : '' }}">
	    <a href="{{ url('fregister/index') }}"><i class="fa fa-edit"></i><span>Registrated Students</span></a>
	</li>
	<li class="{{ Request::is('fselect*') ? 'active' : '' }}">
	    <a href="{{ route('fselect.index') }}"><i class="fa fa-edit"></i><span>Selected Students</span></a>
	</li>
	<li class="{{ Request::is('frollcall*') ? 'active' : '' }}">
	    <a href="{{ route('frollcall.index') }}"><i class="fa fa-edit"></i><span>Rollcall
	    </span></a>
	</li>
	<li class="{{ Request::is('frecord*') ? 'active' : '' }}">
	    <a href="{{ route('frecord.index') }}"><i class="fa fa-edit"></i><span>Record
	    </span></a>
	</li>
	<li class="{{ Request::is('fpayment*') ? 'active' : '' }}">
	    <a href="{{ route('fpayment.index') }}"><i class="fa fa-edit"></i><span>Payment
	    </span></a>
	</li>
@endif

<?php
	$array = ['FEMALE', 'MALE'];
?>

@if(in_array(Auth::user()->usertype, $array))
	<li class="{{ Request::is('fee*') ? 'active' : '' }}">
	    <a href="{{ route('fee.index') }}"><i class="fa fa-edit"></i><span>Fee</span></a>
	</li>
	<li class="{{ Request::is('rule*') ? 'active' : '' }}">
	    <a href="{{ route('rule.index') }}"><i class="fa fa-edit"></i><span>Rule</span></a>
	</li>
@endif