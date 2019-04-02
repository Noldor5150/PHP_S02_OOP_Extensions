<?php

class Girl{
    
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
        return parent::pistiProta() . 'noretum is kiemo puses?';
    }
    
}
    