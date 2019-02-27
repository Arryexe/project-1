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
		->orWhere('phone1', 'like', $searchKeyword)
		->orWhere('phone2', 'like', $searchKeyword)
		->orWhere('phone3', 'like', $searchKeyword)
		->orderBy('first_name', 'asc')->get();

		return view('employees.index', compact('employees'));
	}

	public function insert() {
		return view('employees.insert');
	}

	public function store(Request $request) {

		$employees = new Employe;

		$employees->first_name = $request->get('first_name');
		$employees->last_name = $request->get('last_name');
		$employees->email = $request->get('email');
		$employees->phone1 = $request->get('phone1');
		$employees->phone2 = $request->get('phone2');
		$employees->phone3 = $request->get('phone3');
		$employees->save();

		return redirect('employees');
	}

}