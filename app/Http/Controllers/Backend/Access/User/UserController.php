<?php 

namespace Qclinic\Http\Controllers\Backend\Access\User;

use Qclinic\Http\Controllers\Controller;
use Qclinic\Repositories\Backend\User\UserContract;
use Qclinic\Repositories\Backend\Role\RoleRepositoryContract;
use Qclinic\Repositories\Frontend\Auth\AuthenticationContract;
use Qclinic\Http\Requests\Backend\Access\User\CreateUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\StoreUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\EditUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\MarkUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\UpdateUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\DeleteUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\RestoreUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\ChangeUserPasswordRequest;
use Qclinic\Http\Requests\Backend\Access\User\UpdateUserPasswordRequest;
use Qclinic\Repositories\Backend\Permission\PermissionRepositoryContract;
use Qclinic\Http\Requests\Backend\Access\User\PermanentlyDeleteUserRequest;
use Qclinic\Http\Requests\Backend\Access\User\ResendConfirmationEmailRequest;

/**
 * Class UserController
 */
class UserController extends Controller {

	/**
	 * @var UserContract
	 */
	protected $users;

	/**
	 * @var RoleRepositoryContract
	 */
	protected $roles;

	/**
	 * @var PermissionRepositoryContract
	 */
	protected $permissions;

	/**
	 * @param UserContract $users
	 * @param RoleRepositoryContract $roles
	 * @param PermissionRepositoryContract $permissions
	 */
	public function __construct(UserContract $users, RoleRepositoryContract $roles, PermissionRepositoryContract $permissions) {
		$this->users = $users;
		$this->roles = $roles;
		$this->permissions = $permissions;
	}

	/**
	 * @return mixed
	 */
	public function index() {
		return view('backend.access.users.index')
			->withUsers($this->users->getUsersPaginated(config('access.users.default_per_page'), 1));
	}

	/**
	 * @param CreateUserRequest $request
	 * @return mixed
     */
	public function create(CreateUserRequest $request) {
		return view('backend.access.create')
			->withRoles($this->roles->getAllRoles('sort', 'asc', true))
			->withPermissions($this->permissions->getAllPermissions());
	}

	/**
	 * @param StoreUserRequest $request
	 * @return mixed
     */
	public function store(StoreUserRequest $request) {
		$this->users->create(
			$request->except('assignees_roles', 'permission_user'),
			$request->only('assignees_roles'),
			$request->only('permission_user')
		);
		return redirect()->route('admin.access.users.index')->withFlashSuccess(trans("alerts.users.created"));
	}

	/**
	 * @param $id
	 * @param EditUserRequest $request
	 * @return mixed
     */
	public function edit($id, EditUserRequest $request) {
		$user = $this->users->findOrThrowException($id, true);
		return view('backend.access.users.edit')
			->withUser($user)
			->withUserRoles($user->roles->lists('id')->all())
			->withRoles($this->roles->getAllRoles('sort', 'asc', true))
			->withUserPermissions($user->permissions->lists('id')->all())
			->withPermissions($this->permissions->getAllPermissions());
	}

	/**
	 * @param $id
	 * @param UpdateUserRequest $request
	 * @return mixed
	 */
	public function update($id, UpdateUserRequest $request) {
		$this->users->update($id,
			$request->except('assignees_roles', 'permission_user'),
			$request->only('assignees_roles'),
			$request->only('permission_user')
		);
		return redirect()->route('admin.access.users.index')->withFlashSuccess(trans("alerts.users.updated"));
	}

	/**
	 * @param $id
	 * @param DeleteUserRequest $request
	 * @return mixed
     */
	public function destroy($id, DeleteUserRequest $request) {
		$this->users->destroy($id);
		return redirect()->back()->withFlashSuccess(trans("alerts.users.deleted"));
	}

	/**
	 * @param $id
	 * @param PermanentlyDeleteUserRequest $request
	 * @return mixed
     */
	public function delete($id, PermanentlyDeleteUserRequest $request) {
		$this->users->delete($id);
		return redirect()->back()->withFlashSuccess(trans("alerts.users.deleted_permanently"));
	}

	/**
	 * @param $id
	 * @param RestoreUserRequest $request
	 * @return mixed
     */
	public function restore($id, RestoreUserRequest $request) {
		$this->users->restore($id);
		return redirect()->back()->withFlashSuccess(trans("alerts.users.restored"));
	}

	/**
	 * @param $id
	 * @param $status
	 * @param MarkUserRequest $request
	 * @return mixed
     */
	public function mark($id, $status, MarkUserRequest $request) {
		$this->users->mark($id, $status);
		return redirect()->back()->withFlashSuccess(trans("alerts.users.updated"));
	}

	/**
	 * @return mixed
	 */
	public function deactivated() {
		return view('backend.access.deactivated')
			->withUsers($this->users->getUsersPaginated(25, 0));
	}

	/**
	 * @return mixed
	 */
	public function deleted() {
		return view('backend.access.deleted')
			->withUsers($this->users->getDeletedUsersPaginated(25));
	}

	/**
	 * @return mixed
	 */
	public function banned() {
		return view('backend.access.banned')
			->withUsers($this->users->getUsersPaginated(25, 2));
	}

	/**
	 * @param $id
	 * @param ChangeUserPasswordRequest $request
	 * @return mixed
     */
	public function changePassword($id, ChangeUserPasswordRequest $request) {
		return view('backend.access.change-password')
			->withUser($this->users->findOrThrowException($id));
	}

	/**
	 * @param $id
	 * @param UpdateUserPasswordRequest $request
	 * @return mixed
	 */
	public function updatePassword($id, UpdateUserPasswordRequest $request) {
		$this->users->updatePassword($id, $request->all());
		return redirect()->route('admin.access.users.index')->withFlashSuccess(trans("alerts.users.updated_password"));
	}

	/**
	 * @param $user_id
	 * @param AuthenticationContract $auth
	 * @param ResendConfirmationEmailRequest $request
	 * @return mixed
     */
	public function resendConfirmationEmail($user_id, AuthenticationContract $auth, ResendConfirmationEmailRequest $request) {
		$auth->resendConfirmationEmail($user_id);
		return redirect()->back()->withFlashSuccess(trans("alerts.users.confirmation_email"));
	}

	/**
	 * @param void
	 * @return collection
	 */
	public function getDataTable()
	{
		return $this->users->handleDataTable();
	}
}