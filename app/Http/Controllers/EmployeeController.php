<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index() {
        return view('employee.list');
    }

    public function create() {
        return view('employee.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'sometimes|image|mimes:gif,png,jpeg,jpg'
        ]);

        if ($validator->passes()) {
            // Your logic when validation passes goes here
        } else {
            return redirect()->route('employee.create')->withErrors($validator);
        }
    }
}
