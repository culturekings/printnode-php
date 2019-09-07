<?php

namespace PrintNode;

/**
 * Printer.
 *
 * Object representing a Printer in PrintNode API
 *
 * @property int      $id
 * @property Computer $computer
 * @property string   $name
 * @property string   $description
 * @property object   $capabilities
 * @property bool     $default
 * @property DateTime $createTimestamp
 * @property string   $state
 */
class Printer extends Entity
{
    /** @var int */
    protected $id;

    /** @var Computer */
    protected $computer;

    /** @var string */
    protected $name;

    /** @var string */
    protected $description;

    /** @var object */
    protected $capabilities;

    /** @var bool */
    protected $default;

    /** @var DateTime */
    protected $createTimestamp;

    /** @var string */
    protected $state;

    public function foreignKeyEntityMap(): array
    {
        return [
            'computer' => 'PrintNode\Computer',
        ];
    }
}
