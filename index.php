<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<title>THis is a title</title>
</head>
<body>
<div>
Our current score is: <span id="spanner"></id>
</div>
<script>

var url        = 'http://hacker-olympics-london.herokuapp.com/leaderboard.json';
var teamNumber = '14';
var craig = true;

$(document).ready(function() {
    $.get(url, function(data) {
        $('#spanner').text(data[teamNumber].points);
        alert('YOLO!')
    });
});
</script>
</body>
