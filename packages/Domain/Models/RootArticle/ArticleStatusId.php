<?php

namespace Packages\Domain\Models\RootArticle;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class ArticleStatusId implements ValueObjectInterface
{
    private int $status_id;

    function __construct(int $status_id) {
        $this->status_id = $status_id;
    }

    public function getStatusId() : int{
        return $this->status_id;
    }
}
