<?php 

namespace Qclinic\Http\Controllers\Backend\Access\Permission;

use Qclinic\Http\Controllers\Controller;
use Qclinic\Repositories\Backend\Permission\Group\PermissionGroupRepositoryContract;
use Qclinic\Http\Requests\Backend\Access\Permission\Group\EditPermissionGroupRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\Group\SortPermissionGroupRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\Group\StorePermissionGroupRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\Group\CreatePermissionGroupRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\Group\UpdatePermissionGroupRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\Group\DeletePermissionGroupRequest;

/**
 * Class PermissionGroupController
 * @package Qclinic\Http\Controllers\Access
 */
class PermissionGroupController extends Controller {

    /**
     * @var PermissionGroupRepositoryContract
     */
    protected $groups;

    /**
     * @param PermissionGroupRepositoryContract $groups
     */
    public function __construct(PermissionGroupRepositoryContract $groups) {
        $this->groups = $groups;
    }

    /**
     * @param CreatePermissionGroupRequest $request
     * @return \Illuminate\View\View
     */
    public function create(CreatePermissionGroupRequest $request) {
        return view('backend.access.roles.permissions.groups.create');
    }

    /**
     * @param StorePermissionGroupRequest $request
     * @return mixed
     */
    public function store(StorePermissionGroupRequest $request) {
        $this->groups->store($request->all());
        return redirect()->route('admin.access.roles.permissions.index')->withFlashSuccess(trans("alerts.permissions.groups.created"));
    }

    /**
     * @param $id
     * @param EditPermissionGroupRequest $request
     * @return mixed
     */
    public function edit($id, EditPermissionGroupRequest $request) {
        return view('backend.access.roles.permissions.groups.edit')
            ->withGroup($this->groups->find($id));
    }

    /**
     * @param $id
     * @param UpdatePermissionGroupRequest $request
     * @return mixed
     */
    public function update($id, UpdatePermissionGroupRequest $request) {
        $this->groups->update($id, $request->all());
        return redirect()->route('admin.access.roles.permissions.index')->withFlashSuccess(trans("alerts.permissions.groups.created"));
    }

    /**
     * @param $id
     * @param DeletePermissionGroupRequest $request
     * @return mixed
     */
    public function destroy($id, DeletePermissionGroupRequest $request) {
        $this->groups->destroy($id);
        return redirect()->route('admin.access.roles.permissions.index')->withFlashSuccess(trans("alerts.permissions.groups.deleted"));
    }

    /**
     * @param SortPermissionGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateSort(SortPermissionGroupRequest $request) {
        $this->groups->updateSort($request->get('data'));
        return response()->json(['status' => 'OK']);
    }
}