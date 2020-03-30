<!DOCTYPE HTML5>
<html>
    <head>
        <meta charset="utf-8">
        <title>analyzator</title>
        <link rel="StyleSheet" href="graf.css">
    </head>
    <body>
        <div class="tab">
            <form action="index.php" method="post">
                <input type="text" name="h"><br>
                <input type="submit" value="send" > 
            </form>
        </div>
    </body>
</html>


<?php
$string = filter_input(INPUT_POST, "h");
$values = explode(".", $string);
$prefix = explode("/", $values[3]);
$prefix = $prefix[1];
$mask;
$network;
$broadcast;
$pocet = count($values);
if ($pocet == 4) {
    if ($prefix == 24) {
        $mask = "255.255.255.0";
        echo "maska: " . $mask . "<br>";
        $network = $values[0] . "." . $values[1] . "." . $values[2] . ".0";
        echo "Network: " . $network . "<br>";
        $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".255";
        echo "Broadcast: " . $broadcast . "<br>";
        echo 'počet volných adres: 254<br>';
        echo "network bin:".decbin($values[0]).decbin($values[1]).decbin($values[2]).decbin($values[3]);
    }
    if ($prefix == 25) {
        $mask = "255.255.255.128";
        echo "maska: " . $mask . "<br>";
        if ($values[3] >= 128) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".128";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".255";
        } else {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".0";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".127";
        }
        echo "Broadcast: " . $broadcast . "<br>";
        echo 'počet volných adres: 126<br>';
        echo "network bin:".decbin($values[0]).decbin($values[1]).decbin($values[2]).decbin($values[3]);
    }
    if ($prefix == 26) {
        $mask = "255.255.255.192";
        echo "maska: " . $mask . "<br>";
        if ($values[3] <= 63) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".0";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".63";
        } elseif ($values[3] <= 127) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".64";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".127";
        } elseif ($values[3] <= 191) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".128";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".191";
        } elseif ($values[3] <= 255) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".192";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".255";
        }
        echo "Broadcast: " . $broadcast . "<br>";
        echo 'počet volných adres: 62<br>';
        echo "network bin:".decbin($values[0]).decbin($values[1]).decbin($values[2]).decbin($values[3]);
    }
    if ($prefix == 27) {
        $mask = "255.255.255.224";
        echo "maska: " . $mask . "<br>";
        if ($values[3] <= 31) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".0";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".31";
        } elseif ($values[3] <= 63) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".32";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".63";
        } elseif ($values[3] <= 95) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".64";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".95";
        } elseif ($values[3] <= 127) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".96";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".127";
        }elseif ($values[3] <= 159) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".128";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".159";
        } elseif ($values[3] <= 191) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".160";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".191";
        } elseif ($values[3] <= 223) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".192";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".223";
        } elseif ($values[3] <= 255) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".224";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".255";
        }
        echo "Broadcast: " . $broadcast . "<br>";
        echo 'počet volných adres: 30 <br>';
        echo "network bin:".decbin($values[0]).decbin($values[1]).decbin($values[2]).decbin($values[3]);
    }
    if ($prefix == 28) {
        $mask = "255.255.255.240";
        echo "maska: " . $mask . "<br>";
        if ($values[3] <= 15) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".0";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".15";
        }elseif ($values[3] <= 31) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".16";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".31";
        }elseif ($values[3] <= 47) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".32";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".47";
        }elseif ($values[3] <= 63) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".48";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".63";
        } elseif ($values[3] <= 79) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".64";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".79";
        } elseif ($values[3] <= 95) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".80";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".95";
        }elseif ($values[3] <= 111) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".96";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".111";
        } elseif ($values[3] <= 127) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".112";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".127";
        } elseif ($values[3] <= 143) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".128";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".143";
        } elseif ($values[3] <= 159) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".144";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".159";
        }elseif ($values[3] <= 175) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".160";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".175";
        }elseif ($values[3] <= 191) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".176";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".191";
        }elseif ($values[3] <= 207) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".192";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".207";
        }elseif ($values[3] <= 223) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".208";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".223";
        }elseif ($values[3] <= 239) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".224";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".239";
        }elseif ($values[3] <= 255) {
            $network = $values[0] . "." . $values[1] . "." . $values[2] . ".240";
            echo "Network: " . $network . "<br>";
            $broadcast = $values[0] . "." . $values[1] . "." . $values[2] . ".255";
        }
        echo "Broadcast: " . $broadcast . "<br>";
        echo 'počet volných adres: 14 <br>';
        echo "network bin:".decbin($values[0]).decbin($values[1]).decbin($values[2]).decbin($values[3]);
    }
} else {
    echo $string . ' Je neplatná adresa, nebo příliš malá/velká.';
}
?>
