<?php
namespace App\Http\Livewire;
use App\Models\Item;
use Livewire\Component;
class Edit extends Component
{

    public $item;
    public function mount($id){
        $this->item =  Item::find($id);
    }
    public function render()
    {
        return view('livewire.edit');
    }
    public function updateitem($id){
        dd('hakbjd');
            $this->item->where('id', $id)->update(array('name'=>$this->name,'bought'=>$this->bought));
    }

 
}
