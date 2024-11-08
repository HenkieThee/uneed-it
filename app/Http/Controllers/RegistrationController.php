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
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'naam' => 'required|max:255',
            'telefoonnummer' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'password' => 'required',
        ]);

        $userId = DB::table('users')->insertGetId([
            'naam' => $validatedData['naam'],
            'telefoonnummer' => $validatedData['telefoonnummer'], 
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'password' => $validatedData['password'], 
            'role' => 'user',
        ]);

        session(['user' => [
            'id' => $userId,
            'naam' => $validatedData['naam'],
            'telefoonnummer' => $validatedData['telefoonnummer'],
            'address' => $validatedData['address'],
            'email' => $validatedData['email'],
            'role' => 'user',
        ]]);

        return redirect('account');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = DB::table('users')->where('email', $validatedData['email'])->first();
    
        if ($user && $validatedData['password'] === $user->password) {
            session(['user' => [
                'id' => $user->id, 
                'naam' => $user->naam,
                'telefoonnummer' => $user->telefoonnummer,
                'address' => $user->address,
                'email' => $user->email,
                'role' => $user->role,
            ]]);
    
            return redirect('account');
        } else {
            return back();
        }
    }

    public function updateUserInfo(Request $request)
    {
        $validatedData = $request->validate([
            'newName' => 'required|max:255',
            'newPhoneNumber' => 'required',
            'newEmail' => 'required|email',
            'newAddress' => 'required',
        ]);
    
        $currentName = session('user')['naam'];
    
        DB::table('users')
            ->where('naam', $currentName)
            ->update([
                'naam' => $validatedData['newName'],
                'telefoonnummer' => $validatedData['newPhoneNumber'],
                'email' => $validatedData['newEmail'],
                'address' => $validatedData['newAddress'],
            ]);
    
        session(['user' => [
            'naam' => $validatedData['newName'],
            'telefoonnummer' => $validatedData['newPhoneNumber'],
            'address' => $validatedData['newAddress'],
            'email' => $validatedData['newEmail'],
        ]]);
    
        return redirect('account')->with('status', 'Information updated successfully.');
    }

    public function logout()
    {
        // Clear Laravel's session data
        session()->flush();
    
        return redirect('/');
    }

    public function submitDefectForm(Request $request)
    {
        $request->validate([
            'defect' => 'required',
            'machine' => 'required',
            'garantie' => 'required',
            'datum' => 'required|date',
            'photo' => 'nullable|file',
        ]);
    
        $photo_path = "";
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($request->photo->getClientOriginalName());
            $request->photo->move(public_path($target_dir), $target_file);
            $photo_path = $target_file;
        }
    
        DB::table('requests')->insert([
            'idvanklant' => $request->idvanklant,
            'typemachine' => $request->machine,
            'garantie' => $request->garantie,
            'datum' => $request->datum,
            'photo_path' => $photo_path,
            'omschrijving' => $request->defect,
        ]);
    
        return back();
    }

    public function recieveDefects()
    {
        $requests = DB::table('requests')
        ->join('users', 'requests.idvanklant', '=', 'users.id') 
        ->select('users.naam', 'users.telefoonnummer', 'users.email', 'users.address', 'requests.typemachine', 'requests.garantie', 'requests.datum', 'photo_path', 'requests.omschrijving')
        ->get();

    return view('verzoeken', ['requests' => $requests]);
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
