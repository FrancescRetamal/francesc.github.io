<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $primaryKey = 'nombre';
    public $incrementing = 'false';
    protected $keyType = 'string';
    public $timestamps = false;
}
