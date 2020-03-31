<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use Illuminate\Support\Facades\Session;

class DocumentsController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function show($document_id)
    {
        $document = Document::findOrFail($document_id);
        $items = $document->items;

        return view('frontend.show', [
            'document' => $document->toArray(),
            'items' => $items->toArray(),
        ]);
    }
}
