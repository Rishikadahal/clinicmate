@extends('dashboard.layouts.main')
@section('content')

<?php

use App\Models\Patient;

    $patient = Patient::latest()->get();

?>

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between">
        <h1 class="mt-4">Product</h1>
        <div class="mt-4">
            <a href="/add-patient" class="btn btn-primary">Add Product</a>
        </div>
    </div>

    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Patient List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Age</th>
                        <th>Service</th>
                        <th>Charge</th>
                        <th>Arrival date</th>
                        <th>Action</th>
                    </tr>
                </thead>
             
                <tbody>
                    @foreach($patient as $p)
                    <tr>
                        <td>{{$p->name}}</td>
                        <td>{{$p->gender}}</td>
                        <td>{{$p->phone_number}}</td>
                        <td>{{$p->age}}</td>
                        <td>{{$p->service}}</td>
                        <td>{{$p->total}}</td>

                        <td>{{$p->arrival}}</td>
                        <td><a href="/edit-patient/{{$p->id}}" class="btn btn-primary btn-sm">Edit</a><a href="/delete-patient/{{$p->id}}" class="btn btn-danger btn-sm ms-2">Delete</a></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection