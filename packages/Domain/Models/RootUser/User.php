<?php

namespace Packages\Domain\Models\RootUser;

use Packages\Domain\Interfaces\Models\EntityInterface;
use Packages\Domain\Models\RootGuest\Guest;

class User extends Guest implements EntityInterface
{
    private ?UserId $user_id;
    private string $name;
    private string $email;
    private string $profile_img_url;

    function __construct(
        ?UserId $user_id,
        string $name,
        string $email,
    ) {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getUserId() : int{
        if(is_null($this->user_id)){
            throw new \Exception('ユーザーIDが存在しません。');
        }
        return $this->user_id->getId();
    }

    public function getName() : string{
        return $this->name;
    }
    public function getEmail() : string{
        return $this->email;
    }
}
