@extends('layouts.app')

@section('content')
    <main class="container my-5">
        <h2 class="mb-4 text-center">List of Students</h2>

        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-sm btn-outline-success" href="{{ route('student-data.create') }}">
                Enlist Student
            </a>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($all as $row)
                <x-card :name="$row->name" :age="$row->age" :address="$row->address" :occupation="$row->occupation" :email="$row->email"
                    :edit="route('student-data.edit', $row->id)" :delete="route('student-data.destroy', $row->id)" />
            @endforeach
        </div>
    </main>
@endsection
