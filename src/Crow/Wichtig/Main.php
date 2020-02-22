<?php

namespace DCxxx;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player;

class Main extends PluginBase{

    public function onEnable() {
        $this->getLogger()->info("Plugin ist bereit [Paincraft]");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command->getName()){
            case "YouTube":
                $sender->sendMessage("§4Aboniere uns doch auf YT");
                $sender->sendMessage("§6YT : Crow Balde");
                
                return true;

        switch($command->getName()){
            case "Discord":
               $sender->sendMessage("§4Unser Discord Server");
               $sender->sendMessage("§ahttps://discord.gg/fV93frR");

                return true;

        switch($command->getName(){
             case "DC":
              $sender->sendMessage("§4Unser Discord Server");
              $sender->sendMessage("§ahttps://discord.gg/fV93frR");
                            
                return true;
        
        switch($command->getName(){
             case "Premium":
              $sender->sendMessage("§6Premium");
              $sender->sendMessage("§3Sehe was Premium Kann");
              $sender->sendMessage("§4<-------->");
              $sender->sendMessage("§4Kann /Perk");
              $sender->sendMessage("§4Kann /booster");
              $sender->sendMessage("§4Bunt Schreiben");
      
                 return true;

              switch($command->getName(){
             case "Supreme":
              $sender->sendMessage("§dSupreme");
              $sender->sendMessage("§3Sehe was Supreme Kann");
              $sender->sendMessage("§4<-------->");
              $sender->sendMessage("§4Kann /Perk");
              $sender->sendMessage("§4Kann /booster");
              $sender->sendMessage("§4Bunt Schreiben");
              $sender->sendMessage("§4Kann /tag");
              $sender->sendMessage("§4Kann /nacht");
              $sender->sendMessage("§4Kann /fly");
              $sender->sendMessage("§4Kann /nee IN ARBEIT");
              $sender->sendMessage("§4Fragen werden beantwortet");
                   
                return true;
        }
    }

    public function onDisable() {
        $this->getLogger()->info("Plugin Deaktiv [Paincraft]");
    }
}
