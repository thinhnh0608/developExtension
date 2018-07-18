<?php
namespace QHO\Hello\Block\Hello;

class Add extends \Magento\Framework\View\Element\Template{
    protected function _prepareLayout(){
        $this->assign("data","Welcome to Add Action");
        $this->setData("abc","giá trị ABC");
        return parent::_prepareLayout();
    }

    public function getDemo(){
        $arr = ["sun","mon","tue","wed","thu","fri","sat"];
        return $arr;
    }
}
?>