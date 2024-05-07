<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurrentAndMaintenanceMedication extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['illnesses'=>'patient_id'];

    protected $fillable = [

        'name',
        'description',
        'is_active',
        'patient_id',
        'created_by',
        'updated_by',
        'deleted_by',

    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function illnesses()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
