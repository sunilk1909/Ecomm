
<html>
<body>

<p id="first">write it 5 times</p> 


<b id="second"> </b> 

<button onclick="myFunction()">Try it</button>



<script>
function myFunction() {
  //var list = document.getElementsByClassName("example")[0];
  var x = document.getElementById("first").textContent;
 document.getElementById('second').innerHTML = x;
}
</script>

</body>
</html>
