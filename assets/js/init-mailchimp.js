// Generated by CoffeeScript 1.6.3
(function() {
  if ($('.mc').length > 0) {
    $('form').ajaxChimp({
      callback: function(resp) {
        var response;
        response = resp.msg.substr(0);
        return $('.mc .response').html("<p>" + response + "</p>");
      }
    });
  }

}).call(this);