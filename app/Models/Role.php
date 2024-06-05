<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    protected $fillable = ['name', 'description'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
