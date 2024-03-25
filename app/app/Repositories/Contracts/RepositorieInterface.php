<?php

namespace App\Repositories\Contracts;


interface RepositorieInterface {

    public function paginate();

    public function find($id);

    public function create(array $data);

    public function update($id, array $data);
    
    public function destroy($id);

}