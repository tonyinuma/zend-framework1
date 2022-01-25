<?php

class Application_Model_DbTable_Guestbook extends Zend_Db_Table_Abstract
{

    protected $_name = 'guestbook';

    public function findGuestbook($id)
    {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Could not find row $id");
        }
        return $row->toArray();
    }
}

