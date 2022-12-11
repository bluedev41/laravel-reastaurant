<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Employee;


class LoginController extends Controller
{
    public function index(Request $request) {
        return view('login');
    }

    public function verify(LoginRequest $request) {
        $employee = Employee::where([
            'email' => $request->email,
            'password' => $request->password])
            ->first();

        if($employee){
            if(!$employee->is_admin){
                $request->session()->put('employee', $employee);
                return redirect()->route('employee.home');
            }
            else {
                $request->session()->put('admin', $employee);
                return redirect()->route('admin.home');
            }
        }
        else {
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login');
        }
    }
}
