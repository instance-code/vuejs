<?php 

namespace App\Repositories\User;

use Czim\Repository\Contracts\BaseRepositoryInterface;

interface IUserRepository extends BaseRepositoryInterface {
    /** */
    public function getLatestUser();

} 