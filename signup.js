<html>
<body>

<input type="date" id="myDate" value="2014-02-09">

<button onclick="myFunction()">Try it</button>

<p id="user"></p>

<script>
function myFunction() {
  var x = document.getElementById("myDate").value;
  document.getElementById("user").innerHTML = x;
}
</script>

</body>
</html>
