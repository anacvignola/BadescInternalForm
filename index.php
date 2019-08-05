<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello Dicol</title>
    <meta name="author" content="Ana Claudia Vignola">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/normalize.css" rel="stylesheet">
    <!-- CSS -->
</head>

<body>
    <div class="container">
        <div class="row">
            <header>
                <div class="col-12 col-md-12" id="top">
                    <img src="assets/img/logoalodicol.png" id="logotop">
                    <br>
                    <p id="description">Fill out the form below to speak directly with our board of directors.</p>
                </div>
            </header>
            <div class="col-12 col-md-12 col-lg-12 justify-content-center">
                <form class="form" id="contactform">
                    <div class="form-group">
                        <label for="name">Name(Optional):</label>
                        <input id="name" name="name" class="form-control" type="text" placeholder="Your name" />
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail(Optional):</label>
                        <input id="email" name="email" class="form-control" type="email" placeholder="Your e-mail" />
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:*</label>
                        <input id="subject" name="subject" class="form-control" type="text" placeholder="Subject"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="message">Message:*</label>
                        <span><textarea maxlength="2000" id="message" name="message" placeholder="Your message..."
                                required></textarea></span>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" id="terms"
                            value="I accept the terms of identification and sharing." name="terms">
                        <label class="form-check-label" for="terms">I authorize my identification and the sharing of my
                            question/considerations.</label>
                    </div>
                    <div class="form-group">
                        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div id="answer"></div>
                </form>
            </div>
        </div>
        <footer class="col-12 col-md-12 col-lg-12 d-flex w-100 justify-content-center" id="footer">
            <p id="developed">© 2019 developed by <img class="ml-auto" src="assets/img/logoGETEC.png"></p>
        </footer>
    </div>
    <!-- JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JavaScript -->
</body>

</html>
