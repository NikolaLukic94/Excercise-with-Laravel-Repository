<?php

namespace App\Repositories;


interface CustomerRepositoryInterface 
{

	public function all();

	public function findById($customerID);

    public function update($customerID);


    public function delete($customerID);

}