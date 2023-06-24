<x-app-layout>
 
    <x-slot name="header">
        <div class="grid grid-cols-2">
            <div>  
                <h2 class="font-semibold text-xl text-gray-700 dark:text-gray-200 leading-tight">Clientes</h2>
            </div>            
            <div>
               
              @livewire('clientes.crear-cliente')
             
              
            </div>

    </x-slot>  
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg">          
                @livewire('clientes.customer-table')
            </div>
        </div>
    </div> 
    
    
    @push('modals')  
        @livewire('clientes.modal-customer')
    @endpush

</x-app-layout>
