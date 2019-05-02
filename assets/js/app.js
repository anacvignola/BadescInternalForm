 $('.form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'send.php',
        type: 'POST',
        data: $('.form').serialize(),
        success: function(response) {
          document.getElementById("contactform").reset();
          $('#answer').html(response);
        },
        error: function(xhr, status, error) {
          alert(xhr.responseText);
        }
      });
      return false;
    });