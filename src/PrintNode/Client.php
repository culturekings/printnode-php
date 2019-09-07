<?php

namespace PrintNode;

/**
 * Client.
 *
 * Object representing a Client in PrintNode API
 *
 * @property int      $id
 * @property bool     $enabled
 * @property string   $edition
 * @property string   $version
 * @property string   $os
 * @property string   $filename
 * @property string   $filesize
 * @property string   $sha1
 * @property DateTime $releaseTimestamp
 * @property string   $url
 */
class Client extends Entity
{
    /** @var int */
    protected $id;

    /** @var bool */
    protected $enabled;

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

    public function formatForPatch(): string
    {
        return json_encode(['enabled' => $this->enabled]);
    }

    public function endPointUrlArg(): ?string
    {
        return (string) $this->id;
    }

    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
