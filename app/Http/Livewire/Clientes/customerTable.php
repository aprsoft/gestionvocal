<?php

namespace App\Http\Livewire\Clientes;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Customer;
use Freshwork\ChileanBundle\Rut;



class customerTable extends DataTableComponent
{  
    
    public $query;
    public $showModal='hidden'; 
    protected $listeners=['render'=>'render'];

    //valor en milisegundos
    //?int $searchFilterDebounce viene de DataTableComponent/withsearch
    // es opcional
    public ?int $searchFilterDebounce=500;
    public array $perPageAccepted = [5,10,25,50,100,-1];

    public function builder(): Builder
    { 

     return Customer::query(); 
    }  

    public function configure(): void
    { 
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc'); 
        $this->setSearchEnabled();
        // $this->setColumnSelectHiddenOnMobile();     
        $this->setAdditionalSelects(['customers.id','customers.nombres as nombres','customers.apellido_paterno as apellido_paterno',
            'customers.apellido_materno as apellido_materno']);         
    }
    // 'customers.id','customers.nombres as nombres'

    public function columns(): array
    { 
        return [

            // Column::make("Id", "id")
            //      ->hideIf(true)                
            //     ->sortable(),        
            Column::make("R.U.T","rut")
                ->format(fn($value, $row, Column $column) => Rut::parse($row->rut)->format(Rut::FORMAT_COMPLETE))              
                ->searchable() 
                ->excludeFromColumnSelect(),     
            Column::make("Cliente","nombres")
                ->format(fn($value,$row,$column) => $row->nombres.' '.$row->apellido_paterno. ' ' . $row->apellido_materno)
                ->sortable()
                ->searchable()
                ->excludeFromColumnSelect(),    
            Column::make("Direccion","direccion")
                ->sortable() 
                ->deselected()
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Email","email")
                ->collapseOnMobile()
                ->sortable()
                ->deselected()
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Tipo","tipo")
                ->collapseOnMobile()
                ->sortable()
                ->deselected()
                ->searchable()
                ->collapseOnMobile(),
            column::make('Acciones') 
                ->collapseOnMobile()   
                ->label(fn($row) => view('clientes.botonesDatatable.index',compact('row'))),  

            ];
    }  
    public  function edit($customer_id) 
    {
      
       
      $this->emit('showModal',$customer_id);
      
    }

    public  function closeModal() 
    {
        $this->emit( event:'closeModal');
        // $this->reset('showModal'); 
        // $this->resetErrorBag(); 

    }

    public  function registrar() 
    {
        $this->reset('showModal'); 
        $this->resetErrorBag(); 

    }
}


