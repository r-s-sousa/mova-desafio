<?php

namespace Rafael\Mova;

use Rafael\Mova\DayWeek;

/**
 * Classe reponsável por executar a função de mostrar os eventos da semana
 */
class Show
{
   /**
    * Propriedade com objeto do tipo DayWeek
    *
    * @var DayWeek
    */
   private $obDayWeek;

   /**
    * Propriedade com datas e dias da semana
    *
    * @var array
    */
   private $dates;

   /**
    * Propriedade com eventos por datas
    *
    * @var array
    */
   private $events;

   /**
    * Construtor da classe Show
    *
    * @param DayWeek $obDayWeek
    */
   public function __construct(DayWeek $obDayWeek)
   {
      $this->obDayWeek = $obDayWeek;
      $this->dates = [];
      $this->events = [];
   }

   /**
    * Define o valor da propriedade 'obDayWeek'
    *
    * @param DayWeek $obDayWeek
    * @return void
    */
   public function setObDayWeek(DayWeek $obDayWeek): void
   {
      $this->obDayWeek = $obDayWeek;
   }

   /**
    * Retorna o valor da propriedade 'obDayWeek'
    *
    * @return DayWeek
    */
   public function getObDayWeek(): DayWeek
   {
      return $this->obDayWeek;
   }

   /**
    * Define o valor da propriedade 'dates'
    *
    * @param array $dates
    * @return void
    */
   public function setDates(array $dates): void
   {
      $this->dates = $dates;
   }

   /**
    * Retorna o valor da propriedade 'dates'
    *
    * @return array
    */
   public function getDates(): array
   {
      return $this->dates;
   }

   /**
    * Define o valor da propriedade 'events'
    *
    * @param array $events
    * @return void
    */
   public function setEvents(array $events): void
   {
      $this->events = $events;
   }

   /**
    * Retorna o valor da propriedade 'events'
    *
    * @return array
    */
   public function getEvents(): array
   {
      return $this->events;
   }

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
