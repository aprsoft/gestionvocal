<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Customer extends Model
{
    use HasFactory;

  protected $guarded=[];

  public function documents()
  {
    return $this->hasMany(Document::class);

  }  
  public function getFullName() {

		return $this->nombres.' '. $this->apellido_paterno.' '. $this->apellido_materno;
	}

}
