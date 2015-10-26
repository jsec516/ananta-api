<?php 

namespace Qclinic\Http\Controllers\Backend\Access\Role;

use Qclinic\Http\Controllers\Controller;
use Qclinic\Repositories\Backend\Role\RoleRepositoryContract;
use Qclinic\Http\Requests\Backend\Access\Role\CreateRoleRequest;
use Qclinic\Http\Requests\Backend\Access\Role\StoreRoleRequest;
use Qclinic\Http\Requests\Backend\Access\Role\EditRoleRequest;
use Qclinic\Http\Requests\Backend\Access\Role\UpdateRoleRequest;
use Qclinic\Http\Requests\Backend\Access\Role\DeleteRoleRequest;
use Qclinic\Repositories\Backend\Permission\PermissionRepositoryContract;
use Qclinic\Repositories\Backend\Permission\Group\PermissionGroupRepositoryContract;

/**
 * Class RoleController
 * @package Qclinic\Http\Controllers\Access
 */
class RoleController extends Controller {

	/**
	 * @var RoleRepositoryContract
	 */
	protected $roles;

	/**
	 * @var PermissionRepositoryContract
	 */
	protected $permissions;

	/**
	 * @param RoleRepositoryContract $roles
	 * @param PermissionRepositoryContract $permissions
	 */
	public function __construct(RoleRepositoryContract $roles, PermissionRepositoryContract $permissions) {
		$this->roles = $roles;
		$this->permissions = $permissions;
	}

	/**
	 * @return mixed
	 */
	public function index() {
		return view('backend.access.roles.index')
			->withRoles($this->roles->getRolesPaginated(50));
	}

	/**
	 * @param PermissionGroupRepositoryContract $group
	 * @param CreateRoleRequest $request
	 * @return mixed
     */
	public function create(PermissionGroupRepositoryContract $group, CreateRoleRequest $request) {
		return view('backend.access.roles.create')
			->withGroups($group->getAllGroups())
			->withPermissions($this->permissions->getUngroupedPermissions());
	}

	/**
	 * @param StoreRoleRequest $request
	 * @return mixed
	 */
	public function store(StoreRoleRequest $request) {
		$this->roles->create($request->all());
		return redirect()->route('admin.access.roles.index')->withFlashSuccess(trans("alerts.roles.created"));
	}

	/**
	 * @param $id
	 * @param PermissionGroupRepositoryContract $group
	 * @param EditRoleRequest $request
	 * @return mixed
     */
	public function edit($id, PermissionGroupRepositoryContract $group, EditRoleRequest $request) {
		$role = $this->roles->findOrThrowException($id, true);
		return view('backend.access.roles.edit')
			->withRole($role)
			->withRolePermissions($role->permissions->lists('id')->all())
			->withGroups($group->getAllGroups())
			->withPermissions($this->permissions->getUngroupedPermissions());
	}

	/**
	 * @param $id
	 * @param UpdateRoleRequest $request
	 * @return mixed
	 */
	public function update($id, UpdateRoleRequest $request) {
		$this->roles->update($id, $request->all());
		return redirect()->route('admin.access.roles.index')->withFlashSuccess(trans("alerts.roles.updated"));
	}

	/**
	 * @param $id
	 * @param DeleteRoleRequest $request
	 * @return mixed
     */
	public function destroy($id, DeleteRoleRequest $request) {
		$this->roles->destroy($id);
		return redirect()->route('admin.access.roles.index')->withFlashSuccess(trans("alerts.roles.deleted"));
	}
}