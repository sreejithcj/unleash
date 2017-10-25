<?php
require_once APPPATH.'controllers/Base_controller.php';

/**
 * Users class
 * Controller class to handle the events of Users feature
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Users extends Base_controller{    
    
    /**
     * Function to retrieve and list all users page wise
     * 
     * @param type $page page index
     */
    public function index($page='1')
    {        
        if( ! $this->session->userdata('logged_in'))
        {
           redirect('users/login');
        }
        $data['title'] = 'Users';            
        try
        {
            $data['count'] = $this->users_model->get_count('Entity\Users');
            $data['users'] = $this->users_model->get_users_list($page, LIMIT);   
            $data['currentpage'] = $page;
            $this->load_view('users/users', $data);
        }catch (Exception $exception)
        {
            error_log($exception->getMessage(), 0);
        }
    }
    
    /**
     * Handles user signup
     */
    public function signup()
    { 
        //$this->output->enable_profiler(TRUE); Enable CI profiler
        
        $data['title'] = 'SIGNUP';    
        
        $this->form_validation->set_rules('employeeId', 'Employee Id', 'required|max_length[12]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|max_length[20]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|max_length[20]');         
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('retypepassword', 'Retype Password', 'matches[password]|min_length[6]|max_length[20]');
         
        try
        {
            if($this->form_validation->run() === FALSE)
            {
                $this->load_view_page('pages/signup', $data);
            }
            else 
            {            
                //$this->benchmark->mark('signup_start');                
                if($this->users_model->signup($_POST) === TRUE)
                {
                    $this->session->set_flashdata('signup_success', 'Account created. Please login ');
                    redirect('users/login');            
                } 
                else 
                {
                    $this->session->set_flashdata('signup_failed', 'Signup failed. Please try again');
                    error_log('Signup failed.');
                    $this->load_view_page('pages/signup', $data);
                }                
            //$this->benchmark->mark('signup_end');                
            }
        }catch(Exception $exception)
        {
            error_log($exception->getMessage(), 0);
        }
    }
    
    /**
     * Handles user login
     */
    public function login()
    {    
        //$this->output->enable_profiler(TRUE); Enable CI profiler
   
        $data['title'] = 'LOGIN';    

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');        

        try
        {
            if($this->form_validation->run() === FALSE)
            {
                $this->load_view_page('pages/login', $data);
            }
            else 
            {
                $users = $this->users_model->login($_POST);
                if($users !== FALSE) 
                {   
                    $user_data = array(
                        'userId'=>$users[0]->userId,
                        'email'=>$users[0]->email,
                        'name'=>$users[0]->firstname . ' ' .$users[0]->lastname,                    
                        'logged_in'=>TRUE);

                    $this->session->set_userdata($user_data);
                    redirect('messages/inbox/1');
                } 
                else 
                {
                    $this->session->set_flashdata('login_failed', 'Login failed. Please try again');
                    error_log('Login failed.');
                    $this->load_view_page('pages/login', $data);   
                }
            }   
        } catch (Exception $exception)
        {
            error_log($exception->getMessage(), 0);
        }
    }
    
    /**
     * Handles user logout
     */
    public function logout()
    {        
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('logged_out', 'User Logged Out');
        redirect('users/login');
    }
    
    /**
     * Checks whether the given email exists in database
     * 
     * @param type $email email to whck if it exists in database
     * @return type       returns TRUE or FALSE
     */
    public function check_email_exists($email)
    {
        try
        {
            $this->form_validation->set_message('check_email_exists', 'That email is taken');
            return $this->users_model->check_email_exists($email);
        }catch (Exception $exception)
        {
            error_log($exception->getMessage(), 0);
        }
    }
}
//End of file Users.php