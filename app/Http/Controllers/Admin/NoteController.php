<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Appointment::all('id', 'fullname');
        $notes = Note::query()->with('appointment')->orderByDesc('created_at')->paginate(8);
        return view('admin.pages.notes.index', [
            'users' => $users,
            'notes' => $notes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $note = Note::create([
            'title' => $request->input('title'),
            'appointment_id' => $request->input('appointment_id'),
            'description' => $request->input('description'),
        ]);

        if ($note) {
            return Redirect::route('notes.index')->with('success', 'Not Oluşturuldu');
        }
    }

    public function removeNote(Request $request)
    {
        $note = Note::query()->where('id',$request->noteID)->first();

        if ($note) {
            $note->delete();
            return response()
                ->json(['status' => "success", "message" => "Başarılı", "data" => ""])
                ->setStatusCode(200);
        }
        return response()
            ->json(['status' => "error", "message" => "Not bulunamadı"])
            ->setStatusCode(404);
    }

}
