<?php 

namespace Qclinic\Http\Requests\Backend\Access\Permission;

use Qclinic\Http\Requests\Request;

/**
 * Class DeletePermissionRequest
 * @package Qclinic\Http\Requests\Backend\Access\Permission
 */
class DeletePermissionRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->can('delete-permissions');
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