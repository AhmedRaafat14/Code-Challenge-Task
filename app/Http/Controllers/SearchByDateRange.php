<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchByDateRange extends Controller
{
      /**
        *   This function to search in hotels by user date range [from:to]
        *  @param String date range
        *  @param Array of hotels
        *  @return array by selectd hotels
      **/
      public function find($hotels, $range)
      {
          # split date range by [:] seperator into to vars from and to
          $range_arr = explode(':', $range);
          $from = \Carbon::parse($range_arr[0]);
          $to   = \Carbon::parse($range_arr[1]);
          # define array of hotels result
          $selected_hotels = [];

          # Iterate over all array and find the hotel which exist in this city
          foreach( $hotels as $hotel )
          {
              # iterate over avalibleity array for each hotel
              foreach( $hotel['availability'] as $available )
              {
                  # Check if sent date exist in any date range so select this hotel as selected one
                  # date1->gte(date2)  ===> check if date one is greater than or equal to date2
                  # date1->lte(date2)  ===> check if date one is less than or equal to date2
                  if( $from->gte(\Carbon::parse($available['from'])) && $to->lte(\Carbon::parse($available['to'])) )
                  {
                      array_push($selected_hotels, $hotel);
                  }
              }
          }

          # return selectd hotels
          return $selected_hotels;
      }
}
