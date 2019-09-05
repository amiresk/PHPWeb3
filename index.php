<!DOCTYPE html>
<html>
<body>
<style>
.myClass {
  color: white;
  background-color: DodgerBlue;
  padding: 20px;
  text-align: center;
  margin: 10px;
}
</style>

<h1>The template Tag</h1>

<p>Click the button to fill the web page with one new DIV element for each item in an array.</p>

<p>The HTML code of each DIV element is found in the TEMPLATE element.</p>

<script type="text/javascript" src="retrieveData.js"></script>



<p id="demo"></p>

<template>
    <p >1</p>
    <div class="myClass">I like: </div>
</template>

<template>
    <p >2</p>
    <div class="myClass">I hate: </div>
</template>

<template>
    <p >3</p>
    <div class="myClass">I love: </div>
</template>

<script>
var myArr = ["Audi", "BMW", "Ford", "Honda", "Jaguar", "Nissan"];

function showContent() {
  var temp, item, a, i;
  //get the template element:
  temp = document.getElementsByTagName("template")[2];
  //get the DIV element from the template:
  item = temp.content.querySelector("div");
  //for each item in the array:
  for (i = 0; i < myArr.length; i++) {
    //Create a new node, based on the template:
    a = document.importNode(item, true);
    //Add data from the array:
    a.textContent += myArr[i];
    //append the new node wherever you like:
    document.body.appendChild(a);
  }
}

document.getElementById("demo").innerHTML = showContent();
</script>

</body>
</html>
