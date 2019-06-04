<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'a comedy sci-fi adventure originally based on a BBC radio series'
];
$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Book</h1>
<?php
$heredoc =<<<EOT
one of the most prominent books of the century is  "$book[title]" which is written by "$book[author]"
EOT;
echo $heredoc
?>
<p>Description</p>
<?php
$heredoc = <<< EOT
small summary of the book is that it is a $book[description]
EOT;
echo $heredoc
?>

<h2>Main Characters</h2>
<?php
foreach($characters as $role){
    echo $role;
    echo "<br/>";
}
?>
</body>
</html>