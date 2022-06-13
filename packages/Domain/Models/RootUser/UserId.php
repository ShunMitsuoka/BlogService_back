<?php

namespace Packages\Domain\Models\RootUser;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class UserId implements ValueObjectInterface
{
    private int $user_id;

    function __construct(int $user_id) {
        $this->user_id = $user_id;
    }

    public function getId() : int{
        return $this->user_id;
    }
}
