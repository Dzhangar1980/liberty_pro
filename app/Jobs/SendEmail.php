<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Job implements SelfHandling, ShouldQueue
{
  use InteractsWithQueue, SerializesModels;


  /**
   * Создание нового экземпляра задачи.
   *
   * @param  User  $user
   * @return void
   */
  public function __construct()
  {
      
  }

  /**
   * Выполнение задачи.
   *
   * @param  Mailer  $mailer
   * @return void
   */
  public function handle(Mailer $mailer)
  {
      
  }
}