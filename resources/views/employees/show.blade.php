@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@section('content')
<body class="bg-success">
<div class="bg-light container shadow-lg border p-4" style="width:950px; margin: 0 auto;">
    <h2 class="">Employee Details</h2>
    <hr>
    <div class="mb-3">
        <label for="name"><b>Name</b></label>
        <input class="form-control" type="text" value="{{ $employee->name }}" aria-label="readonly input example" disabled>
    </div>
    
    <div class="mb-3">
        <label for="age"><b>Age</b></label>
        <input class="form-control" type="text" value="{{ $employee->age }}" aria-label="readonly input example" disabled>
    </div>
    
    <div class="d-flex justify-content align-items-center mb-4">
        <div style="width:300px"> 
            <label for="dob"> <b> Date Of Birth : </b> </label>
            <input type="date" name="dob" class="form-control" value="{{ $employee->dob }}" aria-label="readonly input example" disabled>
        </div>
        

        <div class="ms-3" style="width:300px">
            <label for="doj"> <b>Date Of Join: </b></label>
            <input type="date" name="doj" class="form-control" value="{{ $employee->doj }}"  aria-label="readonly input example" disabled>
        </div>
    </div>

    <div class="mb-3">
        <label for="phone"><b>Phone</b></label>
        <input class="form-control" type="text" value=" {{ $employee->phone }}" aria-label="readonly input example" disabled>
    </div>

    <div class="mb-3">
        <label for="email"><b>Email</b></label>
        <input class="form-control" type="text" value="  {{ $employee->email }}" aria-label="readonly input example" disabled>
    </div>
   
    <a href="{{ route('employees.index') }}" class="btn btn-success"><i class="bi bi-skip-backward-circle-fill"></i> Back</a>
</div>
</body>
@endsection
