<?php 

namespace Qclinic\Http\Requests\Backend\Access\Role;

use Qclinic\Http\Requests\Request;

/**
 * Class UpdateRoleRequest
 * @package Qclinic\Http\Requests\Backend\Access\Role
 */
class UpdateRoleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return access()->can('edit-roles');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
		];
	}
}