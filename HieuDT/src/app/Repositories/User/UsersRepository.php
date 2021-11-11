<?php

namespace App\Repositories\User;

use App\Models\User;
use Czim\Repository\BaseRepository;

class UsersRepository extends BaseRepository implements IUserRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
    public function getLatestUser(){
        return $this->model->latest()->first();
    }
}
