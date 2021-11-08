<?php

namespace Rafael\Mova;

/**
 * Classe reponsável por executar a função de mostrar os eventos da semana
 */
class Show extends ShowBase
{
   /**
    * Mostra os eventos da semana
    *
    * @return void
    */
   public function showEventsWeek(): void
   {
      $this->obDayWeek->ShowEvents($this->dates, $this->events);
   }
}
