# Code-Challenge-Task
This so simple task to search and sort some data which fetched from this url: https://api.myjson.com/bins/tl0bp

# Requirements:
  - PHP >= 7.1

# Run It:
    - You should clone it first and move it to your apache root folder [ex. www], then leave it by it's name or rename it to [task]:
      git clone https://github.com/AhmedRaafat14/Code-Challenge-Task.git
      Then you can go to your browser and type : http://localhost/task/hotels  ==> will list all hotels for you
    
    
    - To search in this hotels list by [name, destination city, price range and date range] and sort search hotels by name or price in ASc or DESC order, we can use this APIs to applay it:
        -- Main API structure link:
            http://localhost/task/hotels/search/search_by_val/Key_value/sort_by_val/sort_in_key
            
            - search_by_val :  name, city, price and date
            - key_value :      le,   cairo, 100:200 and 10-10-2020:15-10-2020
            - sort_by_val:     price or name
            - sort_in_key:     asc or desc
          
         -- So to search by name:
              """
                Assumations:
                  I assumed user entered any chars and validate if this chars exist in any hotel name so it will selected as one user searched for it, and user want to sort selected hotels by price in asc order, if we left the last two vars empty will sort them by price in asc as a defualt option for sorting.
              """
              http://localhost/task/api/hotels/search/name/le/price/asc
              http://localhost/task/api/hotels/search/name/le/price/desc
              http://localhost/task/api/hotels/search/name/le/name/asc
              http://localhost/task/api/hotels/search/name/le/name/desc
              http://localhost/task/api/hotels/search/name/le
              
         -- By destination city:
              """
                Assumations:
                  I assumed user select the same exact city
              """
              http://localhost/task/api/hotels/search/city/Paris/price/asc
              http://localhost/task/api/hotels/search/city/Paris/price/desc
              http://localhost/task/api/hotels/search/city/Paris/name/asc
              http://localhost/task/api/hotels/search/city/Paris/name/desc
              http://localhost/task/api/hotels/search/city/Paris
         
         -- By Price Range:
              """
                Assumations:
                  I assumed range sent without dollar sign just string conactentaed by [:] like [100:200]
              """
              http://localhost/task/api/hotels/search/price/100:200/name/asc
              http://localhost/task/api/hotels/search/price/100:200/name/desc
              http://localhost/task/api/hotels/search/price/100:200/price/asc
              http://localhost/task/api/hotels/search/price/100:200/price/desc
              http://localhost/task/api/hotels/search/price/100:200
         
         -- By Date Range:
              """
                Assumations:
                    I assumed range sent like this [10-10-2020:15-10-2020] seperated by [:]
              """
              http://localhost/task/api/hotels/search/date/10-10-2020:15-10-2020/name/asc
              http://localhost/task/api/hotels/search/date/10-10-2020:15-10-2020/name/desc
              http://localhost/task/api/hotels/search/date/10-10-2020:15-10-2020/price/asc
              http://localhost/task/api/hotels/search/date/10-10-2020:15-10-2020/price/desc
              http://localhost/task/api/hotels/search/date/10-10-2020:15-10-2020
         
         
         --- what if user just want to sort hotels list so i made another API to sort list only:
            # to sort all the list by price in ASC order
              http://localhost/task/api/hotels/sort
            # to sort all by price in asc or desc:
              http://localhost/task/api/hotels/sort/price/asc
              http://localhost/task/api/hotels/sort/price/desc
            # to sort all by name in asc or desc:
              http://localhost/task/api/hotels/sort/name/asc
              http://localhost/task/api/hotels/sort/name/desc
              

# Travis badge:
  [![Build Status](https://travis-ci.org/AhmedRaafat14/Code-Challenge-Task.svg?branch=master)](https://travis-ci.org/AhmedRaafat14/Code-Challenge-Task)
  
# Codeclimate badge:
  [![Maintainability](https://api.codeclimate.com/v1/badges/0d314d29f132840f5e43/maintainability)](https://codeclimate.com/github/AhmedRaafat14/Code-Challenge-Task/maintainability)
