<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public function format() {
			return [
			'customer_id' => $this->id,
			'name' => $this->name,
			'last_updated' => $this->user->email,
			'created_by'=> $this->updated_at->diffForHumans()
		];		
	}

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
