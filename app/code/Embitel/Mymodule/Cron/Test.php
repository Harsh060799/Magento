<?php
namespace Embitel\Mymodule\Cron;

class Test {
    public function execute()
    {
        $current_date = date('YMd_his');
        $file_name = 'customer'.$current_date.'.csv';

        $header_info = array(
            'Firstname',
            'Lastname',
            'Email',
            'Mobile'
        );
     $header_info = array_combine($header_info,$header_info);
     $data = [];

     $data[] = $header_info;

     $data[] = [
        'Firstname' => 'Harsh',
        'Lastname' => 'Nagvanshi',
        'Email' => 'harshnagvanshi1234@gmail.com',
        'Mobile' => '1234567890'
     ];

     $data[] = [
        'Firstname' => 'Harsh',
        'Lastname' => 'Nagvanshi',
        'Email' => 'harshnagvanshi1234@gmail.com',
        'Mobile' => '1234567890'
     ];

     $fp = fopen('/var/www/html/magento3/var/export/'.$file_name, 'w');
     foreach ($data as $fields)
     {
        fputcsv($fp,$fields);
     }

    }
}