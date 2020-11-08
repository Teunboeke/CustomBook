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
