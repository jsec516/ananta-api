<?php 

namespace Qclinic\Http\Requests\Backend\Access\Permission\Group;

use Qclinic\Http\Requests\Request;

/**
 * Class CreatePermissionGroupRequest
 * @package Qclinic\Http\Requests\Backend\Access\Permission\Group
 */
class CreatePermissionGroupRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->can('create-permission-groups');
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