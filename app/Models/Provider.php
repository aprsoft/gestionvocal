<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function getFullName() {

		return $this->razon_social.' '. $this->apellido_paterno.' '. $this->apellido_materno;
	}
}
