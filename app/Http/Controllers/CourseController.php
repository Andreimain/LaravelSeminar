<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view('course.view', compact('data'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_code' => ['required', 'string', 'max:100'],
            'course_desc' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('courses', 'public');
        }

        Course::create($validated);

        return redirect()->route('courses.index')->with('status', 'Course added');
    }

    public function edit(Course $course)
    {
        return view('course.edit', ['row' => $course]);
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validated = $request->validate([
            'course_code' => ['required', 'string', 'max:100'],
            'course_desc' => ['required', 'string'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('photo')) {
            if ($course->photo) {
                Storage::disk('public')->delete($course->photo);
            }
            $validated['photo'] = $request->file('photo')->store('courses', 'public');
        }

        $course->update($validated);

        return redirect()->route('courses.index')->with('status', 'Course updated');
    }

    public function destroy(Course $course)
    {
        if ($course->photo) {
            Storage::disk('public')->delete($course->photo);
        }

        $course->delete();

        return redirect()->route('courses.index')->with('status', 'Course deleted');
    }
}
