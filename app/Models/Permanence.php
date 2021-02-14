<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permanence extends Model
{
    use HasFactory;
    // public $fillable = ['status', 'raison', 'siret', 'ape', 'adresse', 'adresse2', 'cp', 'ville', 'tel', 'email' ];

    public function sites()
    {
        return $this->hasMany(Site::class);
    }
}



