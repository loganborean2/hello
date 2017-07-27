<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<style>

.currentHover {
        background-color: red;
}

.colored {
        background-color: red;
}

li.currentHover ul {
        background-color: white;
}




</style>

</head>
<body>

<div class="container">

<ul class="list-group">
    <li class="list-group-item">One</li>
    <li class="list-group-item">Two
        <ul class="list-group">
            <li class="list-group-item">Item 2a</li>
            <li class="list-group-item">Item 2b</li>
        </ul>
    </li>
    <li class="list-group-item">Three
        <ul class="list-group">
            <li class="list-group-item">Item 3a</li>
            <li class="list-group-item">Item 3b</li>
	    <li class="list-group-item">Three
		<ul class="list-group">
		    <li class="list-group-item">Item 3a</li>
		    <li class="list-group-item">Item 3b</li>
		</ul>
	    </li>
        </ul>
    </li>
</ul>
</div>



<script>

$('li').click(function(e) {
    $('li').removeClass('colored');

    e.stopPropagation();
    if ($(e.target).children().is('ul')) {
	console.log('hey');

	$(this).addClass('colored');
    }


});

$('li').mouseover(function(e)
{
	
    e.stopPropagation();
    if ($(e.target).children().is('ul')) {

    $(this).addClass('currentHover');
    }

		      
});

$('li').mouseout(function()
{
        $(this).removeClass('currentHover');
});
</script>





















<body>
</html>
