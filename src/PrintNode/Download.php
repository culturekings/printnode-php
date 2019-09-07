<?php

namespace PrintNode;

/**
 * Download.
 *
 * Object representing a Download Client in PrintNode API
 *
 *
 * @property string   $edition
 * @property string   $version
 * @property string   $os
 * @property string   $filename
 * @property string   $filesize
 * @property string   $sha1
 * @property DateTime $releaseTimestamp
 * @property string   $url
 */
class Download extends Entity
{
    /** @var string */
    protected $edition;

    /** @var string */
    protected $version;

    /** @var string */
    protected $os;

    /** @var string */
    protected $filename;

    /** @var string */
    protected $filesize;

    /** @var string */
    protected $sha1;

    /** @var DateTime */
    protected $releaseTimestamp;

    /** @var string */
    protected $url;

    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
