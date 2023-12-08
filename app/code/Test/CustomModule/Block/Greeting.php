<?php
declare(strict_types=1);
namespace Test\CustomModule\Block;

class Greeting extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }

    public function getGreetingMessage()
    {
        return $this->scopeConfig->getValue('new/general/greeting_message');
    }
}
