<!DOCTYPE html>
<html>
  <head>
    <title>Henry Harris</title>
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese">
    <link rel="stylesheet" href="/assets/style.css">

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
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
  </head>
  <body>
    <div id="sidebar" class="sidebar"></div>
    <div class="body">
      <div id="me" class="section">
        <div class="section__title">
          <h3>Me</h3>
        </div>
        <p>
          Hi. My name is Henry Harris. I am currently a 4th year Computer Science student at the Georgia Institute of Technology, better known as Georgia Tech. I am also a candidate for a minor in Computing and Business through the Denning Technology and Management program. At school, most of my time outside of schoolwork is dedicated to being head teaching assistant for CS 2110.
        </p>
      </div>
      <div id="story" class="section">
        <div class="section__title">
          <h3>Story</h3>
        </div>
        <p>
          My story with computers began way back when I was a middle schooler, playing Minecraft with my two brothers on our private server. Wanting to write custom server plugins, I started watching <a href="https://www.youtube.com/user/thenewboston">thenewboston</a>'s Java tutorials on YouTube. The moment I saw the words "Hello World" pop up in my console, I knew programming was for me.
        </p>
        <p>
          Since, I have taken AP Computer Science, chosen Computer Science as my major, gotten heavily involved in the College of Computing at Georgia Tech, worked two software engineering internships, built countless personal projects, and I continue to love it just as much to this day.
        </p>
      </div>
      <div id="hobbies" class="section">
        <div class="section__title">
          <h3>Hobbies</h3>
        </div>
        <p>In my free time I enjoy exercising and the great outdoors – specifically lifting weights, playing basketball and volleyball, and hiking. I also love to travel the world. My favorite trip ever is the trip to Morocco I took while studying abroad in Barcelona during the summer of 2018. There, we visited Fes, toured the Atlas Mountains, rode camels into the Sahara desert where we spent the night in traditional Berber tents, played Moroccan drums with locals in Tingher Province, and navigated the bustling markets of Marrakech.</p>
      </div>
    </div>
    <div id="sidebar-footer--mobile" class="sidebar-footer--mobile"></div>
  </body>
</html>
