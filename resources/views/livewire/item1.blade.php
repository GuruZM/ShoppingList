<div >
    <tr class ="text-left font-medium font-body mb-4 hover:shadow-md hover:bg-blue-100"onclick="delet({{$item->id}})">
   <td  class = "px-6 pt-6 pb-4  @if($item->bought) line-through @endif" id="{{$item->id}}">{{$item->name}}</td>
   <td class = "px-1 pt-6 pb-4"> <button class = "p-3 bg-red-400 text-white" onclick="delet({{$item->id}})"> Delete</button> <button class = "p-3 bg-blue-400 text-white" > Edit</button></td>
<td></td>
</tr>
</div>
<script>
      function delet(id){
        Livewire.emit('delet', id);
    }
</script>