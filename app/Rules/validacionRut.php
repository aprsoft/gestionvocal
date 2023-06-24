<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Freshwork\ChileanBundle\Rut;
use App\Models\Customer;

class validacionRut implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {    
        // dd(Rut::parse('13.483.9')->quiet()->format(Rut::FORMAT_WITH_DASH));
        // $rut=Customer::where('rut','=','13483937-6')->get();
        // $value='13483937-6';
        // $is_valid=Rut::parse($value)->quiet()->validate();
        // dd($value);
        if (!(is_null($value))){
        $RUT_FORMAT_WITH_DASH=Rut::parse($value)->quiet()->format(Rut::FORMAT_WITH_DASH);
        $RUT_FORMAT=($RUT_FORMAT_WITH_DASH)? $RUT_FORMAT_WITH_DASH : 0;         

        $rut=Customer::where('rut','=',$RUT_FORMAT)->get();
        // $temp=Rut::parse($rut)->format(Rut::FORMAT_WITH_DASH); 
        $is_unique=is_null($rut->first());
        $is_valid=Rut::parse($value)->quiet()->validate();   

        ($is_valid )? (($is_valid && $is_unique)? :$fail('El R.U.T ya se encuentra ingresado')): $fail('R.U.T invalido');
        } else {
            $fail('El campo R.U.T es obligatorio');
        }
      
    }         
}