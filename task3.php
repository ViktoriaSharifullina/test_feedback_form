<?php

class EqualValues
{
    private $value = 1;

    public function getValue()
    {
        return $this->value++;
    }
}

$a = new EqualValues();

if ($a->getValue() == 1 && $a->getValue() == 2 && $a->getValue() == 3) {
    echo "Условие верно!";
} else {
    echo "Условие неверно.";
}
