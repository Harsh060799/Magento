<?php
namespace Embitel\Mymodule\Model;
use Magento\Customer\Model\GroupFactory;

/**
 * @api
 */
class DemoService implements \Embitel\Mymodule\Api\DemoInterface
{

    protected $_group;
    public function __construct(
        GroupFactory $group
    )
    {
        $this->_group=$group;
    }
    /**
     * @return string
     */
    
    public function getProfile()
    {
        return 
        [
            [
            "Firstname" => "Harsh",
            "Lastname" => "Nagvanshi",
            "email" => "harsh1234@gmail.com",
            "telephone" => "123456789",
            "city" => "Bangalore",
            "state" => "Karnataka",
            "country" => "India"
            ],
            [
                "Firstname" => "Gautam",
                "Lastname" => "Bhai",
                "email" => "gautam1234@gmail.com",
                "telephone" => "123456458",
                "city" => "Bangalore",
                "state" => "Karnataka",
                "country" => "India"
            ],
            [
                "Firstname" => "Kushal",
                "Lastname" => "Pathan",
                "email" => "kushal1234@gmail.com",
                "telephone" => "123456765",
                "city" => "KGF",
                "state" => "Karnataka",
                "country" => "India"
            ]
            
        ];
    }
    
    /**
     * Get Info
     * @param string[] $postData
     * @return array
     */
    public function getInfo($postData){
        try{
            $data=[
                'customer_group_code' => $postData['groupName'],
                'tax_class_id' => 3
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();
            return[
                'groupId'=>8,
                'groupName'=>"CodeZe"
            ];
        }
        catch(\Throwable $th){
            $th->getMessage();
        }
    }
}