<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';
$heredoc = <<< EOT
IN "$title" by $author, $android the pranoid android
complains that he's asked to do mental tasks, even though 
he's got a brain "$brain_size".
EOT;
echo $heredoc;

