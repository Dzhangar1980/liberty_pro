<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AddLogs
{
    use InteractsWithSockets, SerializesModels;
    public $user_id;
    public $data;
    
    public function __construct($user_id, $data)
    {
        $this->data = $data;
        $this->user_id = $user_id;
        
    }

    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
        return [];
    }
}
