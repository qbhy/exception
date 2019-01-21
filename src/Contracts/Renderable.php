<?php
/**
 * User: qbhy
 * Date: 2019-01-21
 * Time: 21:05
 */

namespace Qbhy\Exception\Contracts;


interface Renderable
{
    public function render($request);
}