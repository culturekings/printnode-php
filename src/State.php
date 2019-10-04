<?php

namespace CultureKings\PrintNode;

/**
 * State.
 *
 * Object representing a State in PrintNode API
 *
 * @property int      $printJobId
 * @property string   $state
 * @property string   $message
 * @property object   $data
 * @property string   $clientVersion
 * @property DateTime $createTimestamp
 * @property int      $age
 */
class State extends Entity
{
    /** @var int */
    protected $printJobId;

    /** @var string */
    protected $state;

    /** @var string */
    protected $message;

    /** @var object */
    protected $data;

    /** @var string */
    protected $clientVersion;

    /** @var DateTime */
    protected $createTimestamp;

    /** @var int */
    protected $age;

    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
