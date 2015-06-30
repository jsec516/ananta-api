<?php namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models;

class UserController extends BaseController
{
	
	
	/**
     * Store a new user for a clinic.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user_info = $request->input('user_info');
        $user_info['password'] = Hash::make($user_info['password']);
		$user = User::create($user_info);
		if( ! $user || ! $user->id ){
			$response = [ 'status' => 'failed' ];
		} else {
			$response = [ 'status' => 'successs' ];
		}
		return $response;
		
    }
}
