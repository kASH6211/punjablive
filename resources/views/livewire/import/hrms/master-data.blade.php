<div>
   <x-loading-indicator />
        <div class="alert alert-success">
            
        </div>

    <x-validation-errors/>

   <div class=" p-2"  >
    <div class="mt-4 w-full">
        <x-label for="name" value="{{ __('Upload HRMS Master Data File (.xls or .xlsx)') }}" />
    </div>
    <form wire:submit.prevent="import">
    <div class="relative my-4">
        <!-- This is the visible part of the file input -->
        
        <x-input type="file" class="w-full h-full" wire:model="file" wire:ignore accept=".xls, .xlsx"  required/>
    
        <!-- This is the hidden button -->
        
    </div>
    <div class="w-full flex justify-end mt-2">
        <div><x-dark-button  type="submit" >Import Excel</x-danger-button></div>
    </div>
</form>
    
    @if(session('success'))   

  <div class="w-full flex justify-between  mt-2">
    <div>
      
        <h1 class="text-lime-700 bg-lime-100 px-4 py-2 rounded-md">
            {{ session('success') }}
        </h1>
       

    </div>
    
    

  </div>

    
   
       {{-- @if($notmappedcount ==0)
       <h1><span class="text-gray-700 font-semibold">Summary:</span>All districts are successfully mapped</h1>

       @else
        <h1><span class="text-gray-700 font-semibold">Summary:</span><span class="font-semibold text-red-500"> {{ $notmappedcount }} </span> districts not mapped <a href="" class="text-blue-700">click here</a> to view list.</h1>
      @endif
    </div>  --}}
    @endif
</div>
    {{-- <div class=" py-4 rounded-md flex justify-center items-center mt-4">
     @livewire("progress-bar-upload")
    </div> --}}
</div>
