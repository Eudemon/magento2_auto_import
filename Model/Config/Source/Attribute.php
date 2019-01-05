<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 12/29/2018
 * Time: 11:54 AM
 */

namespace Randy\Model\Config\Source;


class Attribute implements \Magento\Framework\Option\ArrayInterface
{
    protected $attributeFactory;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Eav\Attribute $attributeFactory
    ){
        $this->attributeFactory = $attributeFactory;
    }

    public function toOptionArray()
    {
        $attributeInfo = $this->_attributeFactory->getCollection();

        $value = [];

        foreach($attributeInfo as $attributes)
        {

        }

        return [

        ];
    }

}