<?php

require_once APPPATH . '/models/Modelbase.php';

class Im_station extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols($this->_table), $this->getCols('um_user'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("um_user", "um_user.uid = {$this->_table}.updator_id", "left");
//        $it->db->join("um_company", "um_company.uid = {$this->_table}.uid", "left");
        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

}
