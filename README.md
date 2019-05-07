# BadescInternalForm

A contact form I made for an internal BADESC website, made with HTML, CSS, [Bootstrap](https://getbootstrap.com/), JavaScript and PHP, was used in the [PHPMailer](https://github.com/PHPMailer/PHPMailer) library for sending the form by email.

* First clone the repository with the command   
                
      git clone

* TThen edit the 

      "send.php" 
          
 file with your email data in the lines shown below.

      $mail->Host = 'email.domain.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'email@domain.com';                 // SMTP username
      $mail->Password = 'password';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to


* To test you can use [XAMPP](https://www.apachefriends.org/pt_br/index.html), put the project in the folder '\xampp\htdocs'.

* Run XAMPP and start in Apache.

* Now open the browser and go to 

      'localhost/BadescInternalForm'.
