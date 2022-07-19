<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Portofolio</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="portofolio-style.css">
      <link rel="icon" href="albina.jpg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>
      <!-- Navbar (sit on top) -->
      <div class="ap-top">
         <div class="ap-bar ap-white ap-wide ap-padding ap-card">
            <a href="#home" class="ap-bar-item ap-button"><b>Portfolio</b> Albina Ahmeti</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="ap-right ap-hide-small">
               <a href="#projects" class="ap-bar-item ap-button">Projects</a>
               <a href="#about" class="ap-bar-item ap-button">About</a>
               <a href="#contact" class="ap-bar-item ap-button">Contact</a>
            </div>
         </div>
      </div>
      <!-- Header -->
      <header class="ap-display-container ap-content ap-wide" style="max-width:1500px;" id="home">
         <img class="ap-image" src="bck.jpg" alt="Computer" width="1500" height="250">
         <div class="ap-display-middle ap-margin-top ap-center">
            <h1 class="ap-xxlarge ap-text-white"><span class="ap-padding ap-black ap-opacity-min"><b>Portfolio</b></span> <span class="ap-hide-small ap-text-light-grey">Albina Ahmeti</span></h1>
         </div>
      </header>
      <!-- Page content -->
      <div class="ap-content ap-padding" style="max-width:1564px">
         <!-- About Section -->
         <div class="ap-container ap-padding-32 ap-center" id="about">
            <h3 class="ap-border-bottom ap-border-light-grey ap-padding-16">About me</h3>
            <div class="ap-col l4 m6 ap-margin-bottom">
               <img src="albina.jpg" alt="Albina" style="width:50%">
               <h3>Albina Ahmeti</h3>
               <p class="ap-opacity">Fullstack developer</p>
               <p>University of Electrical and Computer Engineering</p>
               <a href="#contact"> <button class="ap-button ap-light-grey ap-block" id="contacts">Contact</button></a>
            </div>
            <div class="ap-col l8 m6 ap-margin-bottom">
               <p class="ap-vertical-center">Student with a demonstrated experience in the computer software industry focused in Electrical and Computer Engineering from Universiteti i Prishtinës "Hasan Prishtina".</p>
               <p>My experience is mostly related to my studies but I have finished some training and volunteered in this field. </p>
               <p>I use a creative approach to problem solve and hardworking person. I am always coming up with innovative ideas. I am always energetic and eager to learn new skills.</p>
            </div>
         </div>
         <!-- Project Section -->
         <div class="ap-container ap-padding-32 ap-light-gray ap-center"  id="projects" >
            <h3 class="ap-border-bottom ap-border-light-grey ap-padding-16">Projects</h3>
         </div>
         <div class="ap-row-padding ap-light-gray">
            <?php if (projects()) { ?>
            <?php foreach (projects() as $project) { ?>
            <div class="ap-col l3 m6 ap-margin-bottom">
               <div class="ap-display-container">
                  <div class="ap-black ap-padding"><?php echo $project['project_name']; ?></div>
                  <p><?php echo $project['project_description']; ?></p>
                  <p class="ap-opacity"><?php echo $project['created_at']; ?></p>
               </div>
            </div>
            <?php
               }?>
            <?php
            //demo purpose only
               }else{?>
               <div class="ap-col l3 m6 ap-margin-bottom">
               <div class="ap-display-container">
                  <div class="ap-black ap-padding">Project1</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                  <p class="ap-opacity">2022-07-18</p>
               </div>
            </div>
            <div class="ap-col l3 m6 ap-margin-bottom">
               <div class="ap-display-container">
                  <div class="ap-black ap-padding">Project2</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                  <p class="ap-opacity">2022-07-18</p>
               </div>
            </div>
            <div class="ap-col l3 m6 ap-margin-bottom">
               <div class="ap-display-container">
                  <div class="ap-black ap-padding">Project3</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                  <p class="ap-opacity">2022-07-18</p>
               </div>
            </div>
            <div class="ap-col l3 m6 ap-margin-bottom">
               <div class="ap-display-container">
                  <div class="ap-black ap-padding">Project4</div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                  <p class="ap-opacity">2022-07-18</p>
               </div>
            </div>
               <?php }?>
         </div>
         <!-- Contact Section -->
         <div class="ap-container ap-padding-32 ap-center" id="contact">
            <h3 class="ap-border-bottom ap-border-light-grey ap-padding-16">Contact</h3>
            <p>Lets talk about work.</p>
            <div><span><i class="fa-solid fa-at"></i><a href = "mailto:albina.ahmeti5@student.uni-pr.edu"> albinaahmeti</a> </span></div>
            <div><span><i class="fa-brands fa-facebook-f"></i><a href = "https://www.facebook.com/albina.ahmeti.3158/"> Albina Ahmeti </a> </span></div>
            <div><span><i class="fa-brands fa-github"></i><a href = "https://github.com/AlbinaAhmeti"> AlbinaAhmeti</a> </span></div>
            <div><span><i class="fa-brands fa-linkedin"></i><a href = "https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin"> Albina Ahmeti </a> </span></div>
         </div>
         <!-- End page content -->
      </div>
      <!-- Footer -->
      <footer class="ap-center ap-black ap-padding-16">
         <p>Portfolio &copy;<?php echo date('Y'); ?></p>
      </footer>
   </body>
</html>