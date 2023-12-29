<div>
    <div class="flex border bg-blue-900/5 border-dashed border-blue-900/30 p-4 rounded-md justify-center items-center mb-4">

        <h1 class="text-3xl text-blue-900">Total Offices- {{$total}}</h1>
    </div>
    <div class="flex justify-between p-4 rounded-md mb-4  bg-gray-200">

        <div class=" w-1/2 rounded-sm px-4">

            <x-input type="text" wire:model.debounce.500ms="search" placeholder="Search by office name..." class="w-full border-0 h-12 rounded-lg">

            </x-input>

        </div>
        <div>
            <x-primary-button wire:click="toggle('newmodal')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>


                Add new Office</x-primary-button>

        </div>
    </div>

    <table class="table-auto w-full border-collapse border">

        <thead class="bg-gray-200 w-full">
            <td class="border font-semibold text-gray-700 p-2 w-8 text-left">Sr No.</td>

            @foreach($header as $head)
            <td class="border font-semibold text-gray-700 p-2 w-16 text-left">{{$head}}</td>
            @endforeach
        </thead>
        <tbody>
            @foreach($data as $index=>$row)
            <tr>
                <td class="text-sm p-2 border text-gray-600">{{$index + $data->firstItem()}}</td>
                <td class="text-sm p-2 border text-gray-600">{{$row->office}}</td>

                <td class=" text-sm p-2 border text-gray-600">{{$this->getDeptName($row->deptcode)}}</td>
                <td class=" text-sm p-2 border text-gray-600">{{$this->getSubDeptName($row->deptcode,$row->subdeptcode)}}</td>
               

                <td class=" text-sm p-2 border text-gray-600">{{$row->address}}</td>
                {{-- <td class=" text-sm p-2 border text-gray-600">{{$row->selectedclass->description}}</td> --}}
                <td class=" text-sm p-2 border text-gray-600">
                    {{ $row->office_ac ? $row->acname->AC_NAME : '-' }}
                
                </td>
                <td class=" text-sm p-2 border text-gray-600">
                    {{ $row->EmailID??'-' }}
                
                </td>

                <td class="p-2 border text-gray-600 w-8 ">
                   
                    <div class="flex justify-center items-center"><a href="javascript:void(0)" wire:click='editobject("{{$row->id}}")' class=" hover:bg-blue-100 p-2 rounded-md">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>


                               

                        </a></div>


                </td>

                <td class="p-2 border text-gray-600 w-8">
                    @can('delete',$row)
                    <div class="flex justify-center items-center"><a href="javascript:void(0);" wire:click='openForDeletion({{$row->id}})' class=" hover:bg-red-100 p-2 rounded-md">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>


                        </a></div>
                        @else
                            <svg data-tooltip-target="tooltip-default" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-red-700 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                              </svg>
                              
                          <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Data is locked
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>      
                                
                            @endcan 


                </td>

            </tr>

            @endforeach




        </tbody>

    </table>
    <div class="py-2">
        {{ $data->links() }}
    </div>


    <x-confirmation-modal wire:model="newmodal">
        <x-slot name="icon">
            <svg class="h-6 w-6 stroke-white" stroke-width="1.5" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </x-slot>
        <x-slot name="subtitle">

        </x-slot>

        <x-slot name="title">
            Add New Office 
        </x-slot>


        <x-slot name="content">

            <div>

                <x-validation-errors class="mb-4" />
                <form method="POST">
                    @csrf

                    <div class="w-full flex gap-x-5">


                        {{-- <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('District') }}" />
                            <x-select  wire:model="object.distcode" type="text" class="block w-full" :ddlist="$distlist" idfield="DistCode" textfield="DistName" />
                        </div> --}}
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Department') }}" />
                            <x-select wire:change="loadSubDepts()" wire:model="object.deptcode" type="text" class="block w-full" :ddlist="$deptlist" idfield="deptcode" textfield="deptname" />
                       </div>
                       @if($subdeptlist)
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Sub Department') }}" />
                            <x-select wire:model="object.subdeptcode" type="text" class="block w-full" :ddlist="$subdeptlist" idfield="subdeptcode" textfield="subdept" />
                       </div>
                       @endif

                    </div>

                    <div class="w-full flex gap-x-5">


                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Name') }}" />
                            <x-input wire:model="object.office" class="block w-full" type="text" :value="old('Department Name')" required />

                        </div>
                    </div>

                    <div class="w-full flex gap-x-5">


                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Address') }}" />
                            <x-input wire:model="object.address" class="block w-full" type="text" :value="old('Department Name')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Assembly Constituency') }}" />
                            <x-select wire:model="object.office_ac" type="text" class="block w-full" :ddlist="$conslist" idfield="AC_NO" textfield="AC_NAME" />
                       </div>


                    </div>
                    <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Email') }}" />
                            <x-input wire:model="object.EmailID" class="block w-full" type="email" :value="old('Office Email')" required />

                        </div>
                    </div>


                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('newmodal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-primary-button class="ml-2" wire:click="addobject()" wire:loading.attr="disabled">
                Add New Office
            </x-primary-button>
        </x-slot>
    </x-confirmation-modal>

    <x-confirmation-modal wire:model="editmodal">
        <x-slot name="icon">
            <svg class="h-6 w-6 stroke-white" stroke-width="1.5" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </x-slot>


        <x-slot name="title">
            Update Office
        </x-slot>


        <x-slot name="content">

            <div>

                <x-validation-errors class="mb-4" />
                <form method="POST">
                    @csrf

                  


                        
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Department') }}" />
                            <x-select wire:change="editLoadSubDepts()" wire:model="editobject.deptcode"  type="text" class="block w-full" :ddlist="$deptlist" idfield="deptcode" textfield="deptname" />
                       </div>
                        @if($subdeptlist)
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Sub Department') }}" />
                            <x-select wire:model="editobject.subdeptcode" type="text" class="block w-full" :ddlist="$subdeptlist" idfield="subdeptcode" textfield="subdept" />
                       </div>
                       @endif

                    </div>-->

                    <div class="w-full flex gap-x-5">


                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Name') }}" />
                            <x-input wire:model="editobject.office" class="block w-full" type="text" :value="old('Department Name')" required />

                        </div>
                    </div>

                    <div class="w-full flex gap-x-5">


                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Address') }}" />
                            <x-input wire:model="editobject.address" class="block w-full" type="text" :value="old('Department Name')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5 w-full">

                       <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Assembly Constituency') }}" />
                            <x-select wire:model="editobject.office_ac" type="text" class="block w-full" :ddlist="$conslist" idfield="AC_NO" textfield="AC_NAME" />
                       </div>


                    </div>
                     <div class="w-full flex gap-x-5">
                        <div class="mt-4 w-full">
                            <x-label for="name" value="{{ __('Office Email') }}" />
                            <x-input wire:model="editobject.EmailID" class="block w-full" type="email" :value="old('Office Email')" required />

                        </div>
                    </div>
                </form>

            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('editmodal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-primary-button class="ml-2" wire:click="Update()" wire:loading.attr="disabled">
                Update Office
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
            Delete Office?
        </x-slot>


        <x-slot name="content">

            <div class="w-full flex flex-col justify-center">
                <h1 class="text-2xl text-red-800 ">Are you sure you want to permanently delete office?</h1>
               
            @if($editobject && $editobject['deptcode'] && $editobject['office'] && $editobject['address'] && $editobject['EmailID'])
                <h3 class="text-lg text-gray-700 bg-red-50 my-2 p-2 rounded-md"><span class="font-semibold">Department: </span>{{$this->getDeptName($editobject['deptcode'])}}</h3>
                <h3 class="text-lg text-gray-700 bg-red-50 mb-2 p-2 rounded-md"><span class="font-semibold">Office: </span>{{$editobject['office']}}</h3>
                <h3 class="text-lg text-gray-700 bg-red-50 mb-2 p-2 rounded-md"><span class="font-semibold">Office Address: </span>{{$editobject['address']}}</h3>
                @if(isset($editobject['office_ac_name']))
                <h3 class="text-lg text-gray-700 bg-red-50 mb-2 p-2 rounded-md"><span class="font-semibold">Office Constituency: </span>{{$editobject['office_ac_name']}}</h3>
                 @endif
                  <h3 class="text-lg text-gray-700 bg-red-50 mb-2 p-2 rounded-md"><span class="font-semibold">Office Email: </span>{{$editobject['EmailID']??"-"}}</h3>
               
                @endif
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmupdatemodal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>
            @if($editobject && $editobject['id'] )

            <x-primary-button class="ml-2" wire:click="deleteRecord({{$editobject['id']}})" wire:loading.attr="disabled">
                Delete Office
            </x-primary-button>
            @endif
        </x-slot>
    </x-confirmation-modal>
</div>
