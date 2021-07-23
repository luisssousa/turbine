<?php

class WindTurbine
{
    const COATING_DAMAGE = 'Coating Damage';
    const LIGHTNING_STRIKE = 'Lightning Strike';

    private $items = 100;
    
    public function __construct(){}

    public function inspectDamage()
    {
        $damage = [];

        for ($i=1; $i<=$this->items; $i++) {

            switch (true) {

                case ($i%3==0 && $i%5==0):
                    $damage[] = self::COATING_DAMAGE . ' and ' . self::LIGHTNING_STRIKE;
                break;

                case ($i%3==0):
                    $damage[] = self::COATING_DAMAGE;
                    break;
                    
                case ($i%5==0):
                    $damage[] = self::LIGHTNING_STRIKE;
                    break;

                default:
                    $damage[] = $i;
            }
        }

        return json_encode(['target' => 'damage-wrapper', 'data' => $damage]);
    } 
}