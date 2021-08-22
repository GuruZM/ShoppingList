<div>
 @foreach ($items as $item)
@livewire('item1',['item'=>$item], key($item->id))
 @endforeach
</div>

