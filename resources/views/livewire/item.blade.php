<div wire:key="Item{{$itemId}}">
    <tr class ="text-left font-medium font-body mb-4 hover:shadow-md hover:bg-blue-100">
   <td  class = "px-6 pt-6 pb-4 @if($bought) line-through @endif ">{{$name}}</td>
   <td  class = "px-6 pt-6 pb-4"><input wire:click="buy"  type="checkbox" id="Item{{$itemId}}" class="appearance-none checked:bg-blue-600 checked:border-transparent "></td>
   <td class = "px-6 pt-6 pb-4">Delete</td>
</tr>
</div>
