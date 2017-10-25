<?php

class Users_model_test extends TestCase
{
    public function setUp()
    {
        $this->obj = $this->newModel('Users_model');
    }
    
    public function ntest_signup(){
        
        $expected = true;
        $post = array('employeeId'=>'1000',
                        'firstname'=>'1000',
                        'lastname'=>'1000',
                        'email'=>'1000@orchid.com',
                        'password'=>'111111',
                        'retypepassword'=>'111111'                        
                     );
        $ret = $this->obj->signup($post);
        $this->assertEquals($expected, $ret);
    }
    
    public function ntest_login(){
        $expected = 's@orchid.com';
        $post = array(
                        'email'=>'s@orchid.com',
                        'password'=>'8888'
                     );
        $users = $this->obj->login($post);
        $this->assertEquals($expected, $users[0]->email);        
    }
    
    public function ntest_check_email_exists(){
        $expected = true;
        $email = 's@orcshid.com';
        $ret = $this->obj->check_email_exists($email);
        $this->assertEquals($expected, $ret);         
    }
    
     public function ntest_get_users_list(){
     
        $expected = 5;
        $ret = $this->obj->get_users_list(1,5);
        $this->assertEquals($expected, count($ret));  
        
     }
}