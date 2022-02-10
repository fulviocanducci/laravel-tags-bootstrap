<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $table = "actor";
    protected $primaryKey = 'actor_id';
    protected $fillable = ['first_name','last_name','last_update'];
    protected $casts = ['last_update' => 'datetime'];
}
