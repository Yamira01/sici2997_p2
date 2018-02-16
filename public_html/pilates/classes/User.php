<?php
class User {
    public $id = -1;
    public $username;
    public $password;
    public $email;
    public $SecurityID;// Security ID
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM Tbl_Username WHERE id = ?', [$id]);
        
        if (count($records) == 0) {
            return null;
        }
        // Carga de la base de datos
        $record = $records[0];
        $u = new User();
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        $u->SecurityID=$record['SecurityID'];
        return $u;
    }
    
    public static function loadFromUsername($username) {
        $records = getResultFromSQL('SELECT * FROM Tbl_Username WHERE username = ?', [$username]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        // Carga de la base de datos
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        $u->SecurityID=$record['SecurityID'];

        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `Tbl_Username` (`id`, `username`, `password`, `email`) VALUES (NULL, ?, ?, ?);";
            
            getResultFromSQL($sql, [$this->username, $this->password, $this->email]);
        }
    }
    
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}
?>
