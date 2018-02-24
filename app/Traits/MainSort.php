<?php

namespace App\Traits;

use App\Traits\SortByPrice;
use App\Traits\SortByName;

trait MainSort
{
      use SortByPrice, SortByName;
      /**
        *   This to sort hotels by price or name in ASC or DESC order
        *   @param Hotels array
        *   @param string for sort by value [price or name]
        *   @param Sort key [ASC or DESC]
        *   @return array of sorted hotels
      **/
      public function sort($hotels, $by, $key)
      {
          # Switch on sorting key one of this[ASC or DESC]
          switch ($by)
          {
            case 'price':
              # if user want to sort hotels by price
              $hotels = $this->sortByPrice($hotels, $key);
              break;
            case 'name':
              # if user want to sort hotels by price
              $hotels = $this->sortByname($hotels, $key);
              break;
            default:
              # if user didn't send any sort by value from above so by defualt sort it by price
              $hotels = $this->sortByPrice($hotels, $key);
              break;
          }

          # Return sorted hotels
          return $hotels;
      }
}
