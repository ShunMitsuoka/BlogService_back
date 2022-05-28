<?php

namespace Packages\Domain\Models\RootUser;

use Packages\Domain\Interfaces\Models\EntityInterface;

class User implements EntityInterface
{
    private ?UserId $user_id;
    private string $name;

    function __construct(
        ?UserId $user_id,
        string $name,
    ) {
        $this->user_id = $user_id;
        $this->name = $name;
    }

    public function getUserId():int{
        if(is_null($this->user_id)){
            throw new \Exception('ユーザーIDが存在しません。');
        }
        return $this->user_id->getId();
    }

    public function getName() : string{
        return $this->name;
    }
}
