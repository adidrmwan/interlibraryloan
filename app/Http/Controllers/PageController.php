<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* 
*/
class PageController extends Controller
{
	public function login()
	{
		return view('login');
	}
	public function adminlibrary()
	{
		return view('adminlibrary');
	}
	public function userlibrary()
	{
		return view('userlibrary');
	}
	public function denda()
	{
		return view('denda');
	}
	public function koleksi()
	{
		return view('koleksi');
	}
	public function loanprogress()
	{
		return view('loanprogress');
	}
	public function loanrequser()
	{
		return view('loanrequser');
	}
	public function loanhistory()
	{
		return view('loanhistory');
	}

	public function pustakawan()
	{
		return view('pustakawan');
	}
	public function addkoleksi()
	{
		return view('addkoleksi');
	}
	public function bookdetails()
	{
		return view('bookdetails');
	}
	public function loanlist()
	{
		return view('loanlist');
	}
	public function loanreq()
	{
		return view('loanreq');
	}
}
