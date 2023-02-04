console.log("movie selector ready");

$(document).ready(function () {
  $("img").on("click", function (event) {
    console.log("clicked image");
    var data = {
      action: "pick_movie",
      movie_id: $(this).attr("id")
    };

    $.ajax({
      type: "POST",
      url: "process.php",
      data: data,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log("all done");
      console.log(data);
      console.log("adding class to " + data['movie_id']);
      //if (!data.success) {
        //if (data.errors.name) {





        //  $("#" + data['movie_id']).addClass("has-error");
        //}
        
      //} else {
        $("#movie-text").html(
          '<div>' + data['description'] + "</div>"
        );
      //}

    });
  });
});