<div>
   {{-- <x-button-transparent  wire:click="$set('showModal',true)"> --}}
    <x-button-transparent  wire:click="emitShowModal">
   <i class="fa-solid fa-user-plus"></i>
   </x-button-transparent> 

   
{{-- 
   <x-dialog-modal wire:model="showModal">

      <x-slot name="title">
         <div class="flex space-x-6">             
            <div><x-application-mark class="block h-9 w-auto" /></div> 
            <div>Nuevo Cliente</div> 
            <div>
               <input type="checkbox" id="" name="" value="">
               <label for="vehicle1">Empresa</label
            </div>   
               
         </div>
         
    
      </x-slot >
     

      <x-slot name="content">       
         <div class="mb-4"> 
            <div class="mb-4">
               <x-label value="R.U.T"/>
               <x-input type="text" class="w-full" wire:model.debounce.50ms="rut" maxlength="12" placeholder="Ej:  12.345.678-9 | 12345678-9 | 123456789"  />
               <x-input-error for='rut' />
            </div> 
            <div class="mb-4">    
               <x-label value="Razon Social"/>
               <x-input type="text" class="w-full" wire:model.defer="nombres"/>
               <x-input-error for='nombres' />
            </div>    
            <x-label value="Email"/>
            <x-input type="text" class="w-full" wire:model.debounce.50ms="email"/>
            <x-input-error for='email'/>
         </div> 
      </x-slot >

      <x-slot name="footer">
   
         <x-secondary-button wire:click="cerrar">
            Cancelar
         </x-secondary-button>
         <x-danger-button wire:click="registrar">
            Crear
         </x-danger-button>
      </x-slot >

   </x-dialog-modal> --}}

</div>
