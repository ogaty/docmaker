<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $fillable = [
        'user_id',
        'document_name',
        'document_title',
        'document_version',
        'copyright',
    ];

    public function items()
    {
        return $this->hasMany('\App\Models\DocumentItem');
    }
}
