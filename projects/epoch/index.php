<?php
  $epoch = isset($_GET['epoch']) ? $_GET['epoch'] : time();
  try {
    new DateTime("@" . $epoch);
  } catch (Exception $e) {
    $epoch = time();
  }
  $dt = new DateTime("@" . $epoch);
  $humanReadableTime = $dt->format('l, F jS, Y h:i:s A');
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Henry Harris</title>
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149253046-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-149253046-1');
    </script>
    <script src="/assets/js/handlebars.runtime-v4.1.2.js"></script>
    <script src="/assets/js/templatesCompiled.js"></script>
    <script>
      const sidebar = Handlebars.templates['sidebar/sidebar']({})
      const sidebarFooterMobile = Handlebars.templates['footer/mobile']({})

      $(document).ready(function () {
        $("#sidebar").html(sidebar)
        $("#sidebar-footer--mobile").html(sidebarFooterMobile)
      })
    </script>
    <script>
      function currentTime() {
        const currTimeElem = $("#epoch-time");

        const newEpoch = Math.round(Number(new Date().getTime() / 1000));
        $("#now-link").attr("href", "?epoch=" + newEpoch);
        $("#now-link").text(newEpoch);
      }

      $(document).ready(function () {
        currentTime()
        window.setInterval(function() {
          currentTime()
        }, 1000)
      })
    </script>
  </head>

  <body>
    <div id="sidebar" class="sidebar"></div>
    <div class="body">
      <div class="section">
        <div class="section__title">
          <h3>Epoch Converter</h3>
        </div>
        <p><span id="epoch-time"><?php echo $epoch ?></span> is <strong><span id="epoch-human"><?php echo $humanReadableTime ?></span></strong></p>
        <form id="epoch-form">
          <input name="epoch" type="text" placeholder="Timestamp">
          <input type="submit" value="Convert">
        </form>
      </div>
      <div class="section">
        <div class="section__title">
          <h3>Current Time</h2>
        </div>
        <p>The current time is <a href="" id="now-link">now</a>.</p>
      </div>
    <div id="sidebar-footer--mobile" class="sidebar-footer--mobile"></div>
  </body>
</html>
