@extends('layouts.app')

@section('content')
<body class="bg-success">
<div class=" bg-light container-fluid shadow-lg border 1 p-2" style="width:750px">
    <h2 class="display-6 d-flex justify-content-center">Edit Employee</h2>
    <hr>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="p-2 mb-1">
                <label for="name"><b>Name:</b> </label>
                <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
            </div>

            <div  class="p-2 mb-1">
                <label for="age"><b>Age: </b></label>
                <input type="number" name="age" class="form-control" value="{{ $employee->age }}" required><br>
            </div>

         
            <div class="d-flex justify-content align-items-center mb-4 p-2 mb-1">
                <div style="width:300px"> 
                    <label for="dob"> <b> Date Of Birth : </b> </label>
                    <input type="date" name="dob" class="form-control"
                        value="{{ $employee->dob }}" required>
                </div>
                    
        
                <div class="ms-3" style="width:300px">
                    <label for="doj"> <b>Date Of Join: </b></label>
                    <input type="date" name="doj" class="form-control"
                        value="{{ $employee->doj }}" required>
                </div>
            </div>
           

            <div  class="p-2 mb-1">
                <label for="phone"> <b>Phone : </b></label>
                <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" required><br>
            </div>
           
            <div  class="p-2 mb-1">
                <label for="email"> <b>Phone : </b></label>
                <input type="email" name="email" class="form-control" value="{{ $employee->email }}" required><br>
            </div>
           
            <div class="d-flex justify-content-center mx-2 px-2">

                <button class='btn btn-outline-success' type="submit">Update</button>
                
                <a href="{{ route('employees.index') }}" class="btn btn-success m-6"><i class="bi bi-skip-backward-circle-fill"></i> Back</a>
            </div>      
    </form>
</div>
</body>
@endsection
