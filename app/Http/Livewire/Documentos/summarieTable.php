<?php

namespace App\Http\Livewire\Documentos;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Summarie;



class summarieTable extends DataTableComponent
{
    //  protected $model = Summarie::class;

    public $customer_id;

    public function __mount($customer_id)  
    {            
        $this->customer_id=$customer_id;        
    }

    public function builder(): Builder
    {        
       return Summarie::query()
        ->where('customer_id','=',$this->customer_id);   
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        
        //$this->setEagerLoadAllRelationsEnabled();
    }

    public function columns(): array
    {

       
        return [
            Column::make("Id", "id")
                ->sortable(),
                // Column::make("Cliente","customer.nombres")                  
                // ->searchable()
                // ->sortable(),  

                Column::make("Cliente")  
                ->label(
                    fn($row)=>view('clientes.fullname',compact('row'))
                    )                
                ->searchable()
                ->sortable(),  
                Column::make("Detalle","detalle")
                ->eagerLoadRelations()
                ->searchable()
                ->sortable(),  
                Column::make("Folio","folio")
                // ->eagerLoadRelations()
                ->collapseOnTablet()
                ->searchable()
                ->sortable(),  
                Column::make("tipo","typedocument.nombre")
                // ->eagerLoadRelations()
                ->collapseOnTablet()
                ->searchable()
                ->sortable(),      
            Column::make("estado","estado_documento")
                // ->eagerLoadRelations()
                ->searchable()
                ->collapseOnTablet()
                ->sortable(),
                Column::make("condicion","condicion_documento")
                // ->eagerLoadRelations()
                ->searchable()
                ->sortable(), 
            column::make('Acciones')    
                ->label(
                    fn($row) => view('documentos.clientes.botones.index',compact('row'))
                ),    
            
        ];
    }
}
