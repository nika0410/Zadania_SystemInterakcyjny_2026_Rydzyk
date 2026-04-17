<?php

class Ship
{
    protected $name;

    protected $homeport; 


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

     public function setHomeport(string $homeport): void 
    {
        $this->homeport = $homeport;
    }

    public function getHomeport(): string 
    {
        return $this->homeport;      
    }

}