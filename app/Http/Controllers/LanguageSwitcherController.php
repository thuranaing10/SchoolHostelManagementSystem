<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageSwitcherController extends Controller
{
    public function languageSwitcher(Request $request)
    {
    	$data = $request->all();
    	$locale = $data['language'];
    	Session::put('locale',$locale);
    	return response()->json(['success' => true]);
    }

    public function showLanguage() {
    	return view('frontend.language');
    }
}
