<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'job' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'civil_id' => 'required|numeric',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        Booking::create([
            'job' => $request->job,
            'name' => $request->name,
            'civil_id' => $request->civil_id,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('myfatorah', ['name' => $request->name]);
    }
}
