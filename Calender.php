<?php
    class Calender{
        public function showDay($date,$month){
           
            $date = "2021-$month-$date";
            $unixTimestamp = strtotime($date);
            $dayOfWeek = date("l", $unixTimestamp);
            return $dayOfWeek ;
        }
        
    }