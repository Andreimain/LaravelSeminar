@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center text-dark fw-bold">Profile Settings</h2>

    <div class="row g-4 justify-content-center">
        <!-- Update Profile Info -->
        <div class="col-12 col-md-6 d-flex">
            <div class="card shadow border-0 rounded-4 flex-fill">
                <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
                    Update Profile Information
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>

        <!-- Update Password -->
        <div class="col-12 col-md-6 d-flex">
            <div class="card shadow border-0 rounded-4 flex-fill">
                <div class="card-header bg-success text-white fw-semibold rounded-top-4">
                    Update Password
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>

        <!-- Delete Account -->
        <div class="col-12 col-md-8">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-danger text-white fw-semibold rounded-top-4">
                    Delete Account
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
