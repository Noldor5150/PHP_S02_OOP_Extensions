<?php

class Girl{
    
    protected $age;
    
        public function __construct($age) {
        $this->age = $age;
    }

        public function beSmart(){
        return 'smart';
    }
    
    public function beBeautiful(){
        return 'beautiful';
    }
}

class Girlfriend extends Girl{
    
    public function pistiProta(){
        return 'alio jebat';
    }
}

class Wife extends Girlfriend{
        
        public function  pistiProta(){
            return 'gal rytoj?';
        }
    } 

class HorribleWife extends Girlfriend {
    
    public function pistiProta(){
        return parent::pistiProta() . ' noretum is kiemo puses?';
    }
    
}
    
$boba = new HorribleWife(20);
$message = $boba->pistiProta();
print $message;

var_dump($boba);