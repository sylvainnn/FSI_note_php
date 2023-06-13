<?php

namespace DTO;

class Bdd
{
    private \PDO $PDO;

    /**
     * @return \PDO
     */
    public function getPDO(): \PDO
    {
        return $this->PDO;
    }

    /**
     * @param \PDO $PDO
     */
    public function setPDO(\PDO $PDO): void
    {
        $this->PDO = $PDO;
    }

    public function __construct(array $data)
    {
       $bdd = new \PDO("mysql:host={$data["host"]};port={$data["port"]};dbname={$data["dbname"]};charset=UTF8",
            "{$data["username"]}", "{$data["password"]}");

       //// -- DEBUG BDD  -- ////
       /*$dns = "mysql:127.0.0.1;port=8889;dbname=P2023_2SIO_FSI;charset=UTF8";
        //$bd = new \PDO($dns, 'root','root');
        var_dump($bd);*/

        $this->PDO = $bdd;
    }
}