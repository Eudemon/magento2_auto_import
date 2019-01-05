<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 12/29/2018
 * Time: 11:34 AM
 */

namespace Randy\Model\Config\Source;


class Mode implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'create',  'label' => __('Create and Update')],
            ['value' => 'update', 'label' => __('Update')]
        ];
    }

}