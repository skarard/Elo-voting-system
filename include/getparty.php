<?php 
$parties = randParties();
foreach ($parties as $value) {
    $vote = vote($value,$parties);
    $sql = "SELECT image, party, leader, keypoints FROM parties WHERE id=".$value;
    $result = $conn->query($sql) or die(mysql_error());
    while($row = $result->fetch_assoc()) {
        $str = <<<EOF
        <div class="party">
            <a href="?sendVote=$vote"><span></span></a>
            <img src="img/{$row['image']}">
            <h2>{$row['party']}</h2>
            <h3>{$row['leader']}</h3>
            <h4>{$row['keypoints']}</h4>
        </div>
EOF;
        echo $str;
    }
} 
