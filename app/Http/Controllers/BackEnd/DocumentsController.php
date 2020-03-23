<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;

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
}
