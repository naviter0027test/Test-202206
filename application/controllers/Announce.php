<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announce extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('modelAnnounce');
    }

    public function index()
    {
        $this->load->view('announce/index');
    }

    public function indexGet()
    {
        $result = [
            'status' => true,
            'm' => '處理成功',
        ];
        try {
            $result['index'] = $this->modelAnnounce->index();
        }
        catch (Exception $e) {
            $result['status'] = false;
            $result['m'] = $e->getMessage();
        }
        echo json_encode($result);
    }

    public function addPage()
    {
        $this->load->view('announce/create');
    }

    public function add()
    {
        $result = [
            'status' => true,
            'm' => '處理成功',
        ];
        try {
            $p = $this->input->post();
            if(isset($p['title']) == false || trim($p['title']) == '')
                throw new Exception('title required');
            if(isset($p['content']) == false || trim($p['content']) == '')
                throw new Exception('content required');
            $this->modelAnnounce->add($p);
        }
        catch (Exception $e) {
            $result['status'] = false;
            $result['m'] = $e->getMessage();
        }
        echo json_encode($result);
    }

    public function modifyPage($id) {
        $result = [
            'id' => $id,
            'status' => true,
            'm' => '處理成功',
        ];
        $this->load->view('announce/modify.php', $result);
    }

    public function modifyGet($id) {
        $result = [
            'status' => true,
            'm' => '處理成功',
        ];
        try {
            $result['d'] = $this->modelAnnounce->get($id);
        }
        catch (Exception $e) {
            $result['status'] = false;
            $result['m'] = $e->getMessage();
        }
        echo json_encode($result);
    }

    public function modify($id) {
        $result = [
            'status' => true,
            'm' => '處理成功',
        ];
        $p = $this->input->post();
        try {
            if(isset($p['title']) == false || trim($p['title']) == '')
                throw new Exception('title required');
            if(isset($p['content']) == false || trim($p['content']) == '')
                throw new Exception('content required');
            $this->modelAnnounce->modify($id, $p);
        }
        catch (Exception $e) {
            $result['status'] = false;
            $result['m'] = $e->getMessage();
        }
        echo json_encode($result);
    }

    public function del($id) {
        $result = [
            'status' => true,
            'm' => '處理成功',
        ];
        try {
            $this->modelAnnounce->del($id);
        }
        catch (Exception $e) {
            $result['status'] = false;
            $result['m'] = $e->getMessage();
        }
        echo json_encode($result);
    }
}
