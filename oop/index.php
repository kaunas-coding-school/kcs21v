<?php declare(strict_types=1);

use KCS\Entity\Car;
use KCS\Entity\Student;
use KCS\Repository\StudentasRepo;

require __DIR__ . '/vendor/autoload.php';

function pildytiStudentus(array $studentai): array
{
    $naujaGrupe = [];
    foreach ($studentai as $studentas) {
        $student = new Student();
        $student->setFirstName($studentas['vardas']);
        $student->setLastName($studentas['pavarde']);
        $student->setGroup($studentas['grupe']);
        $student->setPersonCode($studentas['asmens_kodas']);

        $naujaGrupe[] = $student;
    }

    return $naujaGrupe;
}

function spausdintiStudentus(array $naujaGrupe = []){
    if (empty($naujaGrupe)) {
        throw new \Exception('Nėra naujos grupės masyvo');
    }
    foreach ($naujaGrupe as $studentas) {
        echo $studentas . ' a.k.: ' .$studentas->getPersonCode();
    }
}

try {
    $automobilis = new Car();
    $automobilis->spalva = 'raudona';
    $automobilis->greitis = '50km/h';

    echo $automobilis->gautiSpalva() . '< br>';
    $automobilis->vaziuoti();
    $automobilis->vaziuoti();
    echo "<br>Rida: {$automobilis->gautiRida()}";

    $studRepo = new StudentasRepo();
    $studentai = $studRepo->gautiStudentus();

    $naujaGrupe = pildytiStudentus($studentai) ?? [];

    spausdintiStudentus($naujaGrupe);

}catch(\Exception $exception){
    echo 'Oii.. nutiko gyvenimas ir įvyko klaida :P :D';
}
