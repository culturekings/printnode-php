<?php

namespace CultureKings\PrintNode;

/**
 * Credentials.
 *
 * Credential store used by Request
 * when communicating with API server.
 */
interface CredentialsInterface
{
    /**
     * Convert object into a string.
     *
     * @param void
     *
     * @return string
     */
    public function __toString();

    /**
     * Set property on object.
     *
     * @param mixed $propertyName
     * @param mixed $value
     *
     * @return void
     */
    public function __set($propertyName, $value);

    /**
     * Get property from object.
     *
     * @param mixed $propertyName
     *
     * @return mixed
     */
    public function __get($propertyName);
}
