<?php  
class admin {  ///////////////////////////////Esta clase fue creada para poder tener un registro sobre los videos
    public $ID_Videos = -1;
    public $Nombre_video;
    public $Enfoque_de_ejercicio;
    public $Nivel;
    public $link;
    
    public static function loadFromID_Videos($ID_Videos) {       
        $records = getResultFromSQL('SELECT * FROM Tbl_Videos WHERE ID_Videos = ?', [$ID_Videos]); // Con estos se esta llamando la base de datos
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new admin();
        
        $u->ID_Videos = $record['ID_Videos'];
        $u->Nombre_video = $record['Nombre_video'];
        $u->Enfoque_de_ejercicio = $record['Enfoque_de_ejercicio'];
        $u->Nivel = $record['Nivel'];
        $u->link = $record['link'];
        return $u;
    }
    
    public static function loadFromNombre_video($Nombre_video) {
        $records = getResultFromSQL('SELECT * FROM Tbl_Videos WHERE Nombre_video = ?', [$Nombre_video]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new admin();
        
        $u->ID_Videos = $record['ID_Videos'];
        $u->Nombre_video = $record['Nombre_video'];
        $u->Enfoque_de_ejercicio = $record['Enfoque_de_ejercicio'];
        $u->Nivel = $record['Nivel'];
        $u->link = $record['link'];
        return $u;
    }
    //*********************************************************************************************** Ya esta editado
    
    public static function loadFromEnfoque_de_ejercicio($Enfoque_de_ejercicio) {       
        $records = getResultFromSQL('SELECT * FROM Tbl_Videos WHERE Enfoque_de_ejercicio = ?', [$Enfoque_de_ejercicio]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new admin();
        
        $u->ID_Videos = $record['ID_Videos'];
        $u->Nombre_video = $record['Nombre_video'];
        $u->Enfoque_de_ejercicio = $record['Enfoque_de_ejercicio'];
        $u->Nivel = $record['Nivel'];
        $u->link = $record['link'];
        return $u;
    }
    
    public static function loadFromNivel($Nivel) {
        $records = getResultFromSQL('SELECT * FROM Tbl_Videos WHERE Nivel = ?', [$Nivel]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new admin();
        
        $u->ID_Videos = $record['ID_Videos'];
        $u->Nombre_video = $record['Nombre_video'];
        $u->Enfoque_de_ejercicio = $record['Enfoque_de_ejercicio'];
        $u->Nivel = $record['Nivel'];
        $u->link = $record['link'];
        return $u;
    } 
    
    public static function loadFromlink($link) {
        $records = getResultFromSQL('SELECT * FROM Tbl_Videos WHERE link = ?', [$link]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new admin();
        
        $u->ID_Videos = $record['ID_Videos'];
        $u->Nombre_video = $record['Nombre_video'];
        $u->ENfoque_de_ejercicio = $record['Enfoque_de_ejercicio'];
        $u->Nivel = $record['Nivel'];
        $u->link = $record['link'];
        return $u;
    }
    //********************************************************************* Ya esta editado
     public function save() {
        if ($this->ID_Videos == -1) {
            $sql = "INSERT INTO `Tbl_Videos` (`ID_Videos`, `Nombre_video`, `Enfoque_de_ejercicio`, `Nivel`, `link`) VALUES (NULL, ?, ?, ?,?);";
            
            getResultFromSQL($sql, [$this->Nombre_video, $this->Enfoque_de_ejercicio, $this->Nivel,$this->link]);
        }
    }// Esta es la funcion para poder guardar en la Tbl_Videos
    
}
?>