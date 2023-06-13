<?php

namespace DTO;

class Etudiant
{
    private int $id_etu;
    private int $id_tut;
    private string $nom_etu;
    private string $pre_etu;
    private string $tel_etu;
    private string $mail_etu;
    private string $spe_etu;
    private string $classe_etu;
    private string $autres_etu;
    private string $log_etu;
    private string $mdp_etu;
    private int $id_ent;



    public function __construct(?array $datas = null)
    {
        if (!is_null($datas)) {
            (isset($datas['id_etu'])) ? $this->setIdEtu($datas['id_etu']) : $this->id = 0;
            (isset($datas['nom_etu'])) ? $this->setNomEtu($datas['nom_etu']) : $this->setNomEtu('');
            (isset($datas['pre_etu'])) ? $this->setPreEtu($datas['pre_etu']) : $this->setPreEtu('');
            (isset($datas['tel_etu'])) ? $this->setTelEtu($datas['tel_etu']) : $this->setTelEtu('');
            (isset($datas['mail_etu'])) ? $this->setMailEtu($datas['mail_etu']) : $this->setMailEtu('');
            (isset($datas['spe_etu'])) ? $this->setSpeEtu($datas['spe_etu']) : $this->setSpeEtu('');
            (isset($datas['classe_etu'])) ? $this->setClasseEtu($datas['classe_etu']) : $this->setClasseEtu('');
            (isset($datas['autres_etu'])) ? $this->setAutresEtu($datas['autres_etu']) : $this->setAutresEtu('');
            (isset($datas['log_etu'])) ? $this->setLogEtu($datas['log_etu']) : $this->setLogEtu('');
            (isset($datas['mdp_etu'])) ? $this->setMdpEtu($datas['mdp_etu']) : $this->setMdpEtu('');
            (isset($datas['id_tut'])) ? $this->setIdTut($datas['id_tut']) : $this->id = 0;
            (isset($datas['id_ent'])) ? $this->setIdEnt($datas['id_ent']) : $this->id = 0;
        }

    }

    /**
     * @return int|string
     */
    public function getIdTut(): string
    {
        return $this->id_tut;
    }

    /**
     * @param int|string $id_tut
     */
    public function setIdTut(string $id_tut): void
    {
        $this->id_tut = $id_tut;
    }

    /**
     * @return int|string
     */

    public function getIdEtu(): int
    {
        return $this->id_etu;
    }

    /**
     * @param int|string $id_etu
     */
    public function setIdEtu(int $id_etu): void
    {
        $this->id_etu = $id_etu;
    }

    /**
     * @return string|string
     */
    public function getNomEtu(): string
    {
        return $this->nom_etu;
    }

    /**
     * @param string|string $nom_etu
     */
    public function setNomEtu(string $nom_etu): void
    {
        $this->nom_etu = $nom_etu;
    }

    /**
     * @return string|string
     */
    public function getPreEtu(): string
    {
        return $this->pre_etu;
    }

    /**
     * @param string|string $pre_etu
     */
    public function setPreEtu(string $pre_etu): void
    {
        $this->pre_etu = $pre_etu;
    }

    /**
     * @return string|string
     */
    public function getTelEtu(): string
    {
        return $this->tel_etu;
    }

    /**
     * @param string|string $tel_etu
     */
    public function setTelEtu(string $tel_etu): void
    {
        $this->tel_etu = $tel_etu;
    }

    /**
     * @return string|string
     */
    public function getMailEtu(): string
    {
        return $this->mail_etu;
    }

    /**
     * @param string|string $mail_etu
     */
    public function setMailEtu(string $mail_etu): void
    {
        $this->mail_etu = $mail_etu;
    }

    /**
     * @return string|string
     */
    public function getSpeEtu(): string
    {
        return $this->spe_etu;
    }

    /**
     * @param string|string $spe_etu
     */
    public function setSpeEtu(string $spe_etu): void
    {
        $this->spe_etu = $spe_etu;
    }

    /**
     * @return string|string
     */
    public function getClasseEtu(): string
    {
        return $this->classe_etu;
    }

    /**
     * @param string|string $classe_etu
     */
    public function setClasseEtu(string $classe_etu): void
    {
        $this->classe_etu = $classe_etu;
    }

    /**
     * @return string|string
     */
    public function getAutresEtu(): string
    {
        return $this->autres_etu;
    }

    /**
     * @param string|string $autres_etu
     */
    public function setAutresEtu(string $autres_etu): void
    {
        $this->autres_etu = $autres_etu;
    }

    /**
     * @return string|string
     */
    public function getLogEtu(): string
    {
        return $this->log_etu;
    }

    /**
     * @param string|string $log_etu
     */
    public function setLogEtu(string $log_etu): void
    {
        $this->log_etu = $log_etu;
    }

    /**
     * @return string|string
     */
    public function getMdpEtu(): string
    {
        return $this->mdp_etu;
    }

    /**
     * @param string|string $mdp_etu
     */
    public function setMdpEtu(string $mdp_etu): void
    {
        $this->mdp_etu = $mdp_etu;
    }

    /**
     * @return int|string
     */
    public function getIdEnt(): string
    {
        return $this->id_ent;
    }

    /**
     * @param int|string $id_ent
     */
    public function setIdEnt(string $id_ent): void
    {
        $this->id_ent = $id_ent;
    }
}
