<?php
class pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function view($page = 'home')
    {
        if (! file_exists('/app/codeigniter/application/views/pages/' . $page . '.php'))
        {
            print("not found");
            show_404();
        }

        $data['title'] = ucfirst($page);  // Capitalize the first letter

        $this->load->view('templates/header', $data);


        $twilio = $this->load_twilio();
        if(empty($twilio['sid']) || empty($twilio['secret']) || empty($twilio['from_num']))
            $this->load->view('pages/credentials', $data );
        else
            $this->load->view('pages/' . $page, $data);

        $this->load->view('templates/footer', $data);
    }

    private function load_twilio() {
        extract($this->config->item('twilio'));
        if((empty($sid) || empty($secret)) && $this->session->userdata('twilio'))
            extract($this->session->userdata('twilio'));
        return array('sid' => $sid, 'secret' => $secret, 'from_num' => $from_num);
    }

}
?>
