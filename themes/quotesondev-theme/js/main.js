jQuery(function ($) {

  const $get_quote = $(".get_quote"),
    $post_quote = $(".post_quote");

  $get_quote.on("click", function (event) {
    event.preventDefault();
    $.ajax({
      method: "get",
      url: qod_vars.rest_url + "wp/v2/posts?filter[orderby]=rand&[posts_per_page]=1",

      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-WP-Nonce", qod_vars.wpapi_nonce);
      }
    }).done(function (response) {
      console.log(response);
      let $source = response[0]._qod_quote_source;
      let $source_url = response[0]._qod_quote_source_url;
      // if ($source_url) {
      //   $(".quote-content p").html(response[0].content.rendered);
      //   $(".quote-title").html(response[0].title.rendered);
      //   $(".quote-source").html(`<a href="${$source_url}">${$source}</a>`);
      // } else {
      //   $(".quote-content p").html(response[0].content.rendered);
      //   $(".quote-title").html(response[0].title.rendered);
      // }

      $(".quote-content p").html(response[0].content.rendered);
      $(".quote-title").html(response[0].title.rendered);
      $(".quote-source").html(`<a href="${$source_url}">${$source}</a>`);
    });
  });


  $post_quote.on("click", function (event) {
    event.preventDefault();

    const $submit_quote = {
      title: $(".submit_author").val(),
      content: $(".quote_text").val(),
      orign: $(".quote_origin").val(),
      url: $(".quote_url").val()
    };

    $.ajax({
      method: "post",
      url: qod_vars.rest_url + "wp/v2/posts/",
      data: $submit_quote,

      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-WP-Nonce", qod_vars.wpapi_nonce);
      }
    }).done(function (response) {

      $(".submit-form").html("Thanks, your quote submission was received!");
      $(".submit-form").append('<br><a href="' + qod_vars.home_url + '/submit">Click here to submit another!</a>');
    });
  });

});
