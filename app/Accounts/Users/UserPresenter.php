<?php
namespace Qclinic\Accounts\Users;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;

class UserPresenter extends BasePresenter
{
    public function roleList()
    {
        $roles = $this->roles;

        if (! $roles->count()) {
            return 'none';
        }

        $roleArray = [];

        foreach ($roles as $role) {
            $roleArray[] = $role->name;
        }

        return implode(', ', $roleArray);
    }

    public function updated_at()
    {
        $updated = $this->getWrappedObject()->updated_at;

        return Carbon::createFromFormat('Y-m-d H:i:s', $updated)
            ->toFormattedDateString();
    }

    public function thumbnail()
    {
        return '<img src="' . $this->image_url . '&size=50" alt="' . $this->getWrappedObject()->name . '">';
    }

    public function imageMedium()
    {
        return '<img src="' . $this->image_url . '&size=300">';
    }
}