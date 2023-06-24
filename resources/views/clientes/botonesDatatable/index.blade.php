<div>   
   
    <a href="javascript:void(0)" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full" wire:click="edit({{$row->id}})">
        <i class="fa fa-eye text-white-500"></i>
    </a>
    <a href="" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" wire:click="$emitUp('showModal',{{$row->id}})">
        <i class="fa-solid fa-file"></i>
    </a>
    <a href="" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
        <i  class="fa-solid fa-file-circle-plus"></i>    
    </a>     
</div>