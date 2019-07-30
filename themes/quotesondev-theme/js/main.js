jQuery(function($) {

const $get_quote = $(".get_quote"),
    $post_quote = $(".post-quote");

$get_quote.on("click", function(event) {
    event.preventDefault();
    $.ajax({
      method: "get",
      url: qod_vars.rest_url + "wp/v2/posts?filter[orderby]=rand&[posts_per_page]=1",
      
      beforeSend: function(xhr) {
        xhr.setRequestHeader("X-WP-Nonce", qod_vars.wpapi_nonce);
      }
    }).done(function(response) {
      console.log(response);
      $(".quote-content p").html(response[0].content.rendered);
      $(".quote-title").html(response[0].title.rendered);
    });
  });


$post_quote.on("click", function(event) {
    event.preventDefault();
    $.ajax({
      method: "post",
      url: qod_vars.rest_url + "wp/v2/posts/" + qod.post_id,
     
      beforeSend: function(xhr) {
        xhr.setRequestHeader("X-WP-Nonce", qod_vars.wpapi_nonce);
      }
    }).done(function(response) {
      alert("Success!");
    });
  });



});
