<?php

namespace PrintNode;

/**
 * PrintNode_Computer.
 *
 * Object representing a Computer in PrintNode API
 *
 * @property int      $id
 * @property string   $name
 * @property string   $inet
 * @property string   $inet6
 * @property string   $version
 * @property string   $jre
 * @property object   $systemInfo
 * @property bool     $acceptOfflinePrintJobs
 * @property DateTime $createTimestamp
 * @property string   $state
 */
class Computer extends Entity
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $inet;

    /** @var string */
    protected $inet6;

    /** @var string */
    protected $hostname;

    /** @var string */
    protected $version;

    /** @var string */
    protected $jre;

    /** @var object */
    protected $systemInfo;
    /** @var bool */
    protected $acceptOfflinePrintJobs;

    /** @var DateTime */
    protected $createTimestamp;

    /** @var string */
    protected $state;

    /**
     * {@inheritdoc}
     */
    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
