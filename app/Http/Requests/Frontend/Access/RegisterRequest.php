<?php 

namespace Qclinic\Http\Requests\Frontend\Access;

use Qclinic\Http\Requests\Request;

/**
 * Class RegisterRequest
 * @package App\Http\Requests\Frontend\Access
 */
class RegisterRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' 		=> 'required|max:255',
			'last_name' 		=> 'required|max:255',
			'email' 			=> 'required|email|max:255|unique:users',
			'password'  		=> 'required|confirmed|min:6',
		];
	}
}