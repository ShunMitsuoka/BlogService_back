<?php

namespace Packages\Domain\Models\RootArticle;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class ArticleStatus implements ValueObjectInterface
{
    private ArticleStatusId $status_id;
    private string $status_name;

    function __construct(
        ArticleStatusId $status_id,
        string $status_name
    ) {
        $this->status_id = $status_id;
        $this->status_name = $status_name;
    }

    public function getStatusId() : int{
        return $this->status_id->getStatusId();
    }
    public function getStatusName() : string{
        return $this->status_name;
    }
}
