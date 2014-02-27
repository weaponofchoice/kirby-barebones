if $('.mc').length > 0
  $('form').ajaxChimp
    callback: (resp) ->
      response = resp.msg.substr(4)
      $('.mc .response').html("<p>#{response}</p>")