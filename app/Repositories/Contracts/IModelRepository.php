<?php

namespace App\Repositories\Contracts;


interface IModelRepository {

    public function all();

     public function get($id);

    public function store(array $data);

    public function update($id, array $data);

    public function destroy($id);

    public function show($id);


}
