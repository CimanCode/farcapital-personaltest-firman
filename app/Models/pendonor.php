<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendonor extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    protected $table = ('pendonor');

    function pendonor(){
        return $this->belongsTo(pendonor::class);
    }
}
