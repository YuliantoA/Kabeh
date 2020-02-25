 <?php  
 class Main_models extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);
           $query = $this->db->get('users')->row_array(); 
           $stats = $this->db->select('Stat');
             if($query['Stat'] =='admin')
             {   

                return 1;  
             }
             else
             {
                return 2;
             }
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
           }  
           else  
           {  
                return false;       
           }  
      } 
      function daftar_produk()
      {
        return $this->db->get('produk')->result();
      }function daftar_user()
      {
        return $this->db->get('users')->result();
      }
      function tambah_user($data)
      {
        $this->db->insert('users',$data);
      }
      function select_by_id($id)
      {
        $this->db->where('id',$id);
        return $this->db->get('produk')->row();
      }
 }  