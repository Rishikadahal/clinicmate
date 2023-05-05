<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('dashboard.index');
    }

    function addPatient()
    {
        return view('dashboard.addPatient');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|string|max:255',
            'arrival' => 'required|date',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $patient = new Patient();
        $patient->name = $validatedData['name'];
        $patient->age = $validatedData['age'];
        $patient->gender = $validatedData['gender'];
        $patient->arrival = $validatedData['arrival'];
        $patient->phone_number = $validatedData['phone_number'];
        $patient->address = $validatedData['address'];
        $patient->service = $validatedData['service'];
        $patient->total = $validatedData['total'];
        $patient->save();

        return redirect('/dashboard')->with('success', 'Patient added successfully.');
    }

    function deletePatient($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return back();
    }

    function editPatient($id)
    {
        $patient = Patient::find($id);
        return view('dashboard.editPatient',compact('patient'));
    }

    public function updatePatient(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|string|max:255',
            'arrival' => 'required|date',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $patient = Patient::find($id);
        $patient->name = $validatedData['name'];
        $patient->age = $validatedData['age'];
        $patient->gender = $validatedData['gender'];
        $patient->arrival = $validatedData['arrival'];
        $patient->phone_number = $validatedData['phone_number'];
        $patient->address = $validatedData['address'];
        $patient->service = $validatedData['service'];
        $patient->total = $validatedData['total'];
        $patient->update();

        return redirect('/dashboard')->with('success', 'Patient added successfully.');
    }
}
