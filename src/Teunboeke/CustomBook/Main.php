<?php

declare(strict_types=1);

namespace Teunboeke\Custombook;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\Config;
use pocketmine\Item\Item;
use pocketmine\Item\ItemFactory;
use pocketmine\Item\ItemIds;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener
  
  
  
  	public function onEnable() : void{  
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
  
  		@mkdir($this->getDataFolder());
  
  		$this->saveResource("lang.yml");
  		$this->lang = new Config($this->getDataFolder() . "lang.yml", Config::YAML);
 
  		$this->saveResource("books.yml");
  		$this->books = new Config($this->getDataFolder() . "books.yml", Config::YAML);
