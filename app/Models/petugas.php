<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class petugas extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    protected $table = 'petugas';

    protected static function boot()
    {
        parent::boot();

        static::creating( function($user) {
            $user->Password = Hash::make($user->Password);
        });

        static::updating(function(petugas $user) {
            if($user->isDirty(["Password"])){
                $user->Password = Hash::make($user->Password);
            }
        });
    }
}
