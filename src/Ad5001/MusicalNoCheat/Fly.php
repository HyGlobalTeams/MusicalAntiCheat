<?php


namespace Ad5001\MusicalNoCheat;



use pocketmine\Server;


use pocketmine\Player;



use Ad5001\MusicalNoCheat\Main;







class Dummy {




   public function __construct(Main $main) {


        $this->main = $main;


        $this->server = $main->getServer()


    }




}