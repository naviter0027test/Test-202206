<?php

class ModelAnnounce extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add($p) {
        $nowDate = date('Y-m-d H:i:s');
        $p['createdDate'] = $nowDate;
        $p['updatedDate'] = $nowDate;
        $this->db->insert('Test202206Announce', $p);
    }

    public function index($params = []) {
        $sql = "select * from Test202206Announce ";
        $sql .= " order by createdDate desc ";
        $result = $this->db->query($sql)->result_object();
        return $result;
    }

    public function get($id) {
        $sql = "select * from Test202206Announce where id = $id ";
        $result = $this->db->query($sql)->row();
        if(isset($result->id) == false) {
            throw new Exception('資料不存在');
        }
        return $result;
    }

    public function modify($id, $p) {
        $sql = "select * from Test202206Announce where id = $id ";
        $result = $this->db->query($sql)->row();
        if(isset($result->id) == false) {
            throw new Exception('資料不存在');
        }

        $p['updatedDate'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        $this->db->update('Test202206Announce', $p);
    }

    public function del($id) {
        $this->db->where('id', $id);
        $this->db->delete('Test202206Announce');
    }
}
