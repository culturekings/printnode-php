<?php

namespace CultureKings\PrintNode;

/**
 * Tag.
 *
 * Object representing a Tag for POST in PrintNode API
 *
 * @property string $name
 * @property string $value
 */
class Tag extends Entity
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $value;

    public function endPointUrlArg(): string
    {
        return $this->name;
    }

    public function formatForPost(): string
    {
        return json_encode($this->value);
    }

    public function foreignKeyEntityMap()
    {
        return [
        ];
    }
}
