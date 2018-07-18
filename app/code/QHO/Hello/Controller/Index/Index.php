<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 7/3/2018
 * Time: 11:21 AM
 */
namespace QHO\Hello\Controller\Index;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action{
    protected $_request;
    protected $_pageFactory;
    public function __construct(Context $context, RequestInterface $request, PageFactory $pageFactory){
        $this->_request = $request;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
    public function execute(){
        /*$fullRequest = $this->getInfo();
        $module = $fullRequest[0];
        $controller = $fullRequest[1];
        $action = $fullRequest[2];
        echo "<h1>$module Module - $controller Controller - $action Action</h1>";
        exit();*/
        return $this->_pageFactory->create();
    }
    public function getInfo(){
        $requestName = $this->_request->getFullActionName();
        $result = explode("_", $requestName);
        return $result;
    }
}
?>