<?php

namespace App\Repositories;

use App\Repositories\CustomerRepositoryInterface;
use App\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
	protected $guarder  = [];

	public function all()
	{/*
		return Customer::orderBy('name')
						->where('active',1)
						->get()
						->map(function ($customer){
							return $this->format($customer)
					});*/

		return Customer::orderBy('name')
						->where('active',1)
						->get()
						->map()->format();					
	}

	public function findById($customerID) {
		return Customer::where('id',$customerID)
			->where('active',1)
			->with('user')
			->firstOrFail()
			->format();
	
	}

    public function update($customerID){
    	
    	$customer = Customer::where('id', $customerID)->firstOrFail();

    	$customer->update(request()->only('name'));
    } 	

    public function delete($customerID){
    	
    	$customer = Customer::where('id', $customerID)->delete();

    } 	


}