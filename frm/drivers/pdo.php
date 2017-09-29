<?php
namespace frm\drivers;

abstract class PDO {

    public $table_name = '';
    
    protected $db_host = NULL;
    protected $db_name = NULL;
    protected $db = NULL;
    
    public $config = NULL;
    
    public function __construct()
    {
        $config = require(APP.'config/app.php');
        $this->config = $config;
        $this->db_host = $config['db_host'];
        $this->db_name = $config['db_name'];
        $this->db = new \PDO("mysql:host={$this->db_host};dbname={$this->db_name}", $config['db_user'], $config['db_pass']);
    }
    
    public function find_all()
    {
        $sql = 'SELECT * FROM '.$this->table_name;
        $res = $this->db->query($sql);
        return $res->FETCHALL(\PDO::FETCH_OBJ);
    }
    
    public function find($id)
    {
        $id = $this->db->quote($id);
        $sql = 'SELECT * FROM '.$this->table_name.' WHERE id = '.$id;
        $res = $this->db->query($sql);
        return $res->FETCH(\PDO::FETCH_OBJ);
    }
    
    public function save(array $values, $id = NULL)
    {
        if (empty($id))
        {
            // add
            $keys = implode(',', array_keys($values));
            foreach($values as $key => $value)
            {
                $values[$key] = $this->db->quote($value);
            }
            $sql =  'INSERT INTO '.$this->table_name.' ('.$keys.') VALUES ('.implode(',',$values).')';
            
            return $this->db->exec($sql);
        }
        
        $set = [];
        foreach($values as $key => $value)
        {
            $set[] = $key.' = '.$this->db->quote($value);
        }
        $sql = 'UPDATE '.$this->table_name.' SET '.implode(',',$set).' WHERE id = '.$id;
        
        return $this->db->exec($sql);
    }
    
    public function delete($id)
    {
        $id = $this->db->quote($id);
        $sql     =  'DELETE FROM '.$this->table_name.' WHERE id =  '.$id;
        return $this->db->exec($sql);
    }

}
