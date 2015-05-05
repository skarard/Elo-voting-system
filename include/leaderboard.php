<?php
$sql = "SELECT party, score, wins FROM parties ORDER BY score DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $str = <<<EOF
        {$row["party"]} | Wins: {$row["wins"]}<br>
        Score: {$row["score"]}
        <hr>
EOF;
        echo $str;
    }
} else {
    echo "0 results";
}