<?php
require_once APPPATH.'controllers/Base_controller.php';

/**
 * Pages class
 * Class to load the views for login and signup pages
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Pages extends Base_controller{
    
    /**
     * 
     * @param type $page name of the page to load
     */
    public function view($page = 'home')
    {
        if( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header_pages');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer_pages');            
    }
}