<?php  
    $result = $this->connect->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
?>