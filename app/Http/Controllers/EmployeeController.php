<?php

namespace App\Http\Controllers;

use App\Employe;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
	public function index(Request $request) {
		$searchKeyword = '%'.$request->get('search').'%';

		$employees = Employe::where('first_name', 'like', $searchKeyword)
		->orWhere('last_name', 'like', $searchKeyword)
		->orWhere('email', 'like', $searchKeyword)
		->orWhere('phone', 'like', $searchKeyword)->orderBy('first_name', 'acs')->get();

		return view('employees.index', compact('employees'));
	}

}
