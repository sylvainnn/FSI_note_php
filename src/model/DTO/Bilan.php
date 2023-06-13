<?php

namespace DTO;

class Bilan
{

    private int $id_bil;
    private string $dat_bil;
    private float $not_ent_bil;
    private float $not_oral_bil;
    private string $remarque;
    private float $not_dos_bil;
    private int $id_etu;

    /**
     * @param int $id_bil
     * @param string $dat_bil
     * @param float $not_ent_bil
     * @param float $not_oral_bil
     * @param string $remarque
     * @param float $not_dos_bil
     * @param int $id_etu
     */

    public function __construct(?array $datas = null)
    {
        if (!is_null($datas)) {
            (isset($datas['id_bil'])) ? $this->setIdBil($datas['id_bil']) : $this->id_bil = 0;
            (isset($datas['dat_bil'])) ? $this->setDatBil($datas['dat_bil']) : $this->setDatBil('');
            (isset($datas['not_ent_bil'])) ? $this->setNotEntBil($datas['not_ent_bil']) : $this->setNotEntBil(0);
            (isset($datas['not_oral_bil'])) ? $this->setNotOralBil($datas['not_oral_bil']) : $this->setNotOralBil(0);
            (isset($datas['remarque'])) ? $this->setRemarque($datas['remarque']) : $this->setRemarque('');
            (isset($datas['not_dos_bil'])) ? $this->setNotDosBil($datas['not_dos_bil']) : $this->setNotDosBil(0);
            (isset($datas['id_etu'])) ? $this->setIdEtu($datas['id_etu']) : $this->id_etu = 0;
        }

    }

    /**
     * @return int
     */
    public function getIdBil(): int
    {
        return $this->id_bil;
    }

    /**
     * @param int $id_bil
     */
    public function setIdBil(int $id_bil): void
    {
        $this->id_bil = $id_bil;
    }

    /**
     * @return string
     */
    public function getDatBil(): string
    {
        return $this->dat_bil;
    }

    /**
     * @param string $dat_bil
     */
    public function setDatBil(string $dat_bil): void
    {
        $this->dat_bil = $dat_bil;
    }

    /**
     * @return float
     */
    public function getNotEntBil(): float
    {
        return $this->not_ent_bil;
    }

    /**
     * @param float $not_ent_bil
     */
    public function setNotEntBil(float $not_ent_bil): void
    {
        $this->not_ent_bil = $not_ent_bil;
    }

    /**
     * @return float
     */
    public function getNotOralBil(): float
    {
        return $this->not_oral_bil;
    }

    /**
     * @param float $not_oral_bil
     */
    public function setNotOralBil(float $not_oral_bil): void
    {
        $this->not_oral_bil = $not_oral_bil;
    }

    /**
     * @return string
     */
    public function getRemarque(): string
    {
        return $this->Remarque;
    }

    /**
     * @param string $remarque
     */
    public function setRemarque(string $remarque): void
    {
        $this->Remarque = $remarque;
    }

    /**
     * @return float
     */
    public function getNotDosBil(): float
    {
        return $this->not_dos_bil;
    }

    /**
     * @param float $not_dos_bil
     */
    public function setNotDosBil(float $not_dos_bil): void
    {
        $this->not_dos_bil = $not_dos_bil;
    }

    /**
     * @return int
     */
    public function getIdEtu(): int
    {
        return $this->id_etu;
    }

    /**
     * @param int $id_etu
     */
    public function setIdEtu(int $id_etu): void
    {
        $this->id_etu = $id_etu;
    }

    /**
     * @param int $id_bil
     * @param  $dat_bil
     * @param float $not_ent_bil
     * @param float $not_oral_bil
     * @param float $not_dos_bil
     * @param float $not_dos_fin_bil
     * @param float $not_oral_fin_bil
     * @param int $id_etu
     */

}