<x-app-layout>
    <x-slot name="header">
       <div class =" flex">
           <form action="" class="flex ">
               <input type="text" placeholder = "e.g  tomato" class = "focus:border-transparent  font-body border border-blue-100  focus:ring-blue-100 focus:outline-none  bg-white shadow-md rounded-full text-sm border-transparent  pl-10">
               <button type="submit" class = " bg-white shadow-md rounded-full text-sm border-transparent w-32 ml-3 p-2 font-body border border-blue-100" >Add</button>
           </form>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
     
                  <table class = "w-full whitespace-nowrap">
                      <tr class = "text-left font-medium font-body mb-4  shadow-sm">
                            <th class = "px-6 pt-6 pb-4">Item </th>
                            <th class = "px-6 pt-6 pb-4">Done</th>
                            <th class = "px-6 pt-6 pb-4">Action </th>
                      </tr>
               
                          @livewire('item', ['id'=>1 ,'name'=>'Tomato', 'bought'=>false])
                          @livewire('item',['id'=>2 ,'name'=>'Onion', 'bought'=>false])
                          @livewire('item',['id'=>3 ,'name'=>'Ubunga', 'bought'=>true])

                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
