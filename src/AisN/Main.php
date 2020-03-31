<?php

namespace AisN;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

class Main extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		$command = $command->getName ();
		$player = $sender->getPlayer ();
		$name = $sender->getName ();
		$tag = "§b§l[§f시스템§b]§r§7 ";
		if ($command == "야간투시") {
		   $sender->addEffect ( new EffectInstance ( Effect::getEffect ( 16 ), 20 * 9999, 255, false ) );
		   $sender->sendMessage ( $tag .  "야간투시가 지급되었습니다.");
		   return true;
		}
		return true;
	}
}