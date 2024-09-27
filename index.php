<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\stylesheet.css">
    <title>Exam</title>
</head>

<body>
    <div class="discount_code">
        <p><b>5,00 korting met code: MSD24 (va 75)</b></p>
    </div>

    <nav>
        <div class="wrapper">
            <div class="format">
                <p>Al meer dan 130 jaar vertrouwd!</p>
                <div class="menu">
                    <?php
                        $e = ["forum.html", "#", "#", "#"]; 
                        $i = ["Mijn account", "Contact", "Over V&D", "<3"];
                        for ($x=0; $x < 4; $x++){ 
                                echo "<a href='" . $e[$x] . "'> " . $i[$x] . " </a>";
                        }
                ?>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="wrapper">
            <div class="format_header">
                <h1>V&D</h1>

                <div id="totalprice">
                    <p><b>0,00</b></p>
                    <p><b>&euro;</b></p>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="main">
                <input type="search" id="searchbar" value="Wat zoek je?">
                <div class="content">
                    <aside>
                        <ul id="categories">
                            <li>Dames</li>
                            <li>Heren</li>
                            <li>Kinderen</li>
                            <li>Schoenen</li>
                            <li>Tassen</li>
                            <li>Sport</li>
                            <li>Wonen & Slapen</li>
                            <li>Accessoires</li>
                            <li>Merken</li>
                        </ul>
                    </aside>
                    <div id="promotion">
                        <img src="https://www.vd.nl/files/uploads/images/header-vd-new.png" alt="header with 80% off" srcset="https://www.vd.nl/files/uploads/images/header-vd-new.png" id="article" width="100%">
                    </div>
                    
                </div>
                <div id="promotion2">
                    <img src="https://www.vd.nl/files/uploads/images/1(4).png" alt="Dames sneakers tot 70%" srcset="https://www.vd.nl/files/uploads/images/1(4).png" width="70%">
                    <img src="https://www.vd.nl/files/uploads/images/2(5).png" alt="Heren sneakers tot 70%" srcset="https://www.vd.nl/files/uploads/images/2(5).png" width="70%">
                </div>
                <div id="promotion3">
                        <?php
                        $z =["meow" => "wewo","hiss" => "cat"];
                        foreach ($z as $r => $v) { 
                            echo" <img src='". $r ."' alt='" . $v . "' srcset='" . $r . "'>";
                        }
                        ?>
                </div>
        </div>
    </div>

</body>

</html>