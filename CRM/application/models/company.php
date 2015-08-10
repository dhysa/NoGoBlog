<?php
class Company extends CI_Model
    {
        function getData()
        {
            $this->load->database();
            $q = $this->db->get("company");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
    
        function sortAsc()
        {
            $this->load->database();
            $this->db->select('*');
            $this->db->from('company');
            $this->db->order_by("company_name","asc");
            $query=$this->db->get();
            return $query->result();
        }
    
        function sortDesc()
        {
            $this->db->select('*');
            $this->db->from('company');
            $this->db->order_by("company_name","desc");
            $query=$this->db->get();
            return $query->result();
        }

         function sortUpdate()
        {
            $this->db->select('*');
            $this->db->from('company');
            $this->db->order_by("company_created","desc");
            $query=$this->db->get();
            return $query->result();
        }
    
        function getSomeData()
        {
            $this->load->database();
            $id = mysql_real_escape_string($this->uri->segment(3));
            $query = $this->db->get_where('company', array('company_id' => $id));
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            return array();
        }

        function get_search() {
          $match = $this->input->post('search');
          $this->db->like('company_name',$match);
          $this->db->or_like('company_address',$match);
          $this->db->or_like('company_CP1',$match);
          $query = $this->db->get('company');
          return $query->result();
        }
    }