<?php 

namespace Qclinic\Http\Requests\Backend\Access\User;

use Qclinic\Http\Requests\Request;

/**
 * Class EditUserRequest
 * @package Qclinic\Http\Requests\Backend\Access\User
 */
class EditUserRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->can('edit-users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}