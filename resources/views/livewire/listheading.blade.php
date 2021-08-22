<div>
    <tr class = "text-left font-medium font-body mb-4  shadow-sm">
        <th class = "px-6 pt-6 pb-4">Item </th>
        <th class = "px-6 pt-6 pb-4">Action </th>
        <th  class = "px-6 pt-6 pb-4 pr-5">Mark As Complete <input onclick="alertme()"  type="checkbox" id="Item" class="appearance-none checked:bg-blue-600 checked:border-transparent "></th>
  </tr>    
</div>
<script>
   function alertme(){
       Livewire.emit('change')
   }
</script>
