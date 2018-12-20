<?php

namespace BrokenItZAndrei100;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase {
      public function onEnable(){
      }

      public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) :bool {

            return true;

         }
}

switch($cmd->getName()){
case "titlesdr"
if($player instanceof Player){
      $player->sendMessage("§eTitle §asuccesfully §eexecuted!");
      $player->addTitle("§l§9Edit Msg In Main.php");

       if($player->hasPermission)("use.titlesdr")){
        $player->sendMessage("§eTitle §asuccesfuly §eexecuted!");
        $player->addTitle("§l§9Edit Msg In Main.php");

}
break;
}
 case "fullhearts"
 if($player instanceof Player){
       $player->addTitle("§2Full Hearts!");
       $player->setHealth(20)
}
break;
}
  return true;
     
