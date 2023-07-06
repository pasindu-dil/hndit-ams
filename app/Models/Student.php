<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'reg_id',
        'nic',
        'name',
        'email',
        'address',
        'msisdn',
        'course_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function () {

        });

        static::updating(function () {

        });
    }
}
