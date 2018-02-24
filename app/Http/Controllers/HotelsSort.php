<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MainSort;
use App\Traits\ParseHotels;

class HotelsSort extends Controller
{
    use MainSort, ParseHotels;

    /**
    *   This function used to sort hotels in asc or desc order on name or price
    *   @param string specify sorting by value name or price
    *   @param string specify sorting in which order asc or desc
    *   @return array of all hotels sorted
    **/
    public function sortBy($by = 'price', $key = 'asc')
    {
        # Calling parse method to parse hotels data and convert it to array
        $hotels_array =  $this->parse();

        # call main sort trait method to make sorting and return sorted array
        return $this->sort($hotels_array, $by, $key);
    }
}
