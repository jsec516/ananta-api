<?php namespace App\Repositories;


use Illuminate\Http\Request;
class ClinicRepository {
	public function setupClinic(Request $request){
		//@TODO: create clinic
		$clinic_request = $request->input('clinic');
		$clinic = \App\Models\Clinic::create($clinic_request);
		//@TODO: create user
		$user_request = $request->input('user');
		$user = $clinic->users()->create($user_request);
		return $user->clinic;
	}
}