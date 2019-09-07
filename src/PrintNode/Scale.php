<?php

namespace PrintNode;

/**
 * Scale.
 *
 * Object representing a Scale in PrintNode API
 *
 * @property int[]       $mass
 * @property string      $deviceName
 * @property int         $deviceNum
 * @property string      $port
 * @property int         $count
 * @property int[string] $measurement
 * @property \DateTime   $clientReportedCreateTimestamp
 * @property string      $ntpOffset
 * @property int         $ageOfData
 * @property int         $computerId
 * @property string      $product
 * @property int         $vendorId
 * @property int         $productId
 */
class Scale extends Entity
{
    /** @var array */
    protected $mass;

    /** @var string */
    protected $deviceName;

    /** @var int */
    protected $deviceNum;

    /** @var string */
    protected $port;

    /** @var int */
    protected $count;

    /** @var array */
    protected $measurement;

    /** @var DateTime */
    protected $clientReportedCreateTimestamp;

    /** @var string */
    protected $ntpOffset;

    /** @var int */
    protected $ageOfData;

    /** @var int */
    protected $computerId;

    /** @var int */
    protected $vendor;

    /** @var string */
    protected $product;

    /** @var int */
    protected $vendorId;

    /** @var int */
    protected $productId;

    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
