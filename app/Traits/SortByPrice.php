<?php

namespace App\Traits;

trait SortByPrice
{
      /**
        *   This to sort hotels by price in ASC or DESC order
        *   @param Hotels array
        *   @param Sort key [ASC or DESC]
        *   @return array of sorted hotels
      **/
      public function sortByPrice($hotels, $key)
      {
          # Switch on sorting key one of this[ASC or DESC]
          switch ($key)
          {
            case 'asc':
              # if user want to sort hotels in ASC order
              usort($hotels, function ($item1, $item2) {
                return $item1['price'] <=> $item2['price'];
              });
              break;
            case 'desc':
              # if user want to sort hotels in DESC order
              usort($hotels, function ($item1, $item2) {
                  return $item2['price'] <=> $item1['price'];
              });
              break;
            default:
              # if user didn't send any key from above so by defualt sort it in ASC order
              usort($hotels, function ($item1, $item2) {
                return $item1['price'] <=> $item2['price'];
              });
              break;
          }

          # Return sorted hotels
          return $hotels;
      }
}
