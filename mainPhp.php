<?php

function displayIDInTable(){
    require('db.php');
    $query="SELECT * from upload";
            $query_run=mysqli_query($con,$query);
            $totalimages = mysqli_num_rows($query_run);
            if(mysqli_num_rows($query_run)>0)
                    {
                        while($row=mysqli_fetch_assoc($query_run)){
                            echo $row['id'];
                            
                        }
                        return $row['id'];
                    }
        
}