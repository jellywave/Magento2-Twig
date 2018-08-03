<?php
/**
 * Developer: Christopher Diaper
 * Date: 29/06/18 07:59
 */

namespace SchumacherFM\Twig\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;

interface TwigDataInterface extends ArgumentInterface
{
    public function setBlock($block);
    public function setDictionary($dictionary);
    public function getData();
}