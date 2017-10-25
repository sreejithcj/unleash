<?php
require_once APPPATH.'controllers/Base_controller.php';

/**
 * Class for Ideas feature - Feature not implemented
 */
class Ideas extends Base_controller{    
    public function index()
    {
        $data['title'] = 'Ideas';
        $this->load_view('ideas/ideas',$data);
    }
}