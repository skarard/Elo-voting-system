<?php
//Select two parties at random from the total list of parties
function countParties() {
    global $conn;
    $sql = "SELECT COUNT( id ) as totalno FROM parties";
    $result = $conn->query($sql) or die(mysql_error());
    while($row = $result->fetch_assoc()) {
        $totalParties = $row['totalno'];
    }
    return $totalParties;
}

//Creates array with two random numbers created from party id's
function randParties() {
    $count = countParties();
    $_pone=rand (1 , $count);
    $_ptwo=$_pone;
    while ($_pone == $_ptwo) {
        $_ptwo = rand (1 , $count);
    }
    return array ($_pone, $_ptwo);
}


function vote($value,$parties){
    if ($value == $parties[0]) {
        return $parties[0] . "," . $parties[1];
    } else {
        return $parties[1] . "," . $parties[0];
    }
}