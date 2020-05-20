<?php

$gender = $_POST['gender'];
$recommedation = $_POST['reply'];
$msg1 = $_POST['msg1'];
$msg2 = $_POST['msg2'];
$msg3 = $_POST['msg3'];
$msg4 = $_POST['msg4'];
$msg5 = $_POST['msg5'];


$to_email = 'info@pollicy.org';
$subject = 'UserFeedback';
$headers = 'From: noreply@pollicy.org';

$message = "Below are the form details.\n\n
Gender: $gender.\n
How likely are you to recommend Choose Your Own Fake News to a Friend?: $recommedation \n
Was there anything you didn't understand in the game?: $msg1 \n
What did you like about Choose Your Own Fake News?: $msg2 \n
What did you dis-like about Choose Your Own Fake News?: $msg3 \n
Is there something about disinformation that you would like to know more about?:  $msg4 \n
Do you have any other feedback you'd like the designer and/or publisher to hear?: $msg5 \n";


$sendmail = mail($to_email, $subject, $message, $headers);

if ($sendmail){
  require_once(dirname(__FILE__).'thankyou.html');
  echo "Feedback Submitted sucessful";
} else {
  echo "Not Succesful";
}


?>
<!DOCTYPE html>
<html>
  <!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-23/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 11:21:45 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="utf-8" />
    <title>Feedback Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="inner">
        <form method="POST" novalidate>
          <h3>Send us your feedback please!</h3>

          <span class="">Your Gender:</span>
          <br />
          <label class="container"
            >Male
            <input type="radio" name="gender" />
            <span class="checkmark"></span>
          </label>

          <label class="container"
            >Female
            <input type="radio" name="gender" />
            <span class="checkmark"></span>
          </label>

          <label class="container"
            >Others
            <input type="radio" name="gender" />
            <span class="checkmark"></span>
          </label>
          <br />
          <span class=""
            >How likely are you to recommend Choose Your Own Fake News to a
            Friend?</span
          >
          <br />
          <label class="container"
            >Very Likely
            <input type="radio" name="reply" value="" />
            <span class="checkmark"></span>
          </label>

          <label class="container"
            >Likely
            <input type="radio" name="reply" />
            <span class="checkmark"></span>
          </label>

          <label class="container"
            >Meh!
            <input type="radio" name="reply" />
            <span class="checkmark"></span>
          </label>
          <label class="container"
            >Unlikely
            <input type="radio" name="reply" />
            <span class="checkmark"></span>
          </label>
          <br />
          <label class="form-group">
            <input
              type="text"
              class="form-control"
              required="off"
              name="msg1"
            />
            <span>Was there anything you didn't understand in the game?</span>
            <span class="border"></span>
          </label>
          <label class="form-group">
            <input
              type="text"
              class="form-control"
              required="off"
              name="msg2"
            />
            <span for=""
              >What did you like about Choose Your Own Fake News?</span
            >
            <span class="border"></span>
          </label>
          <label class="form-group">
            <textarea
              name="msg3"
              class="form-control"
              required="off"
            ></textarea>
            <span for=""
              >What did you dis-like about Choose Your Own Fake News?</span
            >
            <span class="border"></span>
          </label>
          <label class="form-group">
            <textarea
              name="msg4"
              class="form-control"
              required="off"
            ></textarea>
            <span for=""
              >Is there something about disinformation that you would like to
              know more about?</span
            >
            <span class="border"></span>
          </label>
          <label class="form-group">
            <textarea
              name="msg5"
              class="form-control"
              required="off"
            ></textarea>
            <span for=""
              >Do you have any other feedback you'd like the designer and/or
              publisher to hear?</span
            >
            <span class="border"></span>
          </label>
          <button type="submit">
            Submit
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
          <button>
            <a href="index.html">Back Home</a>
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
      type="6b3326fdb5198bbcb462322c-text/javascript"
    ></script>
    <script type="6b3326fdb5198bbcb462322c-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <script
      src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
      data-cf-settings="6b3326fdb5198bbcb462322c-|49"
      defer=""
    ></script>
  </body>

  <!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-23/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 11:21:46 GMT -->
</html>