<?php

namespace App\Repositories\Contracts;
use App\Models\Products;
class  IproductsRepository implements IModelRepository
{
    public function all()
    {
        return Products::all();

    }
    public function get($id)
    {
     return Products::find($id);
    }

   public function store(array $data)
   {
       return Products::create($data);

   }

   public function update($id, array $data)
   {
    return Products::find($id)->update($data);
   }

   public function destroy($id){
       return Products::destroy($id);

   }
   public function show($id){
    return Products::find($id);
   }
}
