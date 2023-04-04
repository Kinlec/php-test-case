<html>
<head>
    <title>Test</title>
</head>
<body>

<form action="parser.php" method="get">
    <label for="url-input">PHP Parser</label>
    <br>
    <input type="text" name="url" id="url-input" placeholder="Input URL here" required>
    <br>
    <input type="submit" value="Submit" style="margin-top: 7px;">
</form>

<form action="thursdays.php" method="get">
    <div>Number of thursdays between two dates</div>
    <label for="start-date">Start Date</label>
    <br>
    <input type="date" name="start-date" id="start-date" placeholder="Input Start Date" required>
    <br>
    <label for="end-date">End Date</label>
    <br>
    <input type="date" name="end-date" id="end-date" placeholder="Input End Date" required>
    <br>
    <input type="submit" value="Submit" style="margin-top: 7px;">
</form>

<form action="sort.php" method="get">
    <div>Custom array sort</div>
    <label for="array-string">Input integers separated by comma</label>
    <br>
    <input type="text" name="array-string" id="array-string" value="4,5,8,9,1,7,2" required>
    <br>
    <input type="submit" value="Submit" style="margin-top: 7px;">
</form>

<script src="output.js"></script>
<script src="cursor.js"></script>

</body>
</html>