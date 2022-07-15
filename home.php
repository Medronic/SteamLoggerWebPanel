<?php require_once("define.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= SITE_DESCRIPTION ?>">
    <meta name="author" content="<?= SITE_OWNER ?>">
    <meta name="generator" content="Hugo 0.98.0">
    <title><?= SITE_TITLE ?></title>

    <link rel="canonical" href="<?= site_url_atual ?>">

    <link href="static/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="static/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="static/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="static/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="static/img/favicons/manifest.json">
    <link rel="mask-icon" href="static/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="static/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <link href="static/css/style.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><?= SITE_TITLE ?></a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Switch account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <!-- <div class="nav-scroller bg-body shadow-sm">
        <nav class="nav" aria-label="Secondary navigation">
            <a class="nav-link active" aria-current="page" href="home.php">Dashboard</a>
            <a class="nav-link" href="#">
                Friends
                <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
            </a>
            <a class="nav-link" href="#">Explore</a>
            <a class="nav-link" href="#">Suggestions</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
    </div> -->

    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <img class="me-3" src="static/img/logos/logo.png" alt="" width="48" height="38">
            <div class="lh-1">
                <a href="<?= github_repository ?>" target="_blank" class="nav-link">
                    <h1 class="h6 mb-0 text-white lh-1"><?= SITE_TITLE ?></h1>
                </a>
                <small>Created by <a href="<?= developer_site ?>" class="link"><?= developer_name ?></a>. Online: <?= year_created ?><?php if (year_created < date("Y")) {
                                                                                                                                            echo " - ", date("Y");
                                                                                                                                        } ?></small>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Last 3 messages</h6>

            <!-- <svg class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: 32x32' preserveAspectRatio='xMidYMid slice' focusable='false'>
                <title>Placeholder</title>
                <rect width='100%' height='100%' fill='#e83e8c' /><text x='50%' y='50%' fill='#e83e8c' dy='.3em'>32x32</text>
            </svg> -->

            <?php
            $sql = "SELECT * FROM received ORDER BY msg_id DESC LIMIT 3";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                // echo "Há mensagens na tabela received";

                while ($row = $result->fetch_assoc()) {
                    $msg_id = $row["msg_id"];
                    $steamID3 = $row["steamID3"];
                    $steamID64 = $row["steamID64"];
                    $personaname = $row["personaname"];
                    $avatar = $row["avatar"];
                    $message = $row["message"];
                    $date = $row["date"];

                    echo "<div class='d-flex text-muted pt-3'>
                    <a href='http://steamcommunity.com/profiles/" . $steamID64 . "' target='_blank'><img class='bd-placeholder-img flex-shrink-0 me-2 rounded' src=" . $avatar . " width='32' height='32' alt='Avatar'></a>
              
                    <p class='pb-3 mb-0 small lh-sm border-bottom'>
                      <strong class='d-block text-gray-dark'>@" . $personaname . "</strong>
                      " . $message . "
                    </p>
                  </div>";
                }
            } else {
                echo "There are currently no messages in the table received.";
            }
            ?>

            <small class="d-block text-end mt-3">
                <a href="home.php">Recent messages</a>
            </small>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">All Friends. <small>Obs. After a new friend sends to you a message, it will be registered and displayed here!</small></h6>

            <?php
            $sql2 = "SELECT * FROM friends";
            $result2 = $conn->query($sql2);

            if ($result2->num_rows > 0) {

                // echo "Há mensagens na tabela received";

                while ($row2 = $result2->fetch_assoc()) {

                    $friend_id = $row2["friend_id"];
                    $steamID64 = $row2["steamID64"];
                    $personaname = $row2["personaname"];

                    // var_dump($row);

                    $sql = "SELECT * FROM received WHERE steamID64 = '$steamID64' LIMIT 1";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {

                        $avatar = $row["avatar"];

                        echo "<div class='d-flex text-muted pt-3'>
                        <a href='http://steamcommunity.com/profiles/$steamID64' target='_blank'><img class='bd-placeholder-img flex-shrink-0 me-2 rounded' src=" . $avatar . " width='32' height='32' alt='Avatar'></a>
                
                        <div class='pb-3 mb-0 small lh-sm border-bottom w-100'>
                        <div class='d-flex justify-content-between'>
                            <strong class='text-gray-dark'>" . $personaname . "</strong>
                            <a href='user.php?id=" . $steamID64 . "'>Chat History</a>
                        </div>
                        <span class='d-block'>@" . $personaname . "</span>
                        </div>
                    </div>";
                    }
                }
            } else {
                echo "Have you received a message from a friend? As long as there is no message, the friends list will not be shown!";
            }
            ?>

            <small class="d-block text-end mt-3">
                <a href="home.php">All Friends</a>
            </small>
        </div>
        </div>
    </main>


    <script src="static/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="static/js/offcanvas.js"></script>
</body>

</html>