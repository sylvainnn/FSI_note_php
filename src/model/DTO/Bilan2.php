<?php

namespace DTO;

class Bilan2
{
    private int $id_bil;
    private string $dat_bil;
    private float $Not_bil;
    private float $Not_oral_bil;
    private string $Remarque;
    private int $id_etu;

    /**
     * @param int $id_bil
     * @param string $dat_bil
     * @param float $Not_bil
     * @param float $Not_oral_bil
     * @param string $Remarque
     * @param int $id_etu
     */

    public function __construct(?array $datas = null)
    {
        if (!is_null($datas)) {
            (isset($datas['id_bil'])) ? $this->setIdBil($datas['id_bil']) : $this->id_bil = 0;
            (isset($datas['Dat_bil'])) ? $this->setDatBil($datas['Dat_bil']) : $this->setDatBil('');
            (isset($datas['Not_bil'])) ? $this->setNotBil($datas['Not_bil']) : $this->setNotBil(0);
            (isset($datas['Not_oral_bil'])) ? $this->setNotOralBil($datas['Not_oral_bil']) : $this->setNotOralBil(0);
            (isset($datas['Remarque'])) ? $this->setRemarque($datas['Remarque']) : $this->setRemarque('');
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
    public function getNotBil(): float
    {
        return $this->Not_bil;
    }

    /**
     * @param float $Not_bil
     */
    public function setNotBil(float $Not_bil): void
    {
        $this->Not_bil = $Not_bil;
    }

    /**
     * @return float
     */
    public function getNotOralBil(): float
    {
        return $this->Not_oral_bil;
    }

    /**
     * @param float $Not_oral_bil
     */
    public function setNotOralBil(float $Not_oral_bil): void
    {
        $this->Not_oral_bil = $Not_oral_bil;
    }

    /**
     * @return string
     */
    public function getRemarque(): string
    {
        return $this->Remarque;
    }

    /**
     * @param string $Remarque
     */
    public function setRemarque(string $Remarque): void
    {
        $this->Remarque = $Remarque;
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


}