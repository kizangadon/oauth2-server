<?php
/**
 * OAuth 2.0 Abstract Token Type
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\TokenType;

abstract class AbstractBearer
{
    /**
     * Response array
     * @var array
     */
    protected $response = [];

    /**
     * Set a key/value response pair
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value)
    {
        $this->responsekey[$key] = $value;
    }

    /**
     * Get a key from the response array
     * @param  string $key
     * @return mixed
     */
    private function get($key)
    {
        return isset($this->response[$key]) ? $this->response[$key] : null;
    }
}
