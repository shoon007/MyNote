<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    //note list page
    public function listPage(){

        $notes = Note::orderBy('id','desc')->paginate(5);
        $notes->appends(request()->all());
        return view('note.index',compact('notes'));
    }
    //note create page
    public function createNotePage(){
        return view('note.create');
    }
    //create note
    public function createNote(Request $request){
        $this->noteValidationCheck($request);
     $data =   $this->noteData($request);
Note::create($data);
return redirect()->route('note#listPage')->with(['createSuccess' => 'The note is created!']);

    }

    //delete note
    public function deleteNote($id){
Note::where('id',$id)->delete();
return back();
    }

    //details note
    public function detailsNote($id){
       $note=  Note::where('id',$id)->first();

        return view('note.show',compact('note'));
    }
//edit note
public function editNote($id){
$note = Note::where('id',$id)->first();

return view('note.edit',compact('note'));
}
//update note
public function updateNote(Request $request){
   $this->noteValidationCheck($request);
   $noteData = $this->noteData($request);
   Note::where('id',$request->noteId)->update($noteData);
return redirect()->route('note#listPage')->with(['updateSuccess' => 'The note is updated!']);


}
    //note data
    private function noteData($request){
        return [
            'title' => $request->title,
            'description'=>$request->description,
            'status'=>$request->status === "0" ?  false : true
        ];
    }

    //validation for creating note
    private function noteValidationCheck($request){
        Validator::make($request->all(),[
            'title' => 'required|min:5|unique:notes,title,' . $request->noteId,
            'description' => 'required',
            'status' => 'required',
        ] )->validate();


    }
}
