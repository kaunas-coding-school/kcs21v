<?php declare(strict_types=1);

namespace KCS\Repository;

use \KCS\Entity\Student;

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

    public function save(Student $student): void
    {
        $stmt = $this->conn->prepare(
            'INSERT INTO studentas (vardas, pavarde, asmens_kodas, grupe) VALUES (:vrd, :pvd, :ak, :grp);'
        );
        $stmt->bindParam(':vrd', $student->getFirstName());
        $stmt->bindParam(':pvd', $student->getLastName());
        $stmt->bindParam(':ak', $student->getPersonalCode());
        $stmt->bindParam(':grp', $student->getGroup());
        $stmt->execute();
    }

    public function close()
    {
        $this->conn = null;
    }
}
