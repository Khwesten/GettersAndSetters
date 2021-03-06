<?php

namespace LombokLike\Exception;

/**
 * Created by IntelliJ IDEA.
 * User: k-heiner@hotmail.com
 * Date: 04/01/2017
 * Time: 22:15
 */
class LombokLikeException extends \Exception implements \LombokLike\Exception\IException
{
    protected $message = 'Unknown exception';
    protected $code = 0;
    protected $file;
    protected $line;

    public function __construct($message = null, $code = 0)
    {
        if (!$message) {
            throw new $this('Unknown ' . get_class($this));
        }
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return $this->message;
    }
}