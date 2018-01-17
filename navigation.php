<link rel="stylesheet" type="text/css" href="navigation.css"> 
    <!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="#">Homepage</a>
    <a href="imagePage.html">Page2</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
</div>

<!-- Use any element to open/show the overlay navigation menu -->
<h4><span onclick="openNav()">☰ NAVIGATION</span></h4>
    <script> /* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}</script>