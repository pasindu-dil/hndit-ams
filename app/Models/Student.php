<?php

namespace App\Models;

use App\Notifications\SendLoginDetailsNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Student extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'reg_id',
        'nic',
        'name',
        'email',
        'address',
        'msisdn',
        'course_id',
        'is_login'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->created_at = Carbon::now();
            $model->created_by = Auth::id();
            $model->updated_by = Auth::id();
        });

        static::updating(function (Model $model) {
            $model->updated_at = Carbon::now();
            $model->updated_by = Auth::id();
        });
    }
}
