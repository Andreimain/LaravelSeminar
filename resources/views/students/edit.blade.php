<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-3xl">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Edit Student</h2>

        <form method="POST" action="{{ route('student-data.update', $row->id) }}">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">

                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name', $row->name) }}"
                        autocomplete="name"
                        class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>

                <div class="sm:col-span-3">
                    <label for="age" class="block text-sm font-medium text-gray-900">Age</label>
                    <input id="age" type="text" name="age" value="{{ old('age', $row->age) }}"
                        autocomplete="age"
                        class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>

                <div class="sm:col-span-3">
                    <label for="address" class="block text-sm font-medium text-gray-900">Address</label>
                    <input id="address" type="text" name="address" value="{{ old('address', $row->address) }}"
                        autocomplete="address"
                        class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>

                <div class="sm:col-span-3">
                    <label for="occupation" class="block text-sm font-medium text-gray-900">Occupation</label>
                    <input id="occupation" type="text" name="occupation"
                        value="{{ old('occupation', $row->occupation) }}" autocomplete="occupation"
                        class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>

                <div class="sm:col-span-6">
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $row->email) }}"
                        autocomplete="email"
                        class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                </div>
            </div>

            <div class="mt-8 flex justify-end gap-x-4">
                <a href="{{ route('student-data.index') }}"
                    class="rounded-md bg-gray-300 px-4 py-2 text-sm font-semibold text-gray-800 shadow hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">
                    Cancel
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                    Update
                </button>
            </div>
        </form>
    </div>
</body>

</html>
