$(document).ready(function() {
    $("#read-more-link").click(function(e) {
      e.preventDefault();
      var moreText = $("#more");
      var readMoreLink = $(this);
      if (moreText.css("display") === "none") {
        moreText.css("display", "inline");
        readMoreLink.text("Read Less");
      } else {
        moreText.css("display", "none");
        moreText.css("margin-left", "0");
        readMoreLink.text("Read More");
      }
    });
  });
  