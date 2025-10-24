<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = DB::table('students')->get();
        $data = DB::table('students')->first();
        return view('students.view', compact('all', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $address = $request->input('address');
        $occupation = $request->input('occupation');
        $email = $request->input('email');

        DB::table('students')->insert(
            [
                'name' => $name,
                'age' => $age,
                'address' => $address,
                'occupation' => $occupation,
                'email' => $email,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        $all = DB::table('students')->get();
        return view('students.view', compact('all'));
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
        $row = DB::table('students')
            ->where('id', $id)
            ->first();
        return view('students.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $address = $request->input('address');
        $occupation = $request->input('occupation');
        $email = $request->input('email');

        DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'age' => $age,
                'address' => $address,
                'occupation' => $occupation,
                'email' => $email,
                'updated_at' => now()
            ]);
        $all = DB::table('students')->get();
        return view('students.view', compact('all'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('students')
            ->where('id', $id)
            ->delete();

        $all = DB::table('students')->get();
        return view('students.view', compact('all'));
    }
}
