<?php 

namespace Qclinic\Http\Requests\Backend\Access\User;

use Qclinic\Http\Requests\Request;

/**
 * Class RestoreUserRequest
 * @package Qclinic\Http\Requests\Backend\Access\User
 */
class RestoreUserRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->can('restore-users');
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