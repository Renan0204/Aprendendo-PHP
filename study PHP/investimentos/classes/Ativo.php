<?php 

require_once 'Database.php';

class Ativo {
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function calcularPrecoMedio(){
        
    }


}
?>