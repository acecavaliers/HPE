<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Symptom extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['illnesses'=>'illness_id'];

    protected $fillable = [

        'name',
        'is_active',
        'illness_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function illnesses()
    {
        return $this->belongsTo(Illness::class, 'illness_id');
    }
}
