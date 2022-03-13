<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }
}
