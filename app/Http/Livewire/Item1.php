<?php

namespace App\Http\Livewire;
use Livewire\Component;

class Item1 extends Component
{
    public $item;
  protected  $listeners = [
      'delet' 
  ];

     public function mount(\App\Models\Item $item){ 
         $this->item = $item;
     }

     public function render()
     {
         return view('livewire.item1');
     }
     public function delet($id){
         $this->item->where('id',$id)->delete();
          return redirect()->to('/dashboard');
     }
 
}
