<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];

    // Define country and city array
    $countryArr = array(
                    "Caloocan" => array("Barangay 143", "Barangay 174", "Barangay 168"),
                    "Makati" => array("Mumbai", "New Delhi", "Bangalore"),
                    "Malabon" => array("London", "Manchester", "Liverpool")
                );

    // Display city dropdown based on country name
    if($country !== 'Select'){
        echo "<label>City:</label>";
        echo "<select name='barangay'>";
        foreach($countryArr[$country] as $value){
            echo "<option value=".$value.">". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>