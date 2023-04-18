<?php
namespace Userform\Empmod\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Userform\Empmod\Model\Test',
            'Userform\Empmod\Model\ResourceModel\Test'
        );
    }
}
