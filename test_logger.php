<?php

include_once "src/Logger.php";

$logger = new Logger();
$logger->message("begin");

$logger->beginBlock("block1");
$logger->message("msg1");
$logger->message("msg2");

$logger->beginBlock("inheritedBlock1");
$logger->message("inhMsg1");

$logger->beginBlock("inheritedBlock2");
$logger->message("deepMessage");

$logger->endBlock();

$logger->message("inhMsg2");
$logger->endBlock();

$logger->message("msg3");
$logger->endBlock();

$logger->message("end");

print_r($logger->getMessages());
