<?php
$dated = $row['valued'];
$datei = $row['valuei'];
     

       $initial_value = $row['ballance']; //Get from ur source
    $start_date = date_create_from_format("d/m/Y",$dated); // Get from ur source like ur DM or smth
   
       $current_date = date_create();
       $difference = date_diff($start_date, $current_date);
   
       $incrementor = $datei; //add by this variable every day so very day that passes the initial value will add by 1.5
       $final_value = ($incrementor * $difference->days) + $initial_value;
   
         $final_value;





?>