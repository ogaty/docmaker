<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\DocumentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use Illuminate\Support\Facades\Session;

class DocumentItemsController extends Controller
{
    public function add($document_id)
    {
        $document = Document::find($document_id);

        return view('backend.item.add', [
            'email' => Auth::user()->email,
            'document' => $document->toArray(),
        ]);
    }

    public function complete(Request $request, $document_id)
    {
        $document = Document::find($document_id);

        $data = [
            'document_id' => $document_id,
        ] + $request->post();

        $documentItem = new DocumentItem();
        $documentItem->fill($data);
        $documentItem->save();

        return redirect(route('admin.index'))->with('message', 'Add Success.');
    }

    public function edit($document_id, $item_id)
    {
        $document = Document::find($document_id);
        $item = DocumentItem::find($item_id);

        return view('backend.item.edit', [
            'email' => Auth::user()->email,
            'document' => $document->toArray(),
            'item' => $item->toArray(),
        ]);
    }

    public function delete($document_id, $item_id)
    {
        DocumentItem::destroy($item_id);

        return redirect(route('admin.index'))->with('message', 'Delete Success.');
    }
}
