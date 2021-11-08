<?php

namespace Rafael\Mova;

/**
 * Interface responsável por delegar método de sortear
 */
interface IDayWeek
{
   /**
    * Função responsável por relacionar datas a eventos
    *
    * @param array $dates
    * @param array $events
    * @return void
    */
   public function ShowEvents(array $dates, array $events);
}
