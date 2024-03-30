

  <!-- jquery library  -->
  <script src="assets/js/nile-slider.js"></script>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <!-- REVOLUTION JS FILES -->
  <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
  <script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>
  <script src="assets/js/YouTubePopUp.jquery.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/imagesloaded.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- For Read More expansion in Home Page -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
  var moreText = document.getElementById("more");
  var previewText = document.getElementById("preview");
  var readMoreLink = document.getElementById("read-more-link");

  readMoreLink.addEventListener("click", function(e) {
    e.preventDefault();
      if (moreText.style.display === "none") {
        moreText.style.display = "inline";
        readMoreLink.innerHTML = "Read Less";
      } else {
        moreText.style.display = "none";
        moreText.style.marginLeft = "0"; 
        readMoreLink.innerHTML = "Read More";
      }
    });
  });  
  </script>
</body>
<!-- home-100:30-->

</html>