<?php
declare(strict_types=1);
namespace Test\CustomModule\Api\Data;

interface GreetingInterface
{
    /**
     * @return string
     */
    public function getMessage(): string;
}
