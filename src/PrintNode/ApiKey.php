<?php

namespace PrintNode;

/**
 * ApiKey.
 *
 * Object representing an ApiKey for POST in PrintNode API
 *
 * @property string $description
 */
class ApiKey extends Entity
{
    /** @var string */
    protected $description;

    public function endPointUrlArg(): ?string
    {
        return $this->description;
    }

    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
