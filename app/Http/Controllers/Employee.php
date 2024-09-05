<?php

namespace App\Http\Controllers;

use App\Models\Employee as EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{
    //Show Data
    function employeeData()
    {
        $employees = EmployeeModel::all();
        return view('home', compact('employees'));
    }


    //Add data
    function addData(Request $request)
    {

        // dd($request->toArray());

        $request->validate([
            'name' => 'required',
            'full_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'description' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'กรุณากรอกชื่อ',
            'full_name.required' => 'กรุณากรอกชื่อเต็ม',
            'email.required' => 'กรุณากรอกอีเมล',
            'number.required' => 'กรุณากรอกหมายเลขโทรศัพท์',
            'description.required' => 'กรุณากรอกคำอธิบาย',
            'address.required' => 'กรุณากรอกที่อยู่',
            'city.required' => 'กรุณากรอกเมือง',
            'country.required' => 'กรุณาเลือกประเทศ',
            'postal_code.required' => 'กรุณากรอกรหัสไปรษณีย์',
            'status.required' => 'กรุณาเลือกสถานะ',
        ]);

        $data = [
            'name' => $request->name,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'number' => $request->number,
            'description' => $request->description,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'status' => $request->status,
        ];

        // EmployeeModel::created($data);
        DB::table('employees')->insert($data);

        $employees = EmployeeModel::all();
        return view('home', compact('employees'));
    }


    //Delete Data
    function deleteData($id)
    {
        EmployeeModel::find($id)->delete();
        $employees = EmployeeModel::all();
        return view('home', compact('employees'));
    }


    //Edit Data
    function editData($id)
    {
        $DataEm = EmployeeModel::find($id);
        return view('edit', compact('DataEm'));
    }

    //UpDate Data
    function updateData(Request $request, $id)
    {
        $emple = EmployeeModel::find($id);
        // dd($request->toArray());

        $request->validate([
            'name' => 'required',
            'full_name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'description' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'number' => $request->number,
            'description' => $request->description,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'status' => $request->status,
        ];

        $emple->update($data);
        // DB::table('employees')->update($emple);
        $employees = EmployeeModel::all();
        return view('home', compact('employees'));
    }
}
