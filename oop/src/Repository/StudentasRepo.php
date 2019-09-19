<?php declare(strict_types=1);

namespace KCS\Repository;

class StudentasRepo
{
    private $conn;

    /**
     * StudentasRepo constructor.
     */
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "mano_db";

        try {
            $this->conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function gautiStudentus(): array
    {
        $stmt = $this->conn->prepare('SELECT * FROM studentas');
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        $studentai = $stmt->fetchAll();

        return $studentai;
    }
}
