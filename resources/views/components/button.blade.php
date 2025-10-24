<div class="mt-auto d-flex justify-content-center gap-2">
    <a href="{{ $edit }}" class="btn btn-sm btn-outline-primary">Edit</a>
    <form action="{{ $delete }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-outline-danger">Delete</button>
    </form>
</div>
