<x-app-layout>
    <x-slot name="header">
       <div class =" flex">
                @livewire('add-item')
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
              
                  <table class = "w-full ">
                      <thead>
                    <tr class = "text-left font-medium font-body mb-4  shadow-sm">
                        <th class = "px-6 pt-6 pb-4">Item  </th>
                        <th class = "px-6 pt-6 pb-4">Action </th>
                        <th  class = "px-6 pt-6 pb-4 pr-5">Mark As Complete <input onclick="updateall()"   type="checkbox"  class="appearance-none checked:bg-blue-600 checked:border-transparent "></th>
                  </tr>    
                </thead>
                <tbody>
                          @livewire('items')
                        </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
 <script>
     function updateall(){
     Livewire.emit('updateall');
     }
 </script>