@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@section('content')
<body class="bg-success">
<div class="bg-light d-flex justify-content-between container shadow-lg border p-3" style="width:950px;">
    <div>
        <h2 class="display-6">Employee List</h2>
    </div>
    <div>
        <a href="{{ route('employees.create') }}" class="btn btn-success text-light mt-2">
            <i class="bi bi-plus-circle-dotted"></i> Add New Employee
        </a>
    </div>
</div>

<div class=" bg-light container shadow-lg border p-4" style="width:950px; margin: 0 auto;">
    <div class="d-flex justify-content-center">
        <table class="table table-secondary table-striped">
            <thead>
                <tr class="table table-secondary table-striped">
                    <th>Name</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>DOJ</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->dob }}</td>
                        <td>{{ $employee->doj }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn"><i class="bi bi-trash3"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


   
</div>
</body>
@endsection


    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
   
