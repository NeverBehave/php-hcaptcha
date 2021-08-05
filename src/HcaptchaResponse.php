<?php

namespace neverbehave;

class HcaptchaResponse
{
    private $success = false;
    private $errors = [];
    private $raw = null;

    function __construct($response)
    {
        if ($response === null) {
            $this->errors[] = 'json-parse-failure';
        } else {
            $this->success = $response->success;
            $this->errors = $response['error-codes'];
            $this->raw = $response;
        }
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return null
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /** The result of current challenge
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }
}
