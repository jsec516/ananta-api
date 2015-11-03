<?php
namespace Qclinic\Accounts\Users;

use Qclinic\Core;

class EloquentUserRepository extends EloquentRepository implements UserRepositoryContract
{
	/**
     * @var \Qclinic\Accounts\User
     */
    protected $model;

    /**
     * @param \Qclinic\Accounts\User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

	/**
     * Find a user by its confirmation code
     *
     * @param string $code
     * @return \Lio\Accounts\User
     */
    public function getByConfirmationCode($code)
    {
        return $this->model->where('confirmation_code', $code)->first();
    }

    /**
     * retrieve the collection of patients for datatable
     *
     * @param string $code
     * @return \Lio\Accounts\User
     */
    public function getPatientTableRecords()
    {
        retrun Datatable::collection($this->model->patients()->get(['id','name']))
        ->showColumns('id', 'name')
        ->searchColumns('name')
        ->orderColumns('id','name')
        ->make();
    }

    public function getPractitionerTableRecords()
    {
        retrun Datatable::collection($this->model->getPractitioners()->get(['id','name']))
        ->showColumns('id', 'name')
        ->searchColumns('name')
        ->orderColumns('id','name')
        ->make();
    }

    public function getStaffTableRecords()
    {
        retrun Datatable::collection($this->model->getStaffs->get(['id','name']))
        ->showColumns('id', 'name')
        ->searchColumns('name')
        ->orderColumns('id','name')
        ->make();
    }
}