<?php

namespace App\Controllers;

class Index extends Basecontroller{

    public function landing(){
        return view('landing');
    }

    public function about(){
        return view('about');
    }

    public static function customer(){
        $data = array(
            'customers' => [
                'name1' => 'John Doe',
                'age1' => '30',
                'sex1' => 'Male',

                'name2' => 'Jane Doe', 
                'age2' => '40',
                'sex2' => 'Female',

                'name3' => 'John Doe',
                'age3' => '25',
                'sex3' => 'Male',

                'name4' => 'John Doe',
                'age4' => '55',
                'sex4' => 'Male',

                'name5' => 'Jane Doe',
                'age5' => '30',
                'sex5' => 'Female',
            ]

        );

        return view('customers', $data);
    }

        public static function user(){
        $data = array(
            'users' => [
                'name1' => 'John Doe',
                'age1' => '35',
                'sex1' => 'Male',

                'name2' => 'Jane Doe',
                'age2' => '21',
                'sex2' => 'Female',

                'name3' => 'John Doe',
                'age3' => '20',
                'sex3' => 'Male',

                'name4' => 'John Doe',
                'age4' => '30',
                'sex4' => 'Male',

                'name5' => 'Jane Doe',
                'age5'=> '25',
                'sex5' => 'Female',
            ]

        );

        return view('users', $data);
    }
}

?>