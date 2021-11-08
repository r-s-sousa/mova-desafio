<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Rafael\Mova\DayWeek;
use Rafael\Mova\Show;

/**
 * Testes unitários
 */
final class ApplicationTest extends TestCase
{
   /**
    * Verifica se o tipo do retorno é certo
    *
    * @return void
    */
   public function testCanVerifyTypeOfGetEvents(): void
   {
      $obShow = new Show(new DayWeek());

      $this->assertEquals(
         'array',
         gettype($obShow->getEvents())
      );
   }

   /**
    * Verifica se o tipo do retorno é certo
    *
    * @return void
    */
   public function testCanVerifyTypeOfGetDates(): void
   {
      $obShow = new Show(new DayWeek());
      $this->assertEquals(
         'array',
         gettype($obShow->getDates())
      );
   }

   /**
    * Verifica se o valor retornado é iterável, após ser definido
    *
    * @return void
    */
   public function testCanIterableInDates(): void
   {
      $obShow = new Show(new DayWeek());
      $obShow->setDates([1 => 'Segunda-Feira']);
      $this->assertIsIterable($obShow->getDates());
   }

   /**
    * Verifica se o valor retornado é iterável, após ser definido
    *
    * @return void
    */
   public function testCanIterableInEvents(): void
   {
      $obShow = new Show(new DayWeek());
      $obShow->setEvents([1 => "finados"]);
      $this->assertIsIterable($obShow->getEvents());
   }

   /**
    * Verifica se a data retornada é certa
    *
    * @return void
    */
   public function testCanVerifyReturnDate(): void
   {
      $obShow = new Show(new DayWeek());
      $obShow->setDates([1 => "Segunda-Feira"]);

      $this->assertEquals(
         'Segunda-Feira',
         ($obShow->getDates()[1])
      );
   }

   /**
    * Verifica se o evento retornado é certo
    *
    * @return void
    */
   public function testCanVerifyReturnEvent(): void
   {
      $obShow = new Show(new DayWeek());
      $obShow->setEvents([1 => "finados"]);

      $this->assertEquals(
         'finados',
         ($obShow->getEvents()[1])
      );
   }

   /**
    * Verifica se o tamanho de um array é igual ao outro
    *
    * @return void
    */
   public function testCanVerifyLenghtDatesAndEvents(): void
   {
      $obShow = new Show(new DayWeek());
      $obShow->setEvents([1 => "finados"]);
      $obShow->setDates([1 => "Segunda-Feira"]);

      $this->assertEquals(
         count($obShow->getDates()),
         count($obShow->getEvents()),
      );
   }

   /**
    * Verifica se o método foi herdado em DayWeek
    *
    * @return void
    */
   public function testCanVerifyMethodExists(): void
   {
      $obDayWeek = new DayWeek();
      $this -> assertEquals(
         true,
         method_exists($obDayWeek, 'ShowEvents')
      );
   }
   
}
