<?php

namespace CultureKings\PrintNode;

/**
 * PrintJob.
 *
 * Object representing a PrintJob in PrintNode API
 *
 * @property int      $id
 * @property Printer  $printer
 * @property string   $title
 * @property string   $contentType
 * @property string   $content
 * @property string   $source
 * @property array    $options
 * @property int      $filesize
 * @property DateTime $createTimestamp
 * @property string   $state
 */
class PrintJob extends Entity
{
    /** @var int */
    protected $id;

    /** @var Printer */
    protected $printer;

    /** @var string */
    protected $title;

    /** @var string */
    protected $contentType;

    /** @var string */
    protected $content;

    /** @var string */
    protected $source;

    /** @var array */
    protected $options;

    /** @var int */
    protected $filesize;

    /** @var int */
    protected $createTimestamp;

    /** @var string */
    protected $state;

    public function foreignKeyEntityMap(): array
    {
        return [
            'printer' => 'PrintNode\Printer',
        ];
    }
}
