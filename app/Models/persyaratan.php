<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratan extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    protected $table = "persyaratan";
}
