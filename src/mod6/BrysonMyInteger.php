<?php

class BrysonMyInteger {
    private $value;

    public function __construct($value) {
        $this->setValue($value);
    }

    public function isEven() {
        return $this->value % 2 === 0;
    }

    public function isOdd() {
        return $this->value % 2 !== 0;
    }

    public function isPrime() {
        if ($this->value < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($this->value); $i++) {
            if ($this->value % $i === 0) {
                return false;
            }
        }
        return true;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }
}


$instance1 = new BrysonMyInteger(7);
$instance2 = new BrysonMyInteger(12);

echo "Instance 1 Value: " . $instance1->getValue() . "\n";
echo "Is Even? " . ($instance1->isEven() ? "Yes" : "No") . "\n";
echo "Is Odd? " . ($instance1->isOdd() ? "Yes" : "No") . "\n";
echo "Is Prime? " . ($instance1->isPrime() ? "Yes" : "No") . "\n\n";

echo "Instance 2 Value: " . $instance2->getValue() . "\n";
echo "Is Even? " . ($instance2->isEven() ? "Yes" : "No") . "\n";
echo "Is Odd? " . ($instance2->isOdd() ? "Yes" : "No") . "\n";
echo "Is Prime? " . ($instance2->isPrime() ? "Yes" : "No") . "\n";


