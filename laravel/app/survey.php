<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $table = "survey";
    protected $primaryKey = "id";
    protected  $fillable = [
        "studentName",
        "email",
        "telephone",
        "feedback",
        "created_at",
        "updated_at",
    ];
}
