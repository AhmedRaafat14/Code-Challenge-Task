<?php

namespace App\Traits;

use App\Traits\SortByPrice;
use App\Traits\SortByName;

trait ParseHotels
{
      /**
        * This function to parse json from end-point url
        *   then return this parsed data as an array
        *   @param Nothing
        *   @return Array of parsed data
      **/
      public function parse()
      {
          # define URL Endpoint
          $url = 'https://api.myjson.com/bins/tl0bp';

          # parsing this api json response
          // $hotels_json = file_get_contents($url);

          # this to hold hotels array, true param to decode it as an array
          #   ['hotels'] because i want hotels data only so i get it from parsed json
          $hotels = json_decode(file_get_contents($url), true)['hotels'];

          # get hotels array from its object
          // $hotels = $hotels_obj['hotels'];

          # return this hotels array
          return $hotels;
      }
}
