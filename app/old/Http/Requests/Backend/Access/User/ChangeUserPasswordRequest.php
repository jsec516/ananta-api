<?php 

namespace Qclinic\Http\Requests\Backend\Access\User;

use Qclinic\Http\Requests\Request;

/**
 * Class ChangeUserPasswordRequest
 * @package Qclinic\Http\Requests\Backend\Access\User
 */
class ChangeUserPasswordRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->can('change-user-password');
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