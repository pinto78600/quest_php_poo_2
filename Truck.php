<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var integer
     */
    private $storageCapacity = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
    }
    public function getStorageCapacity(): int
    {
        return $this->capacityStorage;
    }
    public function setStorageCapacity(int $storageCapacity): void
    {   
        $this->storageCapacity = $storageCapacity;      
    }
    public function stokage(): string
    {
        if($this->storageCapacity === 1000){
            return 'full';
        }else{
            return 'is fallin';
        }
    }
}