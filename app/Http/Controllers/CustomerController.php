<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;

class CustomerController extends Controller
{
	private $customerRepository;

	public function __construct(CustomerRepository $customerRepository) {
		$this->customerRepository = $customerRepository;
	}

    public function index() {
    	$customers = $this->customerRepository->all();

    	return $customers;
    }

    public function show($customerID){
    	$customer = $this->customerRepository->findById($customerID);

    	return $customer;
    }

    public function update($customerID){
    	
    	$this->customerRepository->update($customerID);

    	return redirect('/' . $customerID);
    }  

    public function destroy($customerID){
    	
    	$this->customerRepository->delete($customerID);

    	return redirect('/');
    }        
}
