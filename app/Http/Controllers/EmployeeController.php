<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Show All Employees
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Show Create Employee Form
    public function create()
    {
        return view('employees.create');
    }

    // Store Employee
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'doj' => 'required|date',
            'phone' => 'required|string',
            'email' => 'required|email|unique:employees',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }

    // Show Single Employee
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    // Show Edit Form
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    // Update Employee
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'doj' => 'required|date',
            'phone' => 'required|string',
            'email' => 'required|email|unique:employees,email,' . $id,
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    // Delete Employee
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()->route('employees.index');
    }
}
?>