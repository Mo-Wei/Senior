<?php
class Index extends CI_Controller {

    public function view($page = 'index')
    {
        if ( ! file_exists(APPPATH.'views/index/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);
        $this->load->view('templates/header', $data);
        $this->load->view('index/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}