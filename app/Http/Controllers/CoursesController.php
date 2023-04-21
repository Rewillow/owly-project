<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;

class CoursesController extends Controller
{
   public function coursesList() {
    return view('courses.courses', [
        'heading' => 'Our courses',
        'courses' => Course::latest()->filter(request(['search']))->simplePaginate(6)
    ]);
   }

   public function showCourse(Course $course) {
    return view('courses.course', [
        'course' => $course
       ]);
   }

   public function create() { // Create Course
    return view('courses.create');
   }

   public function storeCourse(Request $request) {
    $formFields = $request->validate([
        'title' => 'required|min:3',
        'subject' => 'required|unique:courses|array|min:1',
        'spots' => 'required'
    ]);

    // Ottieni il valore di "subject" dall'input del modulo
    $subject = $request->input('subject');
    // Combina gli elementi dell'array "subject" in una sola stringa, separati da virgole
    $subjectString = implode(',', $subject);
    // Dividi la stringa "subject" in un array utilizzando la virgola seguita da uno spazio o da un a capo come separatore
    $subjects = preg_split("/,\s+|\n+/", $subjectString);
    // Rimuovi eventuali spazi vuoti all'inizio e alla fine di ogni elemento dell'array
    $subjects = array_map('trim', $subjects);
    // Assegna l'array di soggetti al campo "subject" dei dati del modulo
    $formFields['subject'] = $subjects;

    Course::create($formFields);

    return redirect('/courses')->with('message', 'Courses created successfully!');
   }

   public function edit(Course $course) {
     return view('courses.edit', [
        'course' => $course
     ]);
   }

   public function update(Request $request, Course $course) {
    $formFields = $request->validate([
        'title' => 'required|min:3',
        'subject' => 'required|unique:courses|array|min:1',
        'spots' => 'required'
    ]);

    // Ottieni il valore di "subject" dall'input del modulo
    $subject = $request->input('subject');
    // Combina gli elementi dell'array "subject" in una sola stringa, separati da virgole
    $subjectString = implode(',', $subject);
    // Dividi la stringa "subject" in un array utilizzando la virgola seguita da uno spazio o da un a capo come separatore
    $subjects = preg_split("/,\s+|\n+/", $subjectString);
    // Rimuovi eventuali spazi vuoti all'inizio e alla fine di ogni elemento dell'array
    $subjects = array_map('trim', $subjects);
    // Assegna l'array di soggetti al campo "subject" dei dati del modulo
    $formFields['subject'] = $subjects;

    $course->update($formFields);

    return back()->with('message', 'Courses updated successfully!');
   }
   
   public function destroy(Course $course) {
    $course->delete();
    return redirect('/courses')->with('message', 'Course deleted successfully');
   }
}
