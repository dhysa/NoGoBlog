<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->model("company");
    }
    
    function index()
    {
        if($this->session->userdata('id'))
            {
            $data['records'] = $this->company->getData();
            $this->load->view('include/header');
            $this->load->view('customer/customer',$data);
            $this->load->view('include/footer');
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function ascending()
    {
        if($this->session->userdata('id'))
            {
            $data['records'] = $this->company->sortAsc();
            $this->load->view('customer/table', $data);
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function descending()
    {
        if($this->session->userdata('id'))
            {
            $data['records'] = $this->company->sortDesc();
            $this->load->view('customer/table', $data);
            }
        else
        {
            redirect('login', 'refresh');
        }
    }

    function lastUpdated()
    {
        if($this->session->userdata('id'))
            {
            $data['records'] = $this->company->sortUpdate();
            $this->load->view('customer/table', $data);
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function add()
    {
        if($this->session->userdata('id'))
            {
            $this->load->helper("form");
            $this->load->view('include/header');
            $this->load->view('customer/add');
            $this->load->view('include/footer');

            if(isset($_POST['add'])){
                $data = array(
                   'company_name' => $_POST['cName'] ,
                   'company_address' => $_POST['cAddress'] ,
                   'company_phone' => $_POST['cPhone'],
                   'company_email' => $_POST['cEmail'],
                   'company_cp1' => $_POST['cCP1'],
                   'company_cpPhone1' => $_POST['cCPph1'],
                   'company_cpEmail1' => $_POST['cCPe1'],
                   'company_cp2' => $_POST['cCP2'],
                   'company_cpPhone2' => $_POST['cCPph2'],
                   'company_cpEmail2' => $_POST['cCPe2'],
                   'company_cp3' => $_POST['cCP3'],
                   'company_cpPhone3' => $_POST['cCPph3'],
                   'company_cpEmail3' => $_POST['cCPe3'],
                   'company_project' => $_POST['cProject'],
                   'company_status' => $_POST['cStatus'],
                   'company_update' => $_POST['cUpdate']
                );

                $this->db->insert('company', $data);
                redirect(base_url().'customer/');
                }
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
   
    function details()
    {
        if($this->session->userdata('id'))
            {
            $this->load->view('include/header');
            $this->load->model("company");
            $data['records'] = $this->company->getSomeData();
            $this->load->view('customer/details', $data);
            $this->load->view('include/footer');
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function edit()
    {
        if($this->session->userdata('id'))
            {
            $this->load->helper("form");
            $this->load->view('include/header');
            $this->load->model("company");
            $data['records'] = $this->company->getSomeData();
            $this->load->view('customer/edit', $data);
            $this->load->view('include/footer');

            if(isset($_POST['edit'])){
                $data = array(
                   'company_name' => $_POST['cName'] ,
                   'company_address' => $_POST['cAddress'] ,
                   'company_phone' => $_POST['cPhone'],
                   'company_email' => $_POST['cEmail'],
                   'company_cp1' => $_POST['cCP1'],
                   'company_cpPhone1' => $_POST['cCPph1'],
                   'company_cpEmail1' => $_POST['cCPe1'],
                   'company_cp2' => $_POST['cCP2'],
                   'company_cpPhone2' => $_POST['cCPph2'],
                   'company_cpEmail2' => $_POST['cCPe2'],
                   'company_cp3' => $_POST['cCP3'],
                   'company_cpPhone3' => $_POST['cCPph3'],
                   'company_cpEmail3' => $_POST['cCPe3'],
                   'company_project' => $_POST['cProject'],
                   'company_status' => $_POST['cStatus'],
                   'company_update' => $_POST['cUpdate']
                );
                $id = mysql_real_escape_string($this->uri->segment(3));
                $this->db->where('company_id', $id);
                $this->db->update('company', $data);
                redirect(base_url().'customer/details/'.$id);
                }
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function delete()
    {
        if($this->session->userdata('id'))
            {
            $this->load->view('include/header');
            $id = mysql_real_escape_string($this->uri->segment(3));
            $this->db->delete('company', array('company_id' => $id));
            $this->load->view('include/footer');
            redirect(base_url().'customer/');
            }
        else
        {
            redirect('login', 'refresh');
        }
    }

    function search()
    {
        $this->load->helper('form');
        if($this->session->userdata('id'))
            {
            $data['records'] = $this->company->get_search();
            $this->load->view('include/header');
            $this->load->view('customer/customer',$data);
            $this->load->view('include/footer');
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
}
        
/* End of file customer.php */
/* Location: ./application/controllers/customer.php */