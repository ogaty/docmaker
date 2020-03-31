<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    public function items()
    {
        return $this->hasMany('\App\Models\DocumentItem');
    }
}
