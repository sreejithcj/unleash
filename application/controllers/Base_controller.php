<?php

/**
 * Base Controller class
 * 
 * Base class for all controllers
 * Derived from Code Igniter controller class CI_Controller
 *
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Base_controller extends CI_Controller{
    
    /**
     * Function to load views for all inner pages of application
     * 
     * @param type $view Name of the view to be loaded
     * @param type $data Input data to the view
     */
    
    public function load_view($view,$data = NULL)
    {
        $this->load->view('templates/header');
        $this->load->view($view, $data);
        $this->load->view('templates/footer');    
    }
    
    /**
     * Function to load views for all outer pages of application like logiin, signup
     * 
     * @param type $view Name of the view to be loaded
     * @param type $data Input data to the view
     */
    
    public function load_view_page($view,$data = NULL)
    {
       $this->load->view('templates/header_pages');
       $this->load->view($view, $data);
       $this->load->view('templates/footer_pages');    
    }
}
//End of file Base_controller.php