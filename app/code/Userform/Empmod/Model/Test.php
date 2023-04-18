<?php
namespace Userform\Empmod\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Userform\Empmod\Model\ResourceModel\Test');
    }
}
