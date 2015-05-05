<?php
if (isset($_GET['sendVote'])) {
    $partyId=explode(',',$_GET['sendVote']);

    $sql = "SELECT party, score FROM parties WHERE id=".$partyId[0];
    $result = $conn->query($sql) or die(mysql_error());
    while($row = $result->fetch_assoc()) {
            $winScore = $row['score'];
            $winTitle = $row['party'];
    }

    $sql = "SELECT party, score FROM parties WHERE id=".$partyId[1];
    $result = $conn->query($sql) or die(mysql_error());
    while($row = $result->fetch_assoc()) {
            $loseScore = $row['score'];
            $loseTitle = $row['party'];
    }

    $win = 1;
    $lose = 0;
    if (isset($_GET['draw'])) {
        $win = $lose = 0.5;
    }
    $rating = new Rating($winScore, $loseScore, $win, $lose);
    $results = $rating->getNewRatings();

    $previousVoteWin = $winTitle;
    $previousVoteLose = $loseTitle;

    $sql = "UPDATE parties SET score=".$results['a'].",wins=wins+1 WHERE id=".$partyId[0];
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "UPDATE parties SET score=".$results['b']." WHERE id=".$partyId[1];
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}