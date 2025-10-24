@extends('layouts.app')

@section('content')
    <main class="container my-5">
        <h2 class="mb-4 text-center">Courses Available</h2>

        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-sm btn-outline-success" href="{{ route('courses.create') }}">
                Create a Course
            </a>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($data as $row)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        @if ($row->photo)
                            <img src="{{ asset('storage/' . $row->photo) }}"
                                 alt="Course Photo"
                                 class="card-img-top"
                                 style="height: 225px; object-fit: cover;">
                        @else
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Course Image"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#6c757d" />
                                <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle">No Photo</text>
                            </svg>
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $row->course_code }}</h5>
                            <p class="card-text mb-1"><strong>Description:</strong> {{ $row->course_desc }}</p>

                            <div class="mt-auto d-flex justify-content-center gap-2">
                                <a href="{{ route('courses.edit', $row->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('courses.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
