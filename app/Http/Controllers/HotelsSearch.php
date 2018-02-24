<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
// use App\Http\Controllers\ParseHotels as Parseing;

use App\Traits\MainSort;
use App\Traits\ParseHotels;

use App\Http\Controllers\SearchByName as ByName;
use App\Http\Controllers\SearchByCity as ByCity;
use App\Http\Controllers\SearchByPriceRange as ByPrice;
use App\Http\Controllers\SearchByDateRange as ByDate;



class HotelsSearch extends Controller
{
      use MainSort, ParseHotels;

      private $by_name = 0, $by_city = 0, $by_price = 0, $by_date = 0;
      public function __construct()
      {
          $this->by_name       = new ByName();
          $this->by_city       = new ByCity();
          $this->by_price      = new ByPrice();
          $this->by_date       = new ByDate();
      }

      /**
        * This function to search in hotels by hotel name
        *   @param string hotel name
        *   @return response array of searched hotels
      **/
      public function search($by = '', $key = '', $sort_by = 'price', $sort_key = 'asc')
      {
          # Calling parse method to parse hotels data and convert it to array
          $hotels_array =  $this->parse();

          # Switch over by value which should be one of [name, city, price and date]
          switch ($by)
          {
            case 'name':
              # calling search by name class by hotels array and name to find hotels
              #   then store returned hotels in selected hotels array and return it
              # Here i assumed user entered any chars and validate if this chars exist
              # in any hotel name so it will selected as one user searched for it
              $selected_hotels = $this->by_name->find($hotels_array, $key);
              break;
            case 'city':
              # calling find hotel by destination city method to search in hotels for
              #  any hotel exist in this city and return it, i assumed user select the same exact city
              $selected_hotels = $this->by_city->find($hotels_array, $key);
              break;
            case 'price':
              # calling find hotel by user price range to search for any hotel it's price
              #   exist in user range like this [100 : 200]
              # I assumed range sent without dollar sign just string conactentaed by [:]
              $selected_hotels = $this->by_price->find($hotels_array, $key, $sort_key);
              break;
            case 'date':
              # calling find hotel by user date range to search for any hotel is avalible
              # in date range which inserted by user like this [10-10-2020:15-10-2020]
              # I assumed range sent like this [10-10-2020:15-10-2020] seperated by [:]
              $selected_hotels = $this->by_date->find($hotels_array, $key);
              break;
            default:
              # if no by method and key send will return all hotels as selected ones
              $selected_hotels = $hotels_array;
              break;
          }

          /*
            Here we sort the selected hotels in asc or desc order by name or price
            I  assumed user specify the sort by value which is [price or name] and
            sort in order of [asc or desc], and i assumed user want to sort searched hotels
          */
          return $this->sort($selected_hotels, $sort_by, $sort_key);
      }
}
