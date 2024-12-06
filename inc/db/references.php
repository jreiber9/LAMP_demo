<?php
function getReferences() {
    $mysqli = getConnection();

    if ($mysqli) {
        $references = array();
        $sql = "SELECT * FROM `references`";
        $res = $mysqli->query($sql);

        if (!$res) {
            die('There was an error running the query [' . $mysqli->error . ']');
        } else {
            while ($row = $res->fetch_assoc()) {
                $references[] = $row;
            }
        }

        $mysqli->close();
        return json_encode($references);
    } else {
        return json_encode(['error' => 'Unable to connect to database']);
    }
}

?>