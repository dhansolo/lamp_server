<?php 
class Movies {
    protected $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
    public function getAllMovies($title) {
        $sql = "select * from movies where title like '%{$title}%'";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($title, $title));
        if(!$success) {
            trigger_error($stmt_>errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
    
    public function getMovieByID($id) {
        $sql = "select * from movies where ID like '{$id}'";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($id));
        if(!$success) {
            trigger_error($stmt_>errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>