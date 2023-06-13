<?php

namespace DTO;

class Entreprise
{
    private int $id_ent;
    private string $lib_ent;
    private string $adr_ent;
    private string $cp_ent;
    private string $vill_ent;
    private string $email_ent;
    private string $tel_ent;
    private string $nom_ent_tut;
    private string $pre_ent_tut;
    private string $email_ent_tut;
    private string $tel_ent_tut;

    /**
     * @param int $id_ent
     * @param string $lib_ent
     * @param string $adr_ent
     * @param string $cp_ent
     * @param string $vill_ent
     * @param string $email_ent
     * @param string $tel_ent
     * @param string $nom_ent_tut
     * @param string $pre_ent_tut
     * @param string $email_ent_tut
     * @param string $tel_ent_tut
     */
    public function __construct($data)
    {
        $this->id_ent = $data["id_ent"];
        $this->lib_ent = $data["lib_ent"];
        $this->adr_ent =$data["adr_ent"];
        $this->cp_ent = $data["cp_ent"];
        $this->vill_ent = $data["vill_ent"];
        $this->email_ent = $data["email_ent"];
        $this->tel_ent = $data["tel_ent"];
        $this->nom_ent_tut = $data["nom_ent_tut"];
        $this->pre_ent_tut = $data["pre_ent_tut"];
        $this->email_ent_tut = $data["email_ent_tut"];
        $this->tel_ent_tut = $data["tel_ent_tut"];
    }

    /**
     * @return int
     */
    public function getIdEnt(): int
    {
        return $this->id_ent;
    }

    /**
     * @param int $id_ent
     */
    public function setIdEnt(int $id_ent): void
    {
        $this->id_ent = $id_ent;
    }

    /**
     * @return string
     */
    public function getLibEnt(): string
    {
        return $this->lib_ent;
    }

    /**
     * @param string $lib_ent
     */
    public function setLibEnt(string $lib_ent): void
    {
        $this->lib_ent = $lib_ent;
    }

    /**
     * @return string
     */
    public function getAdrEnt(): string
    {
        return $this->adr_ent;
    }

    /**
     * @param string $adr_ent
     */
    public function setAdrEnt(string $adr_ent): void
    {
        $this->adr_ent = $adr_ent;
    }

    /**
     * @return string
     */
    public function getCpEnt(): string
    {
        return $this->cp_ent;
    }

    /**
     * @param string $cp_ent
     */
    public function setCpEnt(string $cp_ent): void
    {
        $this->cp_ent = $cp_ent;
    }

    /**
     * @return string
     */
    public function getVillEnt(): string
    {
        return $this->vill_ent;
    }

    /**
     * @param string $vill_ent
     */
    public function setVillEnt(string $vill_ent): void
    {
        $this->vill_ent = $vill_ent;
    }

    /**
     * @return string
     */
    public function getEmailEnt(): string
    {
        return $this->email_ent;
    }

    /**
     * @param string $email_ent
     */
    public function setEmailEnt(string $email_ent): void
    {
        $this->email_ent = $email_ent;
    }

    /**
     * @return string
     */
    public function getTelEnt(): string
    {
        return $this->tel_ent;
    }

    /**
     * @param string $tel_ent
     */
    public function setTelEnt(string $tel_ent): void
    {
        $this->tel_ent = $tel_ent;
    }

    /**
     * @return string
     */
    public function getNomEntTut(): string
    {
        return $this->nom_ent_tut;
    }

    /**
     * @param string $nom_ent_tut
     */
    public function setNomEntTut(string $nom_ent_tut): void
    {
        $this->nom_ent_tut = $nom_ent_tut;
    }

    /**
     * @return string
     */
    public function getPreEntTut(): string
    {
        return $this->pre_ent_tut;
    }

    /**
     * @param string $pre_ent_tut
     */
    public function setPreEntTut(string $pre_ent_tut): void
    {
        $this->pre_ent_tut = $pre_ent_tut;
    }

    /**
     * @return string
     */
    public function getEmailEntTut(): string
    {
        return $this->email_ent_tut;
    }

    /**
     * @param string $email_ent_tut
     */
    public function setEmailEntTut(string $email_ent_tut): void
    {
        $this->email_ent_tut = $email_ent_tut;
    }

    /**
     * @return string
     */
    public function getTelEntTut(): string
    {
        return $this->tel_ent_tut;
    }

    /**
     * @param string $tel_ent_tut
     */
    public function setTelEntTut(string $tel_ent_tut): void
    {
        $this->tel_ent_tut = $tel_ent_tut;
    }
}