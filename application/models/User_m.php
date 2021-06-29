<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

        public function login($post){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('username', $post['username']);
            $this->db->where('password', sha1($post['password']));
            $query = $this->db->get();

            return $query;
        }
        
        public function get($id=null){
            $this->db->from('user');

            //ada parameter (single get)
            if ($id != null) {
                $this->db->where('user_id', $id);
            }
            $query = $this->db->get();
            return $query;
            
        }

        public function add ($post){
            $params = array(
                'username' => $post['username'], 
                'name' => $post['fullname'], 
                'password' => sha1($post['password']), 
                'address' => $post['address'], 
                'level' => sha1($post['level'])
            );

            $this->db->insert('user', $params);
        }


        public function del ($id){
            $this->db->where('user_id', $id);
            $this->db->delete('user');
        }

        public function edit ($post){
            $params = array(
                'username' => $post['username'], 
                'name' => $post['fullname'],
                'address' => $post['address'], 
                'level' => $post['level']
            );

            if (!empty($post['password'])) {
                $params['password'] = sha1($post['password']);
            }

            $this->db->where('user_id', $post['user_id']);
            $this->db->update('user', $params);
            
            
        }

}

/* End of file User_m.php */
