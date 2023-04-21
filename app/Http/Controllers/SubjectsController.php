<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class SubjectsController extends Controller
{
    public function subjectsList() {
        $subjects = Subject::orderBy('name', 'asc')->simplePaginate(12); 
        return view('subjects.subjects', [
            'heading' => 'Our Subjects',
            'subjects' => $subjects
        ]);
    }

    public function create() { // Create Subject
        return view('subjects.create');
       }

       public function storeSubject(Request $request) {
        $formFields = $request->validate([
            'name' => 'required'
        ]);
    
        Subject::create($formFields);
    
        return redirect('/subjects')->with('message', 'Subject created successfully!');
       }

    public function edit(Subject $subject) { // EDIT SUBJECT
       return view('subjects.edit', [
           'subject' => $subject
        ]);
      }

      public function update(Request $request, Subject $subject) {
        $formFields = $request->validate([
            'name' => 'required'
        ]);

        $subject->update($formFields);

        return back()->with('message', 'Subject updated successfully!');
      }

    public function destroy(Subject $subject) {
    $subject->delete();
        return redirect('/subjects')->with('message', 'Subject deleted successfully');
       }
}
