<?php namespace App\Http\Controllers\Stu;

use Auth;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentMesRequest;


class StudentController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('stu.home');
    }

    public function edit()
    {
        return view('stu.edit');
    }

    public function update(StudentMesRequest $request)
    {
        Auth::user()->update($request->all());

        session()->flash('message', 'Student Info updated successfully!');

        return Redirect::route('stu_home');
    }



}
