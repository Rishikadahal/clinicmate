@extends('dashboard.layouts.main')
@section('content')

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between">
        <h1 class="mt-4">Add Patient</h1>
        <div class="mt-4">
            <a href="/dashboard" class="btn btn-primary">Back</a>
        </div>
    </div>
    <hr>

    <div class="mb-4 row justify-content-center">
        <div class="col-lg-6">
            <form action="/add-patient" method="post">
                @csrf
                <div class="form-group my-3">
                    <label for="">Patient Name</label>
                    <input type="text" name="name" id="" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Patient Age</label>
                    <input type="number" name="age" id="" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Patient Gender</label>
                    <select name="gender" class="form-control" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Date of arrival</label>
                    <input type="date" name="arrival" id="" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Patient Phone Number</label>
                    <input type="number" name="phone_number" id="" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Patient Address</label>
                    <input type="text" name="address" id="" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Patient Service</label>
                    <input type="text" name="service" id="" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label for="">Patient Total</label>
                    <input type="number" step='any' name="total" id="" class="form-control" required>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary form-control">
            </form>
        </div>

    </div>
</div>


@endsection