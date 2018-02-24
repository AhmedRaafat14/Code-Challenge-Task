<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchByName extends Controller
{
      /**
        *   This function to search in hotels by hotel name
        *  @param String hotel name
        *  @param Array of hotels
        *  @return array by selectd hotels
      **/
      public function find($hotels, $hotel_name)
      {
          # define array of hotels result
          $selected_hotels = [];

          # Iterate over all array and find the hotel which have name
          foreach( $hotels as $hotel )
          {
              # Validate if current hotel name have the chars in hotel_name vaible or not
              # if this chars in hotel name will return true otherwise will return false
              #  if exist so store this hotel as selected one otherwise ignore it.
              if ( strpos( strtolower($hotel['name']), strtolower($hotel_name) ) !== false )
              {
                  array_push($selected_hotels, $hotel);
              }
          }

          # return selectd hotels
          return $selected_hotels;
      }
}
