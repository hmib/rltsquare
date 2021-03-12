<?php

/**
 * @author jamil.hussain@rltsquare.com
 * StickyBar block content block
 */
namespace RLTSquare\StickyBar\Block;

use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Helper\Image;
use Magento\Catalog\Model\Product;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class StickyBar extends Template
{
    /**
    * @var Registry
    */
    protected $_registry;
    
    /**
    * @var Image
    */
    protected $_image;
    
    /**
    * @var ListProduct
    */
    protected $_listBlock;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param Image $image
     * @param ListProduct $listBlock
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        Image $image,
        ListProduct $listBlock,
        array $data = array())
    {
        $this->_registry = $registry;
        $this->_image = $image;
        $this->_listBlock = $listBlock;
        parent::__construct($context, $data);
    }

    /**
     * Get the current opened product object
     *
     * @return Product
     */
    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }

    /**
     * Get the image helper object
     *
     * @return Image
     */
    public function getImageHelper(){
        return $this->_image;
    }

    /**
     * Get the list product block object
     *
     * @return ListProduct
     */
    public function getListBlock(){
        return $this->_listBlock;
    }
}