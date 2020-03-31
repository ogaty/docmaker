<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentItem extends Model
{
    public $fillable = [
        'document_id',
        'title',
        'description',
    ];
}
