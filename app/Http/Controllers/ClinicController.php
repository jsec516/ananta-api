<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models;

class ClinicController extends BaseController
{
	
	/**
     * Store a new clinic
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    	
        $clinic_request = $request->input('clinic');
		$clinic = Clinic::create($clinic_request);
		if( ! $clinic || ! $clinic->id ){
			$response = [ 'status' => 'failed' ];
		} else {
			$response = [ 'status' => 'successs' ];
		}
		return $response;
		
    }
}
