<?php
$page_title = "Blog";
$selected_page = "blog";
?>
<html>
    <?php require __DIR__ . '/../includes/head.php';?>
  <body>
    <div class="article">
        <?php require __DIR__ . '/../includes/header.php';?>

      <!-- START OF BODY -->
      <div class="body">
        <div class="pwd">
            /blog
        </div>
        <div class="dir">
            <ul class="directoryList">
                <li class="directoryItem">
                <a href=".">.</a>
                </li>
                <li class="directoryItem">
                <a href="..">..</a>
                </li>
                <li class="directoryItem">
                <a href="tech">technical blog</a>
                </li>
                <li class="directoryItem">
                <a href="fun">fun blog</a>
                </li>
            </ul>
        </div>
      </div>
      <!-- END OF BODY -->

      <!-- START OF SUPER FOOTER -->
      <div class="superfooter">
        <p>
          Last updated:
          <a href="projects/epoch-converter/?epoch=1545938749">1545938749</a>
        </p>
      </div>
      <!-- END OF SUPER FOOTER -->

    </div>
    <!-- END OF ARTICLE -->
  </body>
</html>