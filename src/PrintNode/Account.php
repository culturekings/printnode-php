<?php

namespace PrintNode;

/**
 * Account.
 *
 * Object representing an Account to POST in PrintNode API
 *
 * @property string[string] $Account
 * @property string[]       $ApiKeys
 * @property string[string] $Tags
 */
class Account extends Entity
{
    /** @var array */
    protected $Account;

    /** @var array */
    protected $ApiKeys;

    /** @var array */
    protected $Tags;

    public function formatForPatch()
    {
        return json_encode($this->Account);
    }

    public function foreignKeyEntityMap(): array
    {
        return [];
    }
}
