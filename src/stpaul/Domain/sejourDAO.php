<?php

namespace stpaul\Domain;

use Doctrine\DBAL\Connection;
use stpaul\Domain\Sejour;


class SejourDAO {


    /**

     * Database connection

     *

     * @var \Doctrine\DBAL\Connection

     */

    private $db;


    /**

     * Constructor

     *

     * @param \Doctrine\DBAL\Connection The database connection object

     */

    public function __construct(Connection $db) {

        $this->db = $db;

    }


    /**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from sejour";
        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of domain objects
        $sejours = array();
        foreach ($result as $row) {
            $sejourId = $row['SEJNO'];
            $sejours[$sejourId] = $this->buildArticle($row);
        }
        return $sejours;
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */
    private function buildArticle(array $row) {
        $sejour = new Sejour();
        $sejour->setNumero($row['art_id']);
        $sejour->setLibelle($row['art_title']);
        $sejour->setDuree($row['art_content']);
        return $sejour;
    }



}
?>