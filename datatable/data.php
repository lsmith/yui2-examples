<?php

$mode = $_GET['mode'];

header('Content-type: application/json');
if ($mode == 'past_due') {
    echo('{"results":[{"name":"Foo client","profit":5.25,"due_date":"10/1/2007"},{"name":"Bar client","profit":0.02,"due_date":"4/15/2008"},{"name":"Baz client","profit":15.75,"due_date":"10/31/2006"},{"name":"Goop client","profit":5012.07,"due_date":"1/1/1997"}]}');
} else if ($mode == 'appointment') {
    echo('{"results":[{"name":"John client","appointment":"6/1/2008"},{"name":"Fred client","appointment":"4/15/2008"},{"name":"Hank client","appointment":"10/1/2008"},{"name":"Jody client","appointment":"3/17/2012"}]}');
} else {
    echo('{"results":[{"name":"Foo client","profit":5.25},{"name":"Hannover client","profit":10587.76},{"name":"Friendly client","profit":1.03},{"name":"Unfriendly client","profit":19882.92}]}');
}

?>
