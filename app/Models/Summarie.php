<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summarie extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function customer()
    {
      return $this->belongsTo(Customer::class);
    } 

    public function typedocument()
    {
      return $this->belongsTo(Typedocument::class);
    } 
}
