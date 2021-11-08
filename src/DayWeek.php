<?php

namespace Rafael\Mova;

use Rafael\Mova\IDayWeek;

/**
 * Classe que implementa função de sortear advinda da interface
 */
final class DayWeek implements IDayWeek
{
   /**
    * Função responsável por relacionar datas a eventos
    *
    * @param array $dates array com dia da semana e data do mês
    * @param array $events array com data do mês e evento
    * @return void
    */
   public function ShowEvents(array $dates, array $events) {
      echo 'teste';
   }
}
