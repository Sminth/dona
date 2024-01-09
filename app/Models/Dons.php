<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dons extends Model
{
    use CrudTrait;
    use HasFactory;

    public function causes()
    {
        return $this->belongsTo('App\Models\Causes','id_cause','id');
    }
}
