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
                ['name' => 'John Doe',
                'age' => '30'],
                
                ['name' => 'Jane Doe', 
                'age' => '21'],
                
                ['name' => 'John Doe',
                'age' => '25'],
                
                ['name' => 'John Doe',
                'age' => '55'],
                
                ['name' => 'Jane Doe',
                'age' => '19']
            ]

        );

        return view('customers', $data);
    }

        public function user(){
        $data = array(
            'users' => [
                ['name' => 'Jane Doe',
                'age' => '35',
                'role' => 'Employee'],

                ['name' => 'Jane Doe',
                'age' => '21',
                'role' => 'Employee'],

                ['name' => 'John Doe',
                'age' => '20',
                'role' => 'Employee'],

                ['name' => 'John Doe',
                'age' => '18',
                'role' => 'Employee'],

                ['name' => 'Jane Doe',
                'age'=> '23',
                'role' => 'Employee'],
            ]

        );

        return view('users', $data);
    }
}

?>