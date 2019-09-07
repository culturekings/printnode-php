<?php

namespace PrintNode;

/**
 * Whoami.
 *
 * Object representing a Whoami request in PrintNode API
 *
 * @property int      $id
 * @property string   $firstname
 * @property string   $lastname
 * @property string   $email
 * @property bool     $canCreateSubAccounts
 * @property string   $creatorEmail
 * @property string   $creatorRef
 * @property int[]    $childAccounts
 * @property string   $credits
 * @property int      $numComputers
 * @property int      $totalprints
 * @property string[] $versions
 * @property int[]    $connected
 * @property string[] $Tags
 * @property string[] $ApiKeys
 * @property string   $state
 * @property string[] $permissions
 */
class Whoami extends Entity
{
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $canCreateSubAccounts;
    protected $creatorEmail;
    protected $creatorRef;
    protected $childAccounts;
    protected $credits;
    protected $numComputers;
    protected $totalPrints;
    protected $versions;
    protected $connected;
    protected $Tags;
    protected $ApiKeys;
    protected $state;
    protected $permissions;

    public function foreignKeyEntityMap()
    {
        return [];
    }
}
