<?php
require_once SYSTEM_PATH."/Model/AdminModel.php";
class AdminController
{
    function ViewAdmin()
    {
        require_once SYSTEM_PATH."/View/Admin/index.php";
    }
}