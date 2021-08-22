<?php
namespace App\Http\Livewire;
use App\Models\Item;
use Livewire\Component;

class AddItem extends Component
{
    public $name; 

    public function render()
    {
        return view('livewire.add-item');
    }
    public function newItem(){
        $item = new \App\models\Item();
            $item ->name = $this->name;
            $item->save();
            $this->reset();
            return redirect()->to('/dashboard');
    }
}
