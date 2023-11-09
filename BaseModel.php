<?php
require_once "Db.class.php";
class BaseModel extends BaseController
{
    public $db;

    function __construct()
    {
        parent::__construct();
        $this->db = new MysqliDb("localhost", "root", "root", "wofarm");
    }

}