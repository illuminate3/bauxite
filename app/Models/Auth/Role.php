<?php

namespace App\Models\Auth;

use Modules\Nintei\Models\Auth\Traits\Method\RoleMethod;
use Modules\Nintei\Models\Auth\Traits\Attribute\RoleAttribute;

/**
 * Class Role.
 */
class Role extends \Spatie\Permission\Models\Role
{
    use RoleAttribute, RoleMethod;
}
