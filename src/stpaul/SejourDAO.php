<?php

namespace stpaul;

class SejourDAO {
    private $bdd;

    function __construct($db) {
        $this->bdd = $db;
    }

    function getBdd() {
        return $this->bdd;
    }

    public function findAll() {
        $sql = 'select * from sejour order by sejno';
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $result = $req->fetchAll();

        // Convert query result to an array of domain objects
        $sejours = array();
        foreach ($result as $row) {
            $sejourid = $row['SEJNO'];
            $sejours[$sejourid] = $this->buildSejour($row);
        }

        return $sejours;
    }

    private function buildSejour(array $row) {

        $sejour = new Sejour($row['SEJNO'],
                            $row['SEJINTITULE'],
                            $row['SEJMONTANTMBI'],
                            $row['SEJDTEDEB'],
                            $row['SEJDUREE']);

        return $sejour;
    }


}

?>