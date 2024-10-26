<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    protected $fillable = ['name', 'location', 'description'];

    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function ninjas() {
      return $this->hasMany(Ninja::class);
    }
}
