<?php 
class Formule1Repository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function createCat(Formule1 $speed)
    {
        $request = $this->db->prepare('INSERT INTO formule1 (speed) VALUES(:speed)');
        $request->execute([
            ':speed' => $speed->getspeed(),
        ]);
    }
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }
}

?>