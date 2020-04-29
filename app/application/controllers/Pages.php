<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {
        $page_path = 'pages/'.$page;

        if (! file_exists(APPPATH.'views/'.$page_path.'.php')) {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view($page_path, $data);
        $this->load->view('templates/footer', $data);

    }

}
