<?php namespace App\Repositories;


class FooRepository {
	public function get()
	{
		return ['array', 'of', 'items'];
	}
	
	public function users(){
		$user = new \App\Models\User;
		return $user->all();
	}
}