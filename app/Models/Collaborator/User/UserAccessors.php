<?php

namespace App\Models\Collaborator\User;

trait UserAccessors
{
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
