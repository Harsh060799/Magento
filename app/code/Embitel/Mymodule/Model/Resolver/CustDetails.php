<?php
namespace Embitel\Mymodule\Model\Resolver;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class CustDetails implements ResolverInterface{
 public function resolve(
    Field $field,
    $context,
    ResolveInfo $info,
    array $value = null,
    array $args = null
 )
 {
    $customer =[
        [
            'firstname' => 'Harsh',
            'lastname' => 'Nagvanshi',
            'email' => 'harshna@gmail.com',
            'mobile' => '123456789',
            'city' => 'Bangalore',
            'State' => 'Karnataka',
            'country' => 'India'

        ],
        [
            'firstname' => 'Harshit',
            'lastname' => 'Singh',
            'email' => 'harshitsigmail.com',
            'mobile' => '1234567578',
            'city' => 'Lucknow',
            'State' => 'Uttar Pradesh',
            'country' => 'India'

        ],
         [
            'firstname' => 'Kushal',
            'lastname' => 'Bhai',
            'email' => 'kusha4@gmail.com',
            'mobile' => '123459876',
            'city' => 'KGF',
            'State' => 'Karnataka',
            'country' => 'India'
         ]
        ];

        return [
            'total_count'=>count($customer),
            'items'=>$customer
        ];
 }
}

