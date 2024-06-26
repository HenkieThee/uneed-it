<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naam' => 'required|max:255',
            'telefoonnummer' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'password' => 'required',
        ]);
    
        DB::table('users')->insert([
            'naam' => $validatedData['naam'],
            'telefoonnummer' => $validatedData['telefoonnummer'], 
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'password' => $validatedData['password'], 
            'role' => 'user',
        ]);
    
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
