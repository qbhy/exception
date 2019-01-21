<?php
/**
 * User: qbhy
 * Date: 2019-01-21
 * Time: 21:01
 */

namespace Qbhy\Exception;

use Qbhy\Exception\Contracts\Renderable;
use Throwable;
use Exception;

abstract class RenderableException extends Exception implements Renderable
{
    protected $statusCode = 400;
    protected $data;

    public function __construct(string $message = "", $statusCode = null, $data = null, int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->statusCode = $statusCode ?? $this->statusCode;
        $this->data       = $data;
    }

    /**
     * @param mixed $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param int $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int|null $statusCode
     *
     * @return $this
     */
    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

}