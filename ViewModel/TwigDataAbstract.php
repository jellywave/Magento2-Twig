<?php
/**
 * Developer: Christopher Diaper
 * Date: 29/06/18 08:01
 */

namespace SchumacherFM\Twig\ViewModel;


class TwigDataAbstract implements TwigDataInterface
{
    protected $_block = null;

    protected $_dictionary = array();

    public function setBlock($block){
        $this->_block = $block;
    }
    public function setDictionary($dictionary){
        $this->_dictionary = $dictionary;
    }
    public function getData(){
        return $this->_dictionary;
    }
}