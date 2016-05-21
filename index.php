<?php
require_once 'cfg/config.php';

$tbot = new TelegramBotApi();
echo $tbot->getUpdates();

?>