<?php
namespace Embitel\Mymodule\Api;
/**
* Interface for managing Demo API
* @api 
*/
interface DemoInterface
{
    /**
    * Get name
    *
    * @return string
    */
    public function getProfile();


    /**
     * Get Info
     * @param string[] $postData
     * @return array
     */
    public function getInfo($postData);
}
