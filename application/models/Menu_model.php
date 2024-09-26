<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function getSubMenu()
    {
        $query = "SELECT `a`.*, `b`.`menu`
                    FROM `sub_menu` `a` , `menu` `b`
                   WHERE `a`.`menuid` = `b`.`idx`";

        return $this->db->query($query)->result_array();
    }
}
