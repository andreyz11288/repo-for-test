<?php
declare(strict_types=1);
namespace Test\CustomModule\Controller\Api;

class Greeting extends \Magento\Framework\App\Action\Action
{
    protected \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory;
    protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->scopeConfig = $scopeConfig;
    }

    public function execute(): \Magento\Framework\Controller\Result\Json|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
    {
        $greetingMessage = $this->scopeConfig->getValue('new/general/greeting_message');

        $result = $this->resultJsonFactory->create();
        return $result->setData(['greeting' => $greetingMessage]);
    }
}
