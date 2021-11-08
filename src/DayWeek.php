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
   public function ShowEvents(array $dates, array $events)
   {
      foreach ($dates as $date => $day) {
         echo $this->GetMessageDay($date, $day, $events[$date]);
         echo "<br>";
      }
   }

   /**
    * Função responsável por retornar o texto da mensagem de acorco com a 
    * observação do referido dia
    *
    * @param integer $dayNum
    * @param integer $dayName
    * @param string $obs
    * @return void
    */
   private function GetMessageDay(int $dayNum, string $dayName, string $obs): string
   {
      $dayNum == 1 ? $dayNum = "1º" : $dayNum;
      $msnStart = "Hoje é dia {$dayNum}, $dayName";

      if(strlen($obs) == 0)
         return $msnStart;

      return $msnStart." e também é dia {$obs}";
   }
}
