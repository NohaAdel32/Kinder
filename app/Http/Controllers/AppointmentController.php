<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointment = Appointment::paginate(3);
        return view('admin.appointments', compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 
        view('appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'gurdianName'=>'required|string|max:50',
            'gurdianEmail'=> 'required|email:rfc,dns',
            'childName' => 'required|string',
            'childAge' => 'required|integer',
            'message' => 'required',
            ]);
       Appointment::create($data);
     return  redirect('Appointment')->with('success', 'Thanks for you');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment= Appointment::findOrFail($id);
        return view('admin.showAppointment', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::where('id', $id)->delete();
        return redirect('admin/appointments')->with('danger', 'Delete Data Success');
    }
}
