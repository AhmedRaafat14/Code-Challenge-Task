<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchByPriceRange extends Controller
{
      /**
        *   This function to search in hotels by user price range [from:to]
        *  @param String price range
        *  @param Array of hotels
        *  @return array by selectd hotels
      **/
      public function find($hotels, $range, $sort_key)
      {
          # split price range by [:] seperator into to vars from and to
          $range_arr = explode(':', $range);
          $from = $range_arr[0];
          $to   = $range_arr[1];
          # define array of hotels result
          $selected_hotels = [];

          # Iterate over all array and find the hotel which exist in this city
          foreach( $hotels as $hotel )
          {
              # Validate if current hotel city is equal to user destination city
              if ( $hotel['price'] >= $from && $hotel['price'] <= $to )
              {
                  array_push($selected_hotels, $hotel);
              }
          }

          # return selectd hotels
          return $selected_hotels;
      }
}
