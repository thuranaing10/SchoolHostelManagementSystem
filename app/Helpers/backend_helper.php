<?php
use App\User;
use App\Model\RollCall;
use App\Model\Payment;

function showPrettyStatus($status)
{
    switch ($status) {
        case TRUE:
            return '<i class="fa fa-check-circle text-green"></i>';
            break;
        case FALSE:
            return '<i class="fa fa-times-circle-o text-red"></i>';
            break;
    }
}
function showPrettyStatus1($status)
{
    switch ($status) {
        case 1:
            return '<b class="text-green">Present</b>';
            break;
        case 0:
            return '<b class="text-red">Absent</b>';
            break;
        case 2:
            return '<b class="text-red"></b>';
            break;
    }
}


function getId($id){
	$data = RollCall::where('student_registers_id','=',$id)->where('date','=',date("Y-m-d"))->orderBy('updated_at', 'DESC')->first();
	if($data == null)
		return "2";
	return $data->status;
}
function getRemark($id){
    $data = RollCall::where('student_registers_id','=',$id)->where('date','=',date("Y-m-d"))->orderBy('updated_at', 'DESC')->first();
    if($data == null)
        return "";
    return $data->remark;
}
function getRecord($id){
    $data = RollCall::whereRaw('created_at IN (select MAX(created_at) FROM roll_calls GROUP BY date,student_registers_id)')
        ->where('student_registers_id','=',$id)
        ->orderBy('date', 'DESC')
        ->get();
    return $data;
}
function getPayment($id){
    $data = Payment::where('student_registers_id','=',$id)
        ->orderBy('date', 'DESC')
        ->get();
    return $data;
}