<?php
namespace QHO\Hello\Controller\Index;

class Add extends Index{
    public function execute(){
        //parent::execute();
        return $this->_pageFactory->create();
    }
}
?>