<?php 
class Movies {
    protected $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function getAllMovies() {
        $sql = 'select * from movies';
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array());
        if(!$success) {
            trigger_error($stmt_>errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>