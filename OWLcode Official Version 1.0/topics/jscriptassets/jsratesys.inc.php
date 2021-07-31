<?php
if (isset($_POST['save'])) {
        $uID = $con->real_escape_string($_POST['uID']);
        $ratedIndex = $con->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if ($uID) {
            $con->query("INSERT INTO jsstars (rateIndex) VALUES ('$ratedIndex')");
            $sql = $con->query("SELECT id FROM jsstars ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $con->query("UPDATE jsstars SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    $sql = $con->query("SELECT id FROM jsstars");
    $numR = $sql->num_rows;

    $sql = $con->query("SELECT SUM(rateIndex) AS total FROM jsstars");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    $avg = $total / $numR;