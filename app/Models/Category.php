<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";

    public function sector()
    {
      return $this->hasMany(Sector::class);
    }

    public function Service()
    {
      return $this->hasMany(Service::class);
    }

    public function franchise()
    {
      return $this->hasMany(Franchise::class);
    }

    
}

