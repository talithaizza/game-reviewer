<?php

    class Game_model extends CI_Model{
 

        public function getGame($id = null){
            if($id === null){
                return $this->db->get('data')->result_array();
            }else{
                return $this->db->get_where('data',['id' => $id])->result_array(); 
            }
        }
        
        public function deleteGame($id){
            $this->db->delete('data', ['id' => $id]);
            return $this->db->affected_rows();
        }

        public function createGame($data){
            $this->db->insert('data', $data);
            return $this->db->affected_rows();
        }

        public function updateGame($data, $id){
            $this->db->update('data', $data, ['id' => $id]);
            return $this->db->affected_rows();
        }
    }

?>