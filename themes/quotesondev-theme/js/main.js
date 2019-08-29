jQuery(function ($) {

  const $get_quote = $(".get_quote"),
    $post_quote = $(".post_quote");
    let $lastPage = '';

  $get_quote.on("click", function (event) {
    event.preventDefault();
    $lastPage = document.URL;

    $.ajax({
      method: "get",
      url: window.qod_vars.rest_url + "wp/v2/posts?filter[orderby]=rand&[posts_per_page]=1",

      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-WP-Nonce", window.qod_vars.wpapi_nonce);
      }
    }).done(function (response) {
      const $source = response[0]._qod_quote_source;
      const $source_url = response[0]._qod_quote_source_url;

      history.pushState('', '', window.qod_vars.home_url + '/' + response[0].slug);

      $(".quote-content p").html(response[0].content.rendered);
      $(".quote-title").html(response[0].title.rendered);
      $(".quote-source").html(`<a href="${$source_url}">${$source}</a>`);

      $(window).on ('popstate', function() {
        window.location.replace($lastPage);
      });
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

    if ($submit_quote.title === "" && $submit_quote.content === "") {
      alert("Sorry, 'Author' and 'Quote' are required fields.");
    } else {
      $.ajax({
        method: "post",
        url: qod_vars.rest_url + "wp/v2/posts/",
        data: $submit_quote,

        beforeSend: function (xhr) {
          xhr.setRequestHeader("X-WP-Nonce", qod_vars.wpapi_nonce);
        }
      }).done(function () {

          $(".submit-form").html("Thanks, your quote submission was received!");
          $(".submit-form").append('<br><a href="' + qod_vars.home_url + '/submit">Click here to submit another!</a>');
      });
    }
  });

});
