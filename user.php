<?php require_once("define.php"); $steamID64 = $_GET["id"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_TITLE ?></title>
</head>
<body>
    <?php 
        $sql = "SELECT * FROM received WHERE steamID64 = '$steamID64'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $msg_id = $row["msg_id"];
                $steamID3 = $row["steamID3"];
                $steamID64 = $row["steamID64"];
                $avatar = $row["avatar"];
                $name = $row["personame"];
                $message = $row["message"];
                $date = $row["date"];

                echo "MSG ID: ".$msg_id." SteamID3: ".$steamID3." SteamID64: ".$steamID64." Name: ".$name." Mensagem: ".$message." Date: ".$date."<br>";
                
        }
    }
    ?>
</body>
</html>