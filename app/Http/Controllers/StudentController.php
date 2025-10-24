<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function view()
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
        $create = DB::table('students')->insert([
            [
                'name' => 'Nyna Nones',
                'age' => '27',
                'address' => 'Lingsat, City of San Fernando, La Union',
                'occupation' => 'End User Support',
                'email' => 'nyna.nones@lorma.edu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Serena Magdalena',
                'age' => '23',
                'address' => 'Madayegdeg, City of San Fernando, La Union',
                'occupation' => 'Accountant',
                'email' => 'serena.magdalena@lorma.edu',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $all = DB::table('students')->get();
        return view('students.view', compact('create', 'all'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
