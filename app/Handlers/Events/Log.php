<?php

namespace App\Handlers\Events;

use App\Events\AddLogs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Log
{
    public function __construct()
    {
        //
    }

    public function handle(AddLogs $event)
    {
        Adminlog::create([
            'user_id' => $event->user_id,
            'data' => $event->data,
        ]);
    }
}
