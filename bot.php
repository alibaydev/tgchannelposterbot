<?php

/**
Done! Congratulations on your new bot. You will find it at t.me/tgchannelposterbot. You can now add a description, about section and profile picture for your bot, see /help for a list of commands. By the way, when you've finished creating your cool bot, ping our Bot Support if you want a better username for it. Just make sure the bot is fully operational before you do this.

Use this token to access the HTTP API:
466107923:AAF8xJk3sHEzCBEdCAMU1F0J5OKHtUNznF0

For a description of the Bot API, see this page: https://core.telegram.org/bots/api

*/

require_once "vendor/autoload.php";

const BOT_API_TOKEN = '466107923:AAF8xJk3sHEzCBEdCAMU1F0J5OKHtUNznF0';
const CHANNEL = '@chebureg';

$bot = new \TelegramBot\Api\BotApi(BOT_API_TOKEN);

$bot->sendMessage(CHANNEL, 'hello');
