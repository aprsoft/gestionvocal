<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
use App\Models\Customer;
use Freshwork\ChileanBundle\Rut;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Http\Request;

class ModalCustomer extends Component
{

     
    protected $listeners=['showModal','updateOrCreateCustomer'];

    public $showModal='hidden'; 
    public $rut='';
    public $giro;
    public $nombres;
    public $apellido_paterno;
    public $apellido_materno;
    public $direccion;
    public $ciudad;
    public $comuna;
    public $email;
    public $telefono_movil;
    public $telefono_fijo;
    public $tipo;

    public function showModal(Customer $objCustomer) 
    { 
        $this->rut=$objCustomer->rut;
        $this->giro=$objCustomer->giro;
        $this->nombres=$objCustomer->nombres;
        $this->apellido_paterno=$objCustomer->apellido_paterno;
        $this->apellido_materno=$objCustomer->apellido_materno;
        $this->direccion=$objCustomer->direccion;
        $this->comuna=$objCustomer->comuna;
        $this->ciudad=$objCustomer->ciudad;
        $this->email=$objCustomer->email;
        $this->telefono_movil=$objCustomer->telefono_movil;
        $this->telefono_fijo=$objCustomer->telefono_fijo;
        $this->tipo=$objCustomer->tipo;
       
        $this->showModal='';   
    }
   

    
    // public function updated($field,$value)      
    // {       
    //     $storeCustomerRequest = new storeCustomerRequest();         
    //     $this->validateOnly($field,$storeCustomerRequest->rules(),$storeCustomerRequest->messages());         
    // }

    public function updateOrCreateCustomer()
    {
        dd(4);
        $storeCustomerRequest = new storeCustomerRequest();    
        // dd($storeCustomerRequest);
    }

    public  function closeModal() 
    {
        $this->reset('showModal'); 
        $this->resetErrorBag(); 
        $this->showModal='hidden';
    }
    

    public function render()
    {
        return view('livewire.clientes.modal-customer');
    }
}
