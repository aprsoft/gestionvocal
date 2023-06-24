<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
Use App\Models\Customer;
Use App\Rules\validacionRut;
use Illuminate\Support\Facades\Validator;
use Freshwork\ChileanBundle\Rut;
use App\Http\Requests\StoreCustomerRequest;


class CrearCliente extends Component
{
    
    public $showModal,$nombres,$rut,$email; 

    // protected $listeners=['showModal'=>'abrir'];

    // public function updated($field,$value)      
    // {       
    //     $storeCustomerRequest = new storeCustomerRequest();         
    //     $this->validateOnly($field,$storeCustomerRequest->rules(),$storeCustomerRequest->messages());         
    // }

    // public function guardar(StoreCustomerRequest $request)
    // public function registrar()
    // {       
    //     $storeCustomerRequest = new storeCustomerRequest();         
    //     $this->validate($storeCustomerRequest->rules(),$storeCustomerRequest->messages());    

    //     Customer::create([
    //         'nombres'=>$this->nombres,
    //         'rut'=>Rut::parse($this->rut)->format(Rut::FORMAT_WITH_DASH),
    //     ]);

    //     $this->reset('showModal','nombres','rut','email');
    //     $this->emit('render');
    //     $this->emit('alert','Cliente Creado');
    // }

    public  function emitShowModal() 
    {
        
        $this->emit('showModal');
    }

  
    public function render()
    {      
       
        return view('livewire.clientes.crear-cliente');
    }

  

}
