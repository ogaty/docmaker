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

    public function show($id)
    {
        $document = Document::find($id);
        $items = $document->items;

        return view('backend.show', [
            'email' => Auth::user()->email,
            'document' => $document->toArray(),
            'items' => $items->toArray(),
        ]);
    }

    public function add()
    {
        return view('backend.add', [
            'email' => Auth::user()->email,
        ]);
    }

    public function complete(Request $request)
    {
        $data = $request->post() + [
            'user_id' => Auth::user()->id,
            ];
        $document = new Document();
        $document->fill($data);
        $document->save();

        return redirect(route('admin.index'))->with('message', 'Add Success');
    }

    public function edit($id)
    {
        $document = Document::find($id);

        return view('backend.edit', [
            'email' => Auth::user()->email,
            'document' => $document->toArray(),
        ]);
    }

    public function edit_complete($id, Request $request)
    {
        $document = Document::find($id);
        $document->fill($request->post());
        $document->save();

        return redirect(route('admin.index'))->with('message', 'Edit Success');
    }

    public function delete(Request $request)
    {
        Document::destroy($request->id);

        return redirect(route('admin.index'))->with('message', 'Delete Success.');
    }
}
