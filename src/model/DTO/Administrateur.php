<?php

namespace DTO;

use DAO\Administrateur_DAO;

class Administrateur
{
    private int $id_ad;
    private string $nom_ad;
    private string $pre_ad;
    private string $tel_ad;
    private string $email_ad;
    private string $log_ad;
    private string $mdp_ad;

    /**
     * @param int $id_ad
     * @param string $log_ad
     * @param string $mdp_ad
     */


    public function __construct(?array $datas = null)
    {
        if (!is_null($datas)) {
            (isset($datas['id_ad'])) ? $this->setIdAd($datas['id_ad']) : $this->id = 0;
            (isset($datas['log_ad'])) ? $this->setLogAd($datas['log_ad']) : $this->setLogAd('');
            (isset($datas['mdp_ad'])) ? $this->setMdpAd($datas['mdp_ad']) : $this->setMdpAd('');
            (isset($datas['nom_ad'])) ? $this->setNomAd($datas['nom_ad']) : $this->setNomAd('');
            (isset($datas['pre_ad'])) ? $this->setPreAd($datas['pre_ad']) : $this->setPreAd('');
            (isset($datas['tel_ad'])) ? $this->setTelAd($datas['tel_ad']) : $this->setTelAd('');
            (isset($datas['email_ad'])) ? $this->setEmailAd($datas['email_ad']) : $this->setEmailAd('');
        }

    }

    /**
     * @return int
     */
    public function getIdAd(): int
    {
        return $this->id_ad;
    }

    /**
     * @param int $id_ad
     */
    public function setIdAd(int $id_ad): void
    {
        $this->id_ad = $id_ad;
    }

    /**
     * @return string
     */
    public function getNomAd(): string
    {
        return $this->nom_ad;
    }

    /**
     * @param string $nom_ad
     */
    public function setNomAd(string $nom_ad): void
    {
        $this->nom_ad = $nom_ad;
    }

    /**
     * @return string
     */
        public function getPreAd(): string
    {
        return $this->pre_ad;
    }

    /**
     * @param string $pre_ad
     */
    public function setPreAd(string $pre_ad): void
    {
        $this->pre_ad = $pre_ad;
    }

    /**
     * @return string
     */
    public function getTelAd(): string
    {
        return $this->tel_ad;
    }

    /**
     * @param string $tel_ad
     */
    public function setTelAd(string $tel_ad): void
    {
        $this->tel_ad = $tel_ad;
    }

    /**
     * @return string
     */
    public function getEmailAd(): string
    {
        return $this->email_ad;
    }

    /**
     * @param string $email_ad
     */
    public function setEmailAd(string $email_ad): void
    {
        $this->email_ad = $email_ad;
    }

    /**
     * @return string
     */
    public function getLogAd(): string
    {
        return $this->log_ad;
    }

    /**
     * @param string $log_ad
     */
    public function setLogAd(string $log_ad): void
    {
        $this->log_ad = $log_ad;
    }

    /**
     * @return string
     */
    public function getMdpAd(): string
    {
        return $this->mdp_ad;
    }

    /**
     * @param string $mdp_ad
     */
    public function setMdpAd(string $mdp_ad): void
    {
        $this->mdp_ad = $mdp_ad;
    }

}