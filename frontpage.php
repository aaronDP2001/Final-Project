<?php
ob_start ();
session_start();
require "php/config.php";
require_once "php/functions.php";


?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
      window.history.forward();
    </script>
  <head>
    <!--<script type="text/javascript">
      window.history.forward();
    </script>-->
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=IBM Plex Sans Hebrew:wght@500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Goldman:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="rectangle-parent">
      <div class="frame-child"></div>
      <div class="frame-item"></div>
      <img class="doorbell-icon" alt="" src="./public/doorbell@2x.png" />

      <img class="frame-inner" alt="" src="./public/ellipse-22@2x.png" />

      <div class="rectangle-group">
        <div class="rectangle-div"></div>
        <div class="ellipse-div"></div>
        <div class="frame-child1"></div>
        <div class="frame-child2"></div>
        <div class="frame-child3"></div>
        <img class="logo-icon" alt="" src="./public/logo@2x.png" />

        <div class="frame-child4"></div>
        <img class="search-icon" alt="" src="./public/search@2x.png" />

        <div class="search">Search</div>
        <div class="currently-live">CURRENTLY LIVE</div>
        <img class="ellipse-icon" alt="" src="./public/ellipse-1@2x.png" />

        <img class="frame-child5" alt="" src="./public/ellipse-5@2x.png" />

        <img class="frame-child6" alt="" src="./public/ellipse-6@2x.png" />

        <img class="frame-child7" alt="" src="./public/ellipse-7@2x.png" />

        <img class="frame-child8" alt="" src="./public/ellipse-12@2x.png" />

        <img class="frame-child9" alt="" src="./public/ellipse-11@2x.png" />

        <img class="frame-child10" alt="" src="./public/ellipse-10@2x.png" />

        <img class="frame-child11" alt="" src="./public/ellipse-4@2x.png" />

        <img class="frame-child12" alt="" src="./public/ellipse-3@2x.png" />

        <img class="frame-child13" alt="" src="./public/ellipse-2@2x.png" />

        <div class="channel-1-live-container">
          <span>Channel 1 </span>
          <span class="live">LIVE</span>
        </div>
        <div class="channel-2-live-container">
          <span>Channel 2 </span>
          <span class="live">LIVE</span>
        </div>
        <div class="subscriptions">SUBSCRIPTIONS</div>
        <div class="friends">FRIENDS</div>
        <div class="john-doe">John Doe</div>
        <div class="darrell-steward">Darrell Steward</div>
        <div class="brooklyn-simmons">Brooklyn Simmons</div>
        <div class="arlene-mccoy">Arlene McCoy</div>
        <div class="jerome-bell">Jerome Bell</div>
        <div class="kathryn-murphy">Kathryn Murphy</div>
        <div class="theresa-webb">Theresa Webb</div>
        <div class="darrell-steward1">Darrell Steward</div>
      </div>
      <div class="rectangle-container">
        <div class="frame-child14"></div>
        <div class="home-btn">
          <div class="home-btn-child"></div>
          <img class="exterior-icon" alt="" src="./public/exterior@2x.png" />
        </div>
        <div class="frame-child15"></div>
        <div class="frame-child16"></div>
        <div class="frame-child17"></div>
        <div class="frame-child18"></div>
        <div class="frame-child19"></div>
        <img class="people-icon" alt="" src="./public/people@2x.png" />

        <img
          class="chat-bubble-icon"
          alt=""
          src="./public/chat-bubble@2x.png"
        />

        <img class="clock-icon" alt="" src="./public/clock@2x.png" />

       <img class="notes-icon" alt="" src="./public/notes@2x.png" />

        <img class="category-icon" alt="" src="./public/category@2x.png" />
      </div>
      <div class="ellipse-parent">
        <img class="frame-child20" alt="" src="./public/ellipse-15@2x.png" />

        <img class="frame-child21" alt="" src="./public/ellipse-16@2x.png" />

        <img class="frame-child22" alt="" src="./public/ellipse-18@2x.png" />

        <img class="frame-child23" alt="" src="./public/ellipse-19@2x.png" />

        <img class="frame-child24" alt="" src="./public/ellipse-17@2x.png" />

        <div class="quinn">Quinn</div>
        <div class="alex">Alex</div>
        <div class="sarah">Sarah</div>
        <div class="slevy">Slevy</div>
        <div class="sebastian">Sebastian</div>
      </div>
	  
      <div class="adam-parent">
      
        <div class="adam"> <!-- This is the button that u need to code on -->
          <a class="button-logout" href="logout.php">Log Out</a>
		  <a class="button-logout" href="NoteSharing.php">Note Sharing</a>

          <!-- This is the button that u need to code on -->
          <p style="position: relative; bottom: 7px;"><?php echo $_SESSION['f_uname'];?></p>
        </div>
        <img
          class="rectangle-icon"
          alt=""
          src="./public/rectangle-14@2x.png"
          data-animate-on-scroll
        />

        <div class="frame-child25"></div>
        <div class="frame-child26"></div>
        <div class="live-chat">Live Chat</div>
        <div class="people">200 People</div>
        <img class="account-icon" alt="" src="./public/account@2x.png" />

        <img class="multiply-icon" alt="" src="./public/multiply@2x.png" />

        <img class="settings-icon" alt="" src="./public/settings@2x.png" />

        <div class="frame-child27"></div>
        <div class="add-your-comment">Add your comment</div>
        <img
          class="slightly-smiling-face"
          alt=""
          src="./public/slightly-smiling-face@2x.png"
        />

        <img class="sent-icon" alt="" src="./public/sent@2x.png" />

        <div class="person">
          <div class="person-child"></div>
          <div class="sarah-houston">Sarah Houston</div>
          <div class="such-great-information">Such great information.</div>
        </div>
        <div class="person1">
          <div class="person-child"></div>
          <div class="sarah-houston">Suny Suka</div>
          <div class="such-great-information">Thanks for explaining</div>
        </div>
        <div class="person2">
          <div class="person-child"></div>
          <div class="sarah-houston">Arman Bahir</div>
          <div class="such-great-information">Wow keep it up</div>
        </div>
        <div class="post">
          <img class="post-child" alt="" src="./public/ellipse-20@2x.png" />

          <div class="post-item"></div>
          <img class="post-inner" alt="" src="./public/rectangle-11@2x.png" />

          <div class="post-child1"></div>
          <div class="may">MAY</div>
          <div class="div">09</div>
          <div class="supervised-learning-algorithms">
            Supervised Learning Algorithms
          </div>
          <div class="thu-1000pm">Thu 10:00pm | Zoom Meeting</div>
          <div class="i-will-be">
            I will be covering the supervised learning algorithms on Thursday
            May 10th at 10:00pm
          </div>
          <div class="john-doe1">John Doe</div>
          <div class="post-child2"></div>
          <div class="post-child3"></div>
          <div class="participants">Participants</div>
          <div class="div1">72</div>
          <img class="fire-icon" alt="" src="./public/fire@2x.png" />

          <img class="share-icon" alt="" src="./public/share@2x.png" />

          <div class="div2">12</div>
          <div class="div3">30</div>
        </div>
        <div class="post1">
          <img class="post-child" alt="" src="./public/ellipse-201@2x.png" />

          <div class="post-item"></div>
          <img class="post-inner" alt="" src="./public/rectangle-111@2x.png" />

          <div class="post-child1"></div>
          <div class="may">MAY</div>
          <div class="div">08</div>
          <div class="supervised-learning-algorithms">Linear Regression</div>
          <div class="thu-1000pm">Thu 4:00pm | Zoom Meeting</div>
          <div class="i-will-be">
            I will be covering the supervised learning algorithms on Thursday
            May 10th at 4:00pm
          </div>
          <div class="john-doe1">Jerome Bell</div>
          <div class="post-child2"></div>
          <div class="post-child3"></div>
          <div class="participants">Participants</div>
          <div class="div1">60</div>
          <img class="fire-icon" alt="" src="./public/fire@2x.png" />

          <img class="share-icon" alt="" src="./public/share@2x.png" />

          <div class="div2">10</div>
          <div class="div3">27</div>
        </div>
      </div>
    </div>

    <script>
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0.15,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>
