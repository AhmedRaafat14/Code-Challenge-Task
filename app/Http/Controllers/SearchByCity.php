<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchByCity extends Controller
{
    /**
      *   This function to search in hotels by user destination city
      *  @param String city
      *  @param Array of hotels
      *  @return array by selectd hotels
    **/
    public function find($hotels, $city)
    {
        # define array of hotels result
        $selected_hotels = [];

        # Iterate over all array and find the hotel which exist in this city
        foreach( $hotels as $hotel )
        {
            # Validate if current hotel city is equal to user destination city
            if ( strtolower($hotel['city']) == strtolower($city) )
            {
                array_push($selected_hotels, $hotel);
            }
        }

        # return selectd hotels
        return $selected_hotels;
    }
}
