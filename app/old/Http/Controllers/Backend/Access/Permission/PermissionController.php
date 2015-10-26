<?php 

namespace Qclinic\Http\Controllers\Backend\Access\Permission;

use Qclinic\Http\Controllers\Controller;
use Qclinic\Repositories\Backend\Role\RoleRepositoryContract;
use Qclinic\Repositories\Backend\Permission\PermissionRepositoryContract;
use Qclinic\Http\Requests\Backend\Access\Permission\EditPermissionRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\StorePermissionRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\CreatePermissionRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\UpdatePermissionRequest;
use Qclinic\Http\Requests\Backend\Access\Permission\DeletePermissionRequest;
use Qclinic\Repositories\Backend\Permission\Group\PermissionGroupRepositoryContract;

/**
 * Class PermissionController
 * @package Qclinic\Http\Controllers\Access
 */
class PermissionController extends Controller {

	/**
	 * @var RoleRepositoryContract
	 */
	protected $roles;

	/**
	 * @var PermissionRepositoryContract
	 */
	protected $permissions;

	/**
	 * @var PermissionGroupRepositoryContract
     */
	protected $groups;

	/**
	 * @param RoleRepositoryContract $roles
	 * @param PermissionRepositoryContract $permissions
	 * @param PermissionGroupRepositoryContract $groups
     */
	public function __construct(RoleRepositoryContract $roles, PermissionRepositoryContract $permissions, PermissionGroupRepositoryContract $groups) {
		$this->roles = $roles;
		$this->permissions = $permissions;
		$this->groups = $groups;
	}

	/**
	 * @return mixed
	 */
	public function index() {
		return view('backend.access.roles.permissions.index')
			->withPermissions($this->permissions->getPermissionsPaginated(50))
			->withGroups($this->groups->getAllGroups());
	}

	/**
	 * @param CreatePermissionRequest $request
	 * @return mixed
     */
	public function create(CreatePermissionRequest $request) {
		return view('backend.access.roles.permissions.create')
			->withGroups($this->groups->getAllGroups(true))
			->withRoles($this->roles->getAllRoles())
			->withPermissions($this->permissions->getAllPermissions());
	}

	/**
	 * @param StorePermissionRequest $request
	 * @return mixed
     */
	public function store(StorePermissionRequest $request) {
		$this->permissions->create($request->except('permission_roles'), $request->only('permission_roles'));
		return redirect()->route('admin.access.roles.permissions.index')->withFlashSuccess(trans("alerts.permissions.created"));
	}

	/**
	 * @param $id
	 * @param EditPermissionRequest $request
	 * @return mixed
     */
	public function edit($id, EditPermissionRequest $request) {
		$permission = $this->permissions->findOrThrowException($id, true);
		return view('backend.access.roles.permissions.edit')
			->withPermission($permission)
			->withPermissionRoles($permission->roles->lists('id')->all())
			->withGroups($this->groups->getAllGroups(true))
			->withRoles($this->roles->getAllRoles())
			->withPermissions($this->permissions->getAllPermissions())
			->withPermissionDependencies($permission->dependencies->lists('dependency_id')->all());
	}

	/**
	 * @param $id
	 * @param UpdatePermissionRequest $request
	 * @return mixed
     */
	public function update($id, UpdatePermissionRequest $request) {
		$this->permissions->update($id, $request->except('permission_roles'), $request->only('permission_roles'));
		return redirect()->route('admin.access.roles.permissions.index')->withFlashSuccess(trans("alerts.permissions.updated"));
	}

	/**
	 * @param $id
	 * @param DeletePermissionRequest $request
	 * @return mixed
     */
	public function destroy($id, DeletePermissionRequest $request) {
		$this->permissions->destroy($id);
		return redirect()->route('admin.access.roles.permissions.index')->withFlashSuccess(trans("alerts.permissions.deleted"));
	}
}