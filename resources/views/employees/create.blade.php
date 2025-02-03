@extends('layouts.app')

@section('content')
<body class="bg-success">
<div class=" bg-light container-fluid shadow-lg border 1 p-2" style="width:750px">
    <h2 class=" d-flex justify-content-center display-6 p-2 d-flex">Add Employee</h2>
    <hr>
    <form action="{{ route('employees.store') }}" class="p-3" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name"><b>Name:</b> </label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="name"><b>Age:</b> </label> 
            <input type="number" name="age" class="form-control" required>
        </div>

        <div class="d-flex justify-content align-items-center mb-4">
            <div style="width:300px"> 
                <label for="dob"> <b> Date Of Birth : </b> </label>
                <input type="date" name="dob" class="form-control" required>
            </div>
            

            <div class="ms-3" style="width:300px">
                <label for="doj"> <b>Date Of Join: </b></label>
                <input type="date" name="doj" class="form-control" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="phone"> <b>Phone Number</b> </label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="email"> <b>Email:</b> </label>  
            <input type="email" name="email" class="form-control" required>
        </div>
        
        <div class="d-flex justify-content-center">
            <button  class="btn btn-outline-success " type="submit">Save</button>
        </div>
    </form>
</div>
</body>
@endsection
