<?php
declare(strict_types=1);
namespace Test\CustomModule\Model;

class Greeting implements \Test\CustomModule\Api\Data\GreetingInterface
{
    protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getMessage(): string
    {
        return $this->scopeConfig->getValue('new/general/greeting_message');
    }
}
