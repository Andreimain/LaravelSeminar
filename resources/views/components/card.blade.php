<div class="col">
    <div class="card shadow-sm h-100">

        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Student Photo" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#6c757d" />
            <text x="50%" y="50%" fill="#fff" dy=".3em" text-anchor="middle">Student Photo</text>
        </svg>

        <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text mb-1"><strong>Age:</strong> {{ $age }}</p>
            <p class="card-text mb-1"><strong>Address:</strong> {{ $address }}</p>
            <p class="card-text mb-1"><strong>Occupation:</strong> {{ $occupation }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $email }}</p>

            <div class="mt-2">
                <x-button :edit="$edit" :delete="$delete" />
            </div>
        </div>
    </div>
</div>
