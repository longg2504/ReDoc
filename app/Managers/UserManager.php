<?php

namespace App\Managers;

use App\Repositories\UserRepository;

class UserManager extends BaseManager
{

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserManager constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(
        UserRepository $userRepository
    ) {
        $this->userRepository = $userRepository;
    }
}
