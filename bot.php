<?php

require_once "vendor/autoload.php";
$config = require_once "config/config.php";

$isDevMode = true;
$doctrineConfig = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration([__DIR__."/src"], $isDevMode);

$entityManager = \Doctrine\ORM\EntityManager::create($config['database'], $doctrineConfig);

$posts = $entityManager->getRepository(\Application\Entity\Post::class)->getNotPublishedPosts();

$bot = new \TelegramBot\Api\BotApi($config['bot']['token']);

foreach ($posts as $post) {
    $bot->sendMessage($config['bot']['channel'], $post->getTitle());
}
