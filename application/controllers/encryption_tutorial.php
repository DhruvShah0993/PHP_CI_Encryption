<?php

class Encryption_Tutorial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load form helper
        $this->load->helper('form');
        // Load encryption library
        $this->load->library('encryption');
        // Load form validation library
        $this->load->library('form_validation');
    }
    // Show form
    public function index()
    {
        $this->load->view('show_form');
    }
    // Encode message
    public function key_encoder()
    {
        // Check for Validation
        $this->form_validation->set_rules('key', 'Message', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('show_form');
        }
        else
        {
            $key = $this->input->post('key');
            // Encoding message
            $data['encrypt_value'] = $this->encryption->encrypt($key);
            $this->load->view('show_form', $data);
        }
    }
    // Decode encrypted message
    public function key_decoder()
    {
        $encrypt_key = $this->input->post('encrypt_key');
        // Decode message
        $data['decrypt_value'] = $this->encryption->decrypt($encrypt_key);
        $this->load->view('show_form', $data);
    }
}

?>