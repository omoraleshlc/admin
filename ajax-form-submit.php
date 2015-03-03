<?php

    echo "From Server" . json_encode($_POST) . "<br>";
    $jason = $_POST;
    var_dump(json_decode($json));
    var_dump(json_decode($json, true));

    echo $_POST['fname'];

    echo '<br>';
    $x = json_decode('{"foo": 123456789012345}');
    echo sprintf('%1$f', $x->foo) . PHP_EOL;
    echo sprintf('%1$u', $x->foo) . PHP_EOL;
    echo sprintf('%1$s', $x->foo) . PHP_EOL;
    echo strval($x->foo) . PHP_EOL;
    echo (string) $x->foo . PHP_EOL;
    echo number_format($x->foo, 0, '', '') . PHP_EOL;

?>