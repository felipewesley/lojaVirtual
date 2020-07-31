<?php

namespace MiniFramework\Model;

class Model {
    
    /**
     * @property object stdClass Contém métodos de operações referentes ao banco de dados
     */
    protected $db; 

    public function __construct(\PDO $pdo) {
        
        return $this->db = new ModelOperations($pdo); 
    }

}