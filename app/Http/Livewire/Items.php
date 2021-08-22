<?php
namespace App\Http\Livewire;
use App\Models\Item;
use Livewire\Component;

class Items extends Component
{
    public $items;
    protected $listeners=['updateall'=>'markall' ];
  
    public function mount(){
        $this->items = Item::all();
    }
    public function render()
    {
        return view('livewire.items');
    }
    public function markall(){
         $this->items->each->update(['bought'=>true]);
         return redirect()->to('/dashboard');
    }
  
  

}
