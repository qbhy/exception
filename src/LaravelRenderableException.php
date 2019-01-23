<?php
/**
 * User: qbhy
 * Date: 2019-01-23
 * Time: 23:16
 */

namespace Qbhy\Exception;

use Illuminate\Http\JsonResponse;
/**
 * Class LaravelRenderableException
 *
 * @package Qbhy\Exception
 */
class LaravelRenderableException extends RenderableException
{
    public function render($request)
    {
        return new JsonResponse([
            'msg'  => $this->getMessage(),
            'data' => $this->getData(),
            'code' => $this->getCode(),
        ], $this->getStatusCode());
    }
}