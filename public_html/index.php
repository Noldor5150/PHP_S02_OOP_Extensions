<?php

class Girl {

    protected $age;

    public function __construct($age) {
        $this->age = $age;
    }

    public function beSmart() {
        return 'smart';
    }

    public function beBeautiful() {
        return 'beautiful';
    }

}

class Girlfriend extends Girl {

    public function pistiProta() {
        return 'alio jebat';
    }

}

class Wife extends Girlfriend {

    public function pistiProta() {
        return 'gal rytoj?';
    }

}

class HorribleWife extends Girlfriend {

    public function pistiProta() {
        return parent::pistiProta() . ' noretum is kiemo puses?';
    }

}

class Boy {

    public function winArgument() {
        return 'sian tavo diena...';
    }

}

class Boyfriend extends Boy {

    public function winArgument() {
        $array = ['Not this time!', parent::winArgument()];
        return $array[rand(0, 1)];
    }

}

$boba = new HorribleWife(20);
$message_bobos = $boba->pistiProta();
print $message_bobos;

$bicas = new Boyfriend;
$message_bico  = $bicas->winArgument();
print $message_bico;


