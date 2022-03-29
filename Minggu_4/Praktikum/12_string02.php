<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Week4.12 • String 02</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/92729204?v=4">
</head>
<body>
	<h1 class="text-start ">
<?php
$str = <<<EOD
	Example of string spanning multiple lines using heredoc syntax.
EOD;
/* More complex example, with variables. */ 
class foo {
	var $foo;
	var $bar;
	function foo() {
		$this->foo = 'Foo';
		$this->bar = array('Bar1', 'Bar2', 'Bar3');
	}
}
$foo = new foo(); 
$name = 'Achmatim';
echo <<<EOT
	<u>$str</u>
	<br>My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>. Now, I am printing some <b>{$foo->bar[1]}</b>. This should print a capital 'A': \x41.
EOT; ?>

	</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>