<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Assignment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subject_code',
        'name',
        'description',
        'file',
        'start_date',
        'end_date',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->created_by = Auth::user()->id;
        });

        static::updating(function (Model $model) {
            $model->updated = Auth::user()->id;
        });
    }
}
