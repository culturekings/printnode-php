<?php

namespace CultureKings\PrintNode;

/**
 * Credentials.
 *
 * Object representing the credentials for the PrintNode API
 *
 * @property string $apiKey
 * @property string $emailPassword
 */
class Credentials implements CredentialsInterface
{
    /** @var string */
    private $apikey;

    /** @var string */
    private $emailPassword;

    /**
     * return correct authentcation method.
     *
     * @param void
     *
     * @return string
     * */
    public function __toString()
    {
        return isset($this->apikey) ? $this->apikey : $this->emailPassword;
    }

    /**
     * Set email and password for Email:Password authentication.
     *
     * @param string $email
     * @param string $password
     *
     * @return Credentials
     * */
    public function setEmailPassword(string $email, string $password): self
    {
        if (isset($this->apikey)) {
            throw new \Exception('EmailPassword has already been set.');
        }

        $this->emailPassword = $email.': '.$password;

        return $this;
    }

    /**
     * Set email and password for Email:Password authentication.
     *
     * @param string $apikey
     *
     * @return Credentials
     * */
    public function setApiKey(string $apikey): self
    {
        if (isset($this->emailPassword)) {
            throw new \Exception('ApiKey has already been set.');
        }

        $this->apikey = $apikey.':';

        return $this;
    }

    /**
     * Set property on object.
     *
     * @param mixed $propertyName
     * @param mixed $value
     *
     * @return void
     * */
    public function __set($propertyName, $value)
    {
        if (! property_exists($this, $propertyName)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '%s does not have a property named %s',
                    get_class($this),
                    $propertyName
                )
            );
        }
        $this->$propertyName = $value;
    }

    /**
     * Get property on object.
     *
     * @param mixed $propertyName
     *
     * @return mixed
     * */
    public function __get($propertyName)
    {
        if (! property_exists($this, $propertyName)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '%s does not have a property named %s',
                    get_class($this),
                    $propertyName
                )
            );
        }

        return $this->$propertyName;
    }
}
