
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
              <form action="" wire:prevent.sbmit="updateitem">
                  <label for="" class = "mb-2" >Name </label>
                  <input type="text"  value="{{$item->name}}" class = "mb-2 focus:border-transparent w-full font-body border border-blue-100  focus:ring-blue-100 focus:outline-none  bg-white shadow-md  text-sm border-transparent ">
                  <label for="name" >Status</label>
                  <select name="" wire:model.deffer="updatebought" class="focus:border-transparent w-full font-body border my-4 border-blue-100  focus:ring-blue-100 focus:outline-none  bg-white shadow-md text-sm border-transparent  ">
                    <option value="">@if ($item->bought) Bought @else Not Bought @endif</option> 
                    <option value="1">Bought</option>
                      <option value="0">Not Bought</option>
                  </select>
                  <button  type="submit" class = "p-4 bg-blue-400 text-white w-full">Update</button>
              </form>         
            </div>
        </div>
    </div>

  
