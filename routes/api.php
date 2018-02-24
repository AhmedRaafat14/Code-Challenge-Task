<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('hotels', 'HotelsSearch@search');

/*
  This route to search in hotels by [name, city, price and date] and also sort the selected
  hotels in asc or desc order on specfic hotel key which is name or price
  * For name :
    I assumed user entered any chars and validate if this chars exist
      in any hotel name so it will selected as one user searched for it
  * For City:
    I assumed user select the same exact city
  * For Price Range:
    I assumed range sent without dollar sign just string conactentaed by [:] like [100:200]
  * For Date Range:
    I assumed range sent like this [10-10-2020:15-10-2020] seperated by [:]

  * For sorting:
    I  assumed user specify the sort by value which is [price or name] and
      sort in order of [asc or desc], and i assumed user want to sort searched hotels
*/
Route::get('hotels/search/{by?}/{key?}/{sort_by?}/{sort_key?}', 'HotelsSearch@search');

/*
    What if user just want to sort hotels in asc or desc order by name or price
    without applay any search methods.

  **  I  assumed user specify the sort by value which is [price or name] and
      sort in order of [asc or desc], and i assumed user want to sort searched hotels
*/
Route::get('hotels/sort/{by?}/{key?}', 'HotelsSort@sortBy');
