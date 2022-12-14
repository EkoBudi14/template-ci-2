<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert-success" role="alert"> <small>Wrong password</small></div>');
                    redirect(('auth'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert-success" role="alert"> <small>Email Not Been Activated</small></div>');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert"> <small>Email is Not registered</small></div>');
        }
    }

    public function registration()


    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Faild to register !, This email has already registered'


        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2] ',
            [
                'matches' => 'password not match!',
                'min_length' => 'Password to Short !'
            ]
        );


        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1] ');
        $data['role'] = $this->db->get('user_role')->result_array();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login dan Register";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [


                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert"> <small>Congatulation your account has been created, Please login !</small></div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert"> <small>You logout</small></div>');
        redirect('auth');
    }


    public function blocked()
    {
        echo "access blocked";
    }
}
