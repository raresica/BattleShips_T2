<?php
class Ship
{
    private $name;

    public function sayHello()
    {
        echo 'Hello!';
    }

    private $weaponPower = 0;

    private $jediFactor = 0;

    private $strenght = 0;

    private $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function isFunctional(){
        return !$this->underRepair;
    }

    public function getName()
    {

        return strtoupper($this->name);
    }

    /**
     * @param $useShortFormat
     * @return string
     */
    public function getNameAndSpecs($useShortFormat =false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strenght
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strenght
            );
        }
    }

    public function doesGivenShipHaveMoreStrenght($givenShip)
    {
        return $givenShip->strenght > $this->strenght;
    }

    public function setStrenght($strenght)
    {
        if(!is_numeric($strenght)){
            throw new Exception('Invalid strenght');
        }
        $this->strenght = $strenght;
    }

    public function getStrenght()
    {
        return $this->strenght;
    }

    /**
     * @return int
     */
    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}