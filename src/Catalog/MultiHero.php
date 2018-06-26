<?php

namespace Game\Catalog;

class MultiHero extends Hero
{

    /**
     * MultiHero constructor.
     * @param Hero[] $heroes
     * @throws \Exception
     */
    public function __construct(array $heroes)
    {
        if (!is_array($heroes) || count($heroes) > 2) {
            throw new \Exception('MultiHero is a combination of 2 heroes.');
        }

        $name = $heroes[0]->getName() . ' + ' . $heroes[1]->getName();
        $power = $heroes[0]->getPower() + $heroes[1]->getPower();

        parent::__construct($name, $power);
    }

}