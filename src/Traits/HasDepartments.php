<?php

namespace Alqaj\Organization\Traits;

use Alqaj\Organization\Models\Department;
trait HasDepartments
{
    public function departments()
    {
        return $this->belongsToMany(Department::class,'public.model_has_departments','model_id','department_id');
    }

    public $code;
    public function hasDepartment($code)
    {
        $departments = $this->departments()->where('code', $code)->get();
        if(count($departments) > 0) {
            return true;
        } else {
            return false;
        }

    }
}