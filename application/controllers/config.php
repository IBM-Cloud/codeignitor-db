<?php
class config extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function view($page = 'twilio')
    {
        if ($page != 'twilio')
            show_404();

        if($page == 'twilio') {
            $this->session->set_userdata(
                array(
                    'twilio' =>
                        array(
                            'sid' => $this->input->post('sid'),
                            'secret' => $this->input->post('secret'),
                            'from_num' => $this->input->post('from_num')
                        )
                )
            );
        }

        header('Location: http://' . $_SERVER['HTTP_HOST']);
        exit;

    }

}
?>
