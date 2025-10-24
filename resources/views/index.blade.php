@extends('layouts.app')
@section('content')
    <main class="container text-center my-5">
      <h1>Welcome to the Students Module</h1>
      <p class="lead">This is your homepage where you can manage student profiles and perform related actions.</p>
      <a href="{{ route('student-data.index') }}" class="btn btn-primary">Go to Student List</a>
    </main>

@endsection
