<div>
    {{$rut}}
    <form wire:submit.prevent="updateOrCreateCustomer">
    <x-component-modal :showModal="$showModal">        
        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
            <h3 class="text-base font-semibold leading-6 text-gray-900 mb-10" id="modal-title">Editar Cliente</h3>
            
            <div class="mt-2">
                
                    <div class="flex">
                        <x-component-input placeholder="Rut" name="rut" label="Rut" atributte="readonly"></x-component-input>
                        <x-component-input placeholder="Giro" name="giro" label="Giro" ></x-component-input>
                    </div>
                    <div class="flex">
                        <x-component-input placeholder="Nombre" name="nombres" label="Nombre"></x-component-input>
                        <x-component-input placeholder="Apellido Paterno" name="apellido_paterno" label="Apellido Paterno"></x-component-input>    
                    </div>
                    <div class="flex">
                        <x-component-input placeholder="Apellido Materno" name="apellido_materno" label="Apellido Materno"></x-component-input>
                        <x-component-input placeholder="Direccion" name="direccion" label="Direccion"></x-component-input>    
                    </div>
                    <div class="flex">
                        <x-component-input placeholder="Comuna" name="comuna" label="Comuna"></x-component-input>
                        <x-component-input placeholder="Ciudad | Localidad" name="localidad" label="Ciudad | Localidad"></x-component-input>   
                    </div>
                  
                    <div class="flex">
                        <x-component-input placeholder="Telefono Movil" name="telefono_movil" label="Telefono Movil"></x-component-input>
                        <x-component-input placeholder="Telefono Fijo" name="telefono_fijo" label="Telefono Fijo"></x-component-input>
                        <x-component-input placeholder="Email" name="email" label="Email"></x-component-input>

                    </div>
                    <div class="flex">
                        <x-component-input-select name="tipo" label="Tipo" :options="['Productora','Cliente']" ></x-component-input-select>
                    </div>              
            </div>
          </div>
    </x-component-modal>
</form>   
</div>
      
