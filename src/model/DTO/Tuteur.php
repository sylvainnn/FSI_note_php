<?php

namespace DTO;

class Tuteur
{
    private int $id_tut;
    private string $nom_tut;
    private string $pre_tut;
    private string $tel_tut;
    private string $email_tut;
    private string $log_tut;
    private string $mdp_tut;
    private string $id_etu;

    /**
     * @param int $id_tut
     * @param string $nom_tut
     * @param string $pre_tut
     * @param string $tel_tut
     * @param string $email_tut
     * @param string $log_tut
     * @param string $mdp_tut
     * @param string $id_etu
     */

    public function __construct(?array $datas = null)
    {
        if (!is_null($datas)) {
            (isset($datas['id_tut'])) ? $this->setIdTut($datas['id_tut']) : $this->id = 0;
            (isset($datas['nom_tut'])) ? $this->setNomTut($datas['nom_tut']) : $this->setNomTut('');
            (isset($datas['pre_tut'])) ? $this->setPreTut($datas['pre_tut']) : $this->setPreTut('');
            (isset($datas['tel_tut'])) ? $this->setTelTut($datas['tel_tut']) : $this->setTelTut('');
            (isset($datas['email_tut'])) ? $this->setEmailTut($datas['email_tut']) : $this->setEmailTut('');
            (isset($datas['log_tut'])) ? $this->setLogTut($datas['log_tut']) : $this->setLogTut('');
            (isset($datas['mdp_tut'])) ? $this->setMdpTut($datas['mdp_tut']) : $this->setMdpTut('');
        }

    }
    /**
     * @return int
     */
    public function getIdTut(): int
    {
        return $this->id_tut;
    }

    /**
     * @param int $id_tut
     */
    public function setIdTut(int $id_tut): void
    {
        $this->id_tut = $id_tut;
    }

    /**
     * @return string
     */
    public function getNomTut(): string
    {
        return $this->nom_tut;
    }

    /**
     * @param string $nom_tut
     */
    public function setNomTut(string $nom_tut): void
    {
        $this->nom_tut = $nom_tut;
    }

    /**
     * @return string
     */
    public function getPreTut(): string
    {
        return $this->pre_tut;
    }

    /**
     * @param string $pre_tut
     */
    public function setPreTut(string $pre_tut): void
    {
        $this->pre_tut = $pre_tut;
    }

    /**
     * @return string
     */
    public function getTelTut(): string
    {
        return $this->tel_tut;
    }

    /**
     * @param string $tel_tut
     */
    public function setTelTut(string $tel_tut): void
    {
        $this->tel_tut = $tel_tut;
    }

    /**
     * @return string
     */
    public function getEmailTut(): string
    {
        return $this->email_tut;
    }

    /**
     * @param string $email_tut
     */
    public function setEmailTut(string $email_tut): void
    {
        $this->email_tut = $email_tut;
    }

    /**
     * @return string
     */
    public function getLogTut(): string
    {
        return $this->log_tut;
    }

    /**
     * @param string $log_tut
     */
    public function setLogTut(string $log_tut): void
    {
        $this->log_tut = $log_tut;
    }

    /**
     * @return string
     */
    public function getMdpTut(): string
    {
        return $this->mdp_tut;
    }

    /**
     * @param string $mdp_tut
     */
    public function setMdpTut(string $mdp_tut): void
    {
        $this->mdp_tut = $mdp_tut;
    }

    /**
     * @return string
     */
    public function getIdEtu(): string
    {
        return $this->id_etu;
    }

    /**
     * @param string $id_etu
     */
    public function setIdEtu(string $id_etu): void
    {
        $this->id_etu = $id_etu;
    }
}