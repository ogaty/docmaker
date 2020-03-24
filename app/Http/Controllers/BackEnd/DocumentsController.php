<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use Illuminate\Support\Facades\Session;

class DocumentsController extends Controller
{
    public function index()
    {
        $documents = Document::all();

        return view('backend.index', [
            'email' => Auth::user()->email,
            'documents' => $documents->toArray(),
        ]);
    }

    public function edit($id)
    {
        $document = Document::find($id);

        return view('backend.edit', [
            'email' => Auth::user()->email,
            'document' => $document->toArray(),
        ]);
    }

    public function delete(Request $request)
    {
        Document::destroy($request->id);

        return redirect(route('admin.index'))->with('message', 'Delete Success.');
    }
}
