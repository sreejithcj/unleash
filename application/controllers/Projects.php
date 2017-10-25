<?php
require_once APPPATH.'controllers/Base_controller.php';

/**
 * Class for Projects feature - Feature not implemented
 */
class Projects extends Base_controller{
    
    public function index()
    {
        $data['title']= 'Projects';
        $this->load_view('projects/projects',$data);
    }
}