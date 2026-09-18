<?php

namespace App\Controllers;

class Index extends Basecontroller{

    public function landing(){
        return view('landing');
    }

    public function about(){
        return view('about');
    }

    public function customer(){
        $data = array(
            'customers' => [
                ['name' => 'Nathan Cole',
                'age' => '30'],
                
                ['name' => 'Sophia Cruz', 
                'age' => '21'],
                
                ['name' => 'Elijah Torres',
                'age' => '25'],
                
                ['name' => 'Marcus Smith',
                'age' => '55'],
                
                ['name' => 'Isabella Tan',
                'age' => '19']
            ]

        );

        return view('customers', $data);
    }

        public function user(){
        $data = array(
            'users' => [
                ['name' => 'Eliza Williams',
                'age' => '35',
                'role' => 'Employee'],

                ['name' => 'Chloe Santos',
                'age' => '21',
                'role' => 'Employee'],

                ['name' => 'Josh Bautista',
                'age' => '20',
                'role' => 'Employee'],

                ['name' => 'John Cruz',
                'age' => '18',
                'role' => 'Employee'],

                ['name' => 'Mia Reyes',
                'age'=> '23',
                'role' => 'Employee'],
            ]

        );

        return view('users', $data);
    }
}

?>