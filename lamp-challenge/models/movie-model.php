<?php 
class Movies {
    protected $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function search($q) {
        $sql = 'select * from movies where movie=?';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q, $q));
        if(!$success) {
            trigger_error($stmt_>errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>