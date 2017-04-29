<?php
/**
 * Class Car
 */
class Car
{
    /** @var string */
    protected $_model;

    /** @var string */
    protected $_color;

    /** @var int */
    protected $_distance = 0;

    /** @var int */
    protected $_maxSpeed;

    /** @var int */
    protected $_passengers;

    /** @var int */
    protected $_gas = 0;

    /** @var int */
    protected $_tankVolume = 45;

    /** @var bool */
    protected $_engineStatus = false;

    /**
     * Car constructor.
     *
     * @param string $model
     * @param string $color
     * @param int    $maxSpeed
     * @param int    $passengers
     */
    public function __construct($model, $color, $maxSpeed, $passengers)
    {
        $this->_model = $model;
        $this->_color = $color;
        $this->_maxSpeed = $maxSpeed;
        $this->_passengers = $passengers;
    }

    /**
     * @param $distance
     * @param $speed
     */
    public function run($distance, $speed)
    {
        if(!$this->_engineStatus) {
            echo 'First start your engine.' . '<br>';
            return;
        }

        if($distance * (6.8/100) > $this->_tankVolume) {
            echo 'Not enough fuel.' . '<br>';
        }

        if ($speed < $this->_maxSpeed) {
            $this->_distance += $distance;
            $this->_tankVolume -= $distance * (6.8/100);

            echo 'You drove: ' . $distance . '<br>';
            echo 'Remaining Fuel: ' . $this->_tankVolume . '<br>';
        } else {
            echo 'Max speed:' . $this->_maxSpeed . '<br>';
        }
    }

    /**
     * Starts the car engine.
     */
    public function startEngine() {
        if ($this->_tankVolume <= 0) {
            echo 'The tank is empty' . '<br>';
        }
        
        $this->_engineStatus = true;
    }

    /**
     * Stops the car engine.
     */
    public function stopEngine() {
        $this->_engineStatus = false;
    }

    /**
     * Adds gas.
     *
     * @param $l
     */
    public function addGas($l)
    {
        $this->_gas += $l;
    }
}

/**
 * Class Bus
 */
class Bus extends Car
{
    /**
     * @inheritdoc
     */
    protected $_tankVolume = 90;
}


$bus = new Bus('VW', 'white', 120, 9);
$bus->startEngine();
$bus->run(50, 90);
