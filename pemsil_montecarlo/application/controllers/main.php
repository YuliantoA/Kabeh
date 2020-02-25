<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {  
  public function index()
  {
    $this->load->model('main_models');
    $data['produk'] = $this->main_models->daftar_produk();
    $this->load->view("temp");
    $this->load->view('welcome_message',$data);
    $this->load->view("navbar");
  }
      //functions  
      function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $this->load->view("temp");
           $this->load->view("login");  
      }  
      function register()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $this->load->view("temp");
           $this->load->view("register");  
      }  
      function klasifikasi()  
      {  
           $this->load->view("temp");
           $this->load->view("klasifikasi");  
      }  
      function klarifikasi()  
      {  
           $this->load->view("temp");
           $this->load->view("klasifikasi");  
      }  
      function products()  
      {  
           $this->load->view("temp");  
           $this->load->view("product");  
           $this->load->view("navbar");
      }
      function carts()  
      {  
           $this->load->view("temp");  
           $this->load->view("cart");  
           $this->load->view("navbar");
      }
      function det()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $this->load->view("temp");  
           $this->load->view("detail");  
           $this->load->view("navbar");
      }
      function admin()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $this->load->model('main_models');
           $data['produk'] = $this->main_models->daftar_produk();
           $this->load->view("Admin/temp");  
           $this->load->view("Admin/welcome_message",$data);  
           $this->load->view("Admin/navbar");
      }
      function edit()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $this->load->model('main_models');
           $data['produk'] = $this->main_models->daftar_produk();
           $this->load->view("Admin/temp");  
           $this->load->view("Admin/edit_barang",$data);  
           $this->load->view("Admin/navbar");
      }
      function user()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $this->load->model('main_models');
           $data['user'] = $this->main_models->daftar_user();
           $this->load->view("Admin/temp");  
           $this->load->view("Admin/daftarUser",$data);  
           $this->load->view("Admin/navbar");
      }
      function add_to_cart($id)
      {
           $this->load->model('main_models');
          $produk = $this->main_models->select_by_id($id);
          $nama = $produk->brand.' '.$produk->model;
          $data = array(
                  'id' => $produk->id,
                  'qty' => 1,
                  'price' => $produk->harga,
                  'name' => $nama
          );
          
          $this->cart->insert($data);
          redirect(base_url());
      }
      function reg_member()
      {
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('name', 'Name', 'required');  
           $this->form_validation->set_rules('e-mail', 'E-mail', 'required');  
           $this->form_validation->set_rules('address', 'Address', 'required');  
           $this->form_validation->set_rules('nope', 'Phone Number', 'required');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true 
                $reg_data = array(
                    'name' => $this->input->post('name'), 
                    'e-mail' => $this->input->post('e-mail'),  
                    'address' => $this->input->post('address'),
                    'username' => $this->input->post('username'),  
                    'password' => $this->input->post('password'),
                    'stat'  =>'user'  
                );
                //model function  
                $this->load->model('main_models');  
                $login_data = $this->main_models->tambah_user($reg_data);
                $this->login();
           } 
           else  
           {  
                //false  
                $this->register();  
           }
      }function reg_admin()
      {
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('name', 'Name', 'required');  
           $this->form_validation->set_rules('e-mail', 'E-mail', 'required');  
           $this->form_validation->set_rules('address', 'Address', 'required');  
           $this->form_validation->set_rules('nope', 'Phone Number', 'required');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           $this->form_validation->set_rules('code', 'CODE', 'required');  
           if($this->input->post('code')=='4dm1n')
           {
           if($this->form_validation->run())  
           {  
                //true 
                $reg_data = array(
                    'name' => $this->input->post('name'), 
                    'e-mail' => $this->input->post('e-mail'),  
                    'address' => $this->input->post('address'),
                    'username' => $this->input->post('username'),  
                    'password' => $this->input->post('password'),
                    'stat'  =>'admin' 
                );
                //model function  
                $this->load->model('main_models');  
                $login_data = $this->main_models->tambah_user($reg_data);
                $this->login();
           } 
           else  
           {  
                $this->session->set_flashdata('error', 'CODE INVALID');  
                redirect(site_url() . 'main/register');  
           }}
        else
        {
          $this->register();  
        }
      }
      function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('main_models');  
                $login_data = $this->main_models->can_login($username, $password);
                if($login_data == 1)  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(site_url().'main/admin',$session_data);
                }  
                elseif($login_data == 2)  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(site_url().'main/index',$session_data);
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(site_url() . 'main/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {  
                //echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                redirect(site_url().'main/index',$session_data);
                //echo '<label><a href="'.site_url().'main/logout">Logout</a></label>';  
           }  
           else  
           {  
                redirect(site_url() . 'main/login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(site_url() . 'main/login');  
      }  
 }  