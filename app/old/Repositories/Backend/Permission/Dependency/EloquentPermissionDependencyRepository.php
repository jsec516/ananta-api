<?php 

namespace Qclinic\Repositories\Backend\Permission\Dependency;

use Qclinic\Models\Access\Permission\PermissionDependency;

/**
 * Class EloquentPermissionDependencyRepository
 * @package Qclinic\Repositories\Backend\Permission\Dependency
 */
class EloquentPermissionDependencyRepository implements  PermissionDependencyRepositoryContract {

    /**
     * @param $permission_id
     * @param $dependency_id
     * @return mixed
     */
    public function create($permission_id, $dependency_id)
    {
        $dependency = new PermissionDependency;
        $dependency->permission_id = $permission_id;
        $dependency->dependency_id = $dependency_id;
        return $dependency->save();
    }

    /**
     * @param $permission_id
     * @return mixed
     */
    public function clear($permission_id)
    {
        return PermissionDependency::where('permission_id', $permission_id)
            ->delete();
    }
}