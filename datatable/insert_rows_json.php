<?php

$rows = $_GET['rows'];

header('Content-type: application/json');

if ($rows == 'more') {

    echo '{"recordInsertIndex":3,"insertIndex":7,"results":[{"foo":"A","bar":"bar:A","baz":"goop"},{"foo":"B","bar":"bar:B","baz":"goop"},{"foo":"C","bar":"bar:C","baz":"goop"}]}';

} else {

    echo '{"results":[ {"foo":0,"bar":"bar:0","baz":"goop"}, {"foo":1,"bar":"bar:1","baz":"goop"}, {"foo":2,"bar":"bar:2","baz":"goop"}, {"foo":3,"bar":"bar:3","baz":"goop"}, {"foo":4,"bar":"bar:4","baz":"goop"}, {"foo":5,"bar":"bar:5","baz":"goop"}, {"foo":6,"bar":"bar:6","baz":"goop"}, {"foo":7,"bar":"bar:7","baz":"goop"}, {"foo":8,"bar":"bar:8","baz":"goop"}, {"foo":9,"bar":"bar:9","baz":"goop"}]}';

}

?>
