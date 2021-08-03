<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'desired_score',
        'branch',
        'remember_token'
    ];
    public $timestamps = true;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    function getRouteKeyName()
    {
        return 'remember_token';
    }

    function examDetail()
    {
        return $this->hasOne('App\Models\ExamDetails');
    }
}
