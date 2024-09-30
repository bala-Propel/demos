<?php

namespace Src;

use App\Http\Controllers\ChatController;

class SharedInterface
{
    protected $chatController;
    public function __construct(ChatController $chatController)
    {
        $this->chatController = $chatController;
    }
    public function getall()
    {
        return $this->chatController->sendMessage();
    }
}
