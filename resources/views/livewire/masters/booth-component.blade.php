<div>
    <div class="flex border bg-blue-900/5 border-dashed border-blue-900/30 p-4 rounded-md justify-center items-center mb-4">

        <h1 class="text-3xl text-blue-900">Total Booths- {{$total}}</h1>
    </div>
    <div class="flex justify-between p-4 rounded-md mb-4  bg-gray-200">

        <div class=" w-1/2 rounded-sm px-4">

            <x-input type="text" wire:model.debounce.500ms="search" placeholder="Search by polling station name..." class="w-full border-0 h-12 rounded-lg">

            </x-input>

        </div>
        <div>
            <x-primary-button wire:click="toggle('newmodal')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>


                New Booth</x-primary-button>

        </div>
    </div>

    <table class="table-auto w-full border-collapse border">

        <thead class="bg-gray-200 w-full">
            <td class="border text-gray-700 py-2 px-2 w-24  font-semibold">Sr No.</th>

            @foreach($header as $head)
            <td class="border text-gray-700 py-2 px-2 text-left font-semibold">{{$head}}</th>
            @endforeach
        </thead>
        <tbody>
            @foreach($data as $index=>$row)
            <tr class="group" >
                <td class="px-2 border text-gray-600 py-2 text-md cursor-pointer group-hover:bg-blue-900/10"  wire:click="viewBooth({{ $row->id }})" >{{$index + $data->firstItem()}}</td>

                <td class="px-2 border text-gray-600 text-md cursor-pointer group-hover:bg-blue-900/10"  wire:click="viewBooth({{ $row->id }})">{{$row->consname->ac_name}}</td>


                <td class="px-2 border text-gray-600 text-md cursor-pointer group-hover:bg-blue-900/10"  wire:click="viewBooth({{ $row->id }})"><p>{{$row->POLLBUILD}} </p><span class="font-semibold text-amber-600">
                    @php
                        $boothno = "";
                        if($row->BOOTHNO<10){
                            $boothno = '00'.$row->BOOTHNO;
                        }
                        elseif($row->BOOTHNO>=10 and $row->BOOTHNO<100){
                            $boothno = '0'.$row->BOOTHNO;
                        }
                        else
                        { 
                            $boothno =  $row->BOOTHNO;
                        }
                        echo '('.$boothno.')';
                    @endphp
                    
                </span>
                </td>

                <td class="px-2 border text-gray-600 text-md cursor-pointer group-hover:bg-blue-900/10"  wire:click="viewBooth({{ $row->id }})"><p>{{$row->locationname->LOCN_BLDG_EN}}</p><span class="font-semibold text-amber-600"> ({{ $row->PS_LOCN_NO }})</span></td>

                <td class="px-2 border text-gray-600 text-md cursor-pointer group-hover:bg-blue-900/10"  wire:click="viewBooth({{ $row->id }})">{{$row->VILLAGE}}</td>
                <td class="px-2 border text-gray-600 w-8 ">
                    <div class="flex justify-center items-center"><a href="javascript:void(0)" wire:click='editobjectarray("{{$row->id}}")' class="m-2 hover:bg-blue-100 p-2 rounded-md">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>




                        </a></div>


                </td>

                <td class="text-center border text-gray-600 w-8">
                    <div class="flex justify-center items-center"><a href="javascript:void(0);" wire:click='openForDeletion({{$row->id}})' class="m-2 hover:bg-red-100 p-2 rounded-md">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>


                        </a></div>


                </td>

            </tr>

            @endforeach




        </tbody>

    </table>
    <div class="py-2">
        {{ $data->links() }}
    </div>



    <!-- Modals Code Starts Here -->
    <x-confirmation-modal wire:model="newmodal">
        <x-slot name="icon">
            <svg class="h-6 w-6 stroke-white" stroke-width="1.5" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </x-slot>
        <x-slot name="subtitle">

        </x-slot>

        <x-slot name="title">
            Add New Polling Station
        </x-slot>


        <x-slot name="content">

            <div>

                <x-validation-errors class="mb-4" />
                <form method="POST">
                    @csrf

                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Select Constituency') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                
                            
                            <x-select wire:model="object.CONSCODE" type="text" class="block w-full" :ddlist="$aclist" idfield="ac_no" textfield="ac_name" wire:change="loadLocations()" />
                        </div>

                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Polling Station No.') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                            <x-input wire:model="object.BOOTHNO" class="block w-full" type="text" :value="old('BOOTHNO')" required />

                        </div>
                    </div>

                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Polling Station Name') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                            <x-input wire:model="object.POLLBUILD" class="block w-full" type="text" :value="old('POLLBUILD')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Select Location') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                            <x-select wire:model="object.PS_LOCN_NO" type="text" class="block w-full" :ddlist="$locationslist" idfield="PS_LOCN_NO" textfield="LOCN_BLDG_EN" />
                        </div>
                    </div>
                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('VILLAGE') }}" />
                            <x-input wire:model="object.VILLAGE" class="block w-full" type="text" :value="old('VILLAGE')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Poll Area') }}" />
                            <x-input wire:model="object.POLLAREA" class="block w-full" type="text" :value="old('POLLAREA')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('No. Of Officers') }}" />
                            <x-input wire:model="object.NOOFOFFICER" class="block w-full" type="text" :value="old('NOOFOFFICER')" required />
                        </div>
                    </div>
                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Male Votes') }}" />
                            <x-input wire:model="object.MALEVOTE" class="block w-full" type="text" :value="old('MALEVOTE')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Female Votes') }}" />
                            <x-input wire:model="object.FEMALEVOTE" class="block w-full" type="text" :value="old('FEMALEVOTE')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Other Votes') }}" />
                            <x-input wire:model="object.OtherVote" class="block w-full" type="text" :value="old('OtherVote')" required />
                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Urban/Rural') }}" />
                            <x-select wire:model="object.URBAN" type="text" class="block w-full" :ddlist="$urbanlist" idfield="index" textfield="title" />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Type') }}" />
                            <x-select wire:model="object.TYPE" type="text" class="block w-full" :ddlist="$sensitivitylist" idfield="index" textfield="title" />
                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full bg-gray-200 rounded-md my-4 " >

                        <div class="my-4 w-full px-4 mr-2">
                            <label for="pardanashin">
                                <input wire:model="object.PARDANASHIN" type="checkbox" id="pardanashin">
                                Pardanashin
                            </label>
                        </div>
                        {{-- <div class="my-4 w-full px-4 mr-2">
                            <label for="femaleParty">
                                <input wire:model="object.FEMALEPARTY" type="checkbox" id="femaleParty">
                                Female Party
                            </label>
                        </div> --}}
                    </div>


                      
                  


                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('newmodal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-primary-button class="ml-2" wire:click="addobject()" wire:loading.attr="disabled">
                Add Polling Station
            </x-primary-button>
        </x-slot>
    </x-confirmation-modal>



    <x-confirmation-modal wire:model="editmodal">
        <x-slot name="icon">
            <svg class="h-6 w-6 stroke-white" stroke-width="1.5" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </x-slot>
        <x-slot name="subtitle">

        </x-slot>

        <x-slot name="title">
            Update Polling Station Details
        </x-slot>


        <x-slot name="content">

            <div>

                <x-validation-errors class="mb-4" />
                <form method="POST">
                    @csrf

                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Select Constituency') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                
                            
                            <x-select disabled wire:model="editobject.CONSCODE" type="text" class="block w-full" :ddlist="$aclist" idfield="ac_no" textfield="ac_name" wire:change="loadLocations()" />
                        </div>

                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Polling Station No.') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                            <x-input wire:model="editobject.BOOTHNO" class="block w-full" type="text" :value="old('BOOTHNO')" required />

                        </div>
                    </div>

                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Polling Station Name') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                            <x-input wire:model="editobject.POLLBUILD" class="block w-full" type="text" :value="old('POLLBUILD')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <div class="flex">
                                <x-label for="name" value="{{ __('Select Location') }}" /> <span class="text-red-500 ml-1">*</span>
                            </div>
                            <x-select wire:model="editobject.PS_LOCN_NO" type="text" class="block w-full" :ddlist="$locationslist" idfield="PS_LOCN_NO" textfield="LOCN_BLDG_EN" />
                        </div>
                    </div>
                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('VILLAGE') }}" />
                            <x-input wire:model="editobject.VILLAGE" class="block w-full" type="text" :value="old('VILLAGE')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Poll Area') }}" />
                            <x-input wire:model="editobject.POLLAREA" class="block w-full" type="text" :value="old('POLLAREA')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('No. Of Officers') }}" />
                            <x-input wire:model="editobject.NOOFOFFICER" class="block w-full" type="text" :value="old('NOOFOFFICER')" required />
                        </div>
                    </div>
                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Male Votes') }}" />
                            <x-input wire:model="editobject.MALEVOTE" class="block w-full" type="text" :value="old('MALEVOTE')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Female Votes') }}" />
                            <x-input wire:model="editobject.FEMALEVOTE" class="block w-full" type="text" :value="old('FEMALEVOTE')" required />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Other Votes') }}" />
                            <x-input wire:model="editobject.OtherVote" class="block w-full" type="text" :value="old('OtherVote')" required />
                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Urban/Rural') }}" />
                            <x-select wire:model="editobject.URBAN" type="text" class="block w-full" :ddlist="$urbanlist" idfield="index" textfield="title" />
                        </div>
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Type') }}" />
                            <x-select wire:model="editobject.TYPE" type="text" class="block w-full" :ddlist="$sensitivitylist" idfield="index" textfield="title" />
                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full bg-gray-200 rounded-md my-4 " >

                        <div class="my-4 w-full px-4 mr-2">
                            <label for="pardanashin">
                                <input wire:model="editobject.PARDANASHIN" type="checkbox" id="pardanashin">
                                Pardanashin
                            </label>
                        </div>
                        {{-- <div class="my-4 w-full px-4 mr-2">
                            <label for="femaleParty">
                                <input wire:model="editobject.FEMALEPARTY" type="checkbox" id="femaleParty">
                                Female Party
                            </label>
                        </div> --}}
                    </div>


                      
                  


                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('editmodal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-primary-button class="ml-2" wire:click="updatePS()" wire:loading.attr="disabled">
                Update Polling Station
            </x-primary-button>
        </x-slot>
    </x-confirmation-modal>

    <x-confirmation-modal wire:model="confirmupdatemodal">
        <x-slot name="icon">
            <svg class="h-6 w-6 stroke-white" stroke-width="1.5" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </x-slot>


        <x-slot name="title">
            Delete Polling Station?
        </x-slot>


        <x-slot name="content">

            <div class="w-full flex flex-col justify-center">
                <h1 class="text-xl text-red-800 ">Are you sure you want to permanently delete polling station?</h1>
                @if($editobject)
                <h3 class="text-md text-gray-700  my-2 p-2 rounded-md"><span class="font-semibold mr-2">Polling Station No. : </span>
                
                    @php
                    $boothno = "";
                    if($editobject['BOOTHNO']<10){
                        $boothno = '00'.$editobject['BOOTHNO'];
                    }
                    elseif($editobject['BOOTHNO']>=10 and $editobject['BOOTHNO']<100){
                        $boothno = '0'.$editobject['BOOTHNO'];
                    }
                    else
                    { 
                        $boothno =  $editobject['BOOTHNO'];
                    }
                    echo $boothno;
                @endphp
                
                </h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">Polling Station Name: </span>{{$editobject['POLLBUILD']}}</h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">Village: </span>{{$editobject['VILLAGE']}}</h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">Location: </span>{{$editobject['PS_LOCN_NO']}}</h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">URBAN/RURAL: </span>{{$editobject['URBAN']}}</h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">TOTAL VOTE: </span>{{$editobject['TOTALVOTE']}}</h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">TYPE: </span>{{$editobject['TYPE']}}</h3>
                <h3 class="text-md text-gray-700  mb-2 p-2 rounded-md"><span class="font-semibold mr-2">CONSCODE: </span>{{$editobject['CONSCODE']}}</h3>
                @endif
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmupdatemodal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>
            @if($editobject && $editobject['id'] )

            <x-primary-button class="ml-2" wire:click="deleteRecord({{$editobject['id']}})" wire:loading.attr="disabled">
                Delete Polling Station
            </x-primary-button>
            @endif
        </x-slot>
    </x-confirmation-modal> 

    
    <x-confirmation-modal wire:model="viewmodal">
        <x-slot name="icon">
            <svg class="h-6 w-6 stroke-white" stroke-width="1.5" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </x-slot>
    
    
        <x-slot name="title">
            View Polling Station Detail
        </x-slot>
    
    
        <x-slot name="content">
    
            <div class="w-full flex flex-col justify-center">
                {{-- <h1 class="text-2xl text-red-800 ">Are you sure you want to Reset password to default ?</h1> --}}
               
                @if($viewobject )
                {{-- {{  dd($viewobject)}} --}}
                <h3 class="text-md text-gray-700 bg-gray-100 my-2 p-2 rounded-md"><span class="bg-gray-200 p-2 font-semibold mr-2 ">Polling Station: </span>{{$viewobject['POLLBUILD']}}</h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class="bg-gray-200 p-2 font-semibold mr-2">Polling Station No.: </span>
                    @php
                    $boothno = "";
                    if($viewobject['BOOTHNO']<10){
                        $boothno = '00'.$viewobject['BOOTHNO'];
                    }
                    elseif($viewobject['BOOTHNO']>=10 and $viewobject['BOOTHNO']<100){
                        $boothno = '0'.$viewobject['BOOTHNO'];
                    }
                    else
                    { 
                        $boothno =  $viewobject['BOOTHNO'];
                    }
                    echo $boothno;
                @endphp
                </h3>
                <h3 class="text-md text-gray-700 bg-gray-100 my-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Constituency : </span>{{ $viewobject['CONSNAME']}} ({{ $viewobject['CONSCODE']}})</h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Village: </span>{{$viewobject['VILLAGE']}}</h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Poll Area: </span>{{$viewobject['POLLAREA']}}</h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Polling Station Type: </span>{{$viewobject['TYPE']}}</h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Total Votes: </span>{{$viewobject['TOTALVOTE']}} ({{$viewobject['MALEVOTE']}} -Males ,{{$viewobject['FEMALEVOTE']}} -Females, {{$viewobject['OtherVote']}} -Others)</h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">URBAN/RURAL: </span>@if ($viewobject['URBAN'] ==1)
                    Urban
                    @else
                    Rural
                    @endif
                </h3>
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">No. of officers required in polling party: </span>{{$viewobject['NOOFOFFICER']}}</h3>
                {{-- <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Female Party: </span>@if ($viewobject['FEMALEPARTY'] ==1)
                    Yes
                    @else
                    No
                    @endif</h3> --}}
                <h3 class="text-md text-gray-700 bg-gray-100 mb-2 p-2 rounded-md"><span class=" bg-gray-200 p-2 font-semibold mr-2">Parda Nashin: </span>
                    @if ($viewobject['PARDANASHIN'] ==1)
                    Yes
                    @else
                    No
                    @endif</h3>
                
                @endif
            </div>
    
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('viewmodal')" wire:loading.attr="disabled">
                Close
            </x-secondary-button>
           
        </x-slot>
    </x-confirmation-modal> 
</div>
