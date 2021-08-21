<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Item extends Component
{
    public $itemId;
    public $name;
    public $bought;
    
    public function mount($id,$name,$bought=false){
        $this->itemId = $id;
        $this->name = $name;
        $this->bought = $bought;
    }
    public function render()
    {
        return view('livewire.item');
    }
    public function buy(){
        $this->bought=!this->bought;
    }
}
