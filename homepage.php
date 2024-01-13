<?php
session_start();
//******** PROTECT PAGE FROM UNAUTHORIZED ACCESS ************
// Check if user is logged in
if (isset($_SESSION['user_id'])) {
  // "<pre>" . print_r($_SESSION['user_id']) . "</pre>";
  // if yes, do nothing
} else {
  // if no, go to index page
  header("Location: index.php");
}
//*************************************************************

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home / Twitter</title>

  <link href="fonts/material-icons/icons.css?123" rel="stylesheet" />
  <link href="css/style.css?123" rel="stylesheet"/>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="node_modules/reset.css/reset.css" rel="stylesheet" />
  <link rel="icon" href="favicon.png" />
  <script defer src="js/script.js?1232"></script>
</head>

<body>
  <section>
    <!-- nav bar starts -->
  <nav>
    <div class="nav_logo-wrapper">
      <svg class="nav_logo" viewBox="0 0 24 24" aria-hidden="true"
        class="r-1cvl2hr r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp">
        <g>
          <path
            d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
          </path>
        </g>
      </svg>
    </div>
    <?php
      // echo "<h3>Welcome".$email."</h3>"
      ?>
      <div class="Menu_options active">
        <i class="fa fa-home"></i>
        <h2>Home</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-tag"></i>
        <h2>Explore</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-bell"></i>
        <h2>Notification</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-envelope"></i>
        <h2>Messages</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-list"></i>
        <h2>Lists</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-bookmark"></i>
        <h2>Bookmarks</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-group"></i>
        <h2>Community</h2>
      </div>

      <div class="Menu_options">
        <i class="fa fa-close"></i>
        <h2>Premium</h2>
      </div>

      <a href="profile.php">
        <div class="Menu_options">
          <i class="fa fa-user"></i>
          <h2>Profile</h2>
        </div>
      </a>

      <div class="Menu_options">
        <i class="fa fa-ellipsis-h"></i>
        <h2>More</h2>
      </div>

      <button class="tweet_btn">Post</button>

      <div class="logout">
        <a href="logout.php">
          <h4>Log Out</h4>
        </a>
      </div>
    </nav>
    <!-- nav bar end -->

    <!-- main section start -->
    <main>
      <div class="header">
        <h2>Home</h2>
      </div>

      <!-- <div class="post">
          <div class="post_profile-image">
            <img src="images/page-profile-image.png" alt="java-logo" />
          </div>

          <div class="post_body">
            <div class="post_header">
              <div class="post_header-text">
                <h3>
                  Java
                  <span class="header-icon-section">
                    <span class="material-icons post_badge">verified</span>@java
                  </span>
                </h3>
              </div>

              <div class="post_header-discription">
                <p>Java 18 is now available! #Java18 #JDK18 #openjdk</p>
                <br />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
                  necessitatibus saepe, ea blanditiis magnam fugit ad quo mollitia
                  dolore quos voluptates accusantium eaque doloremque amet.
                </p>
              </div>
            </div>
            <img src="images/post-image.jpg" alt="java18" />

            <div class="post_footer">
              <span class="material-icons">chat</span>
              <span class="material-icons">repeat</span>
              <span class="material-icons">favorite_border</span>
              <span class="material-icons">file_upload</span>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post_profile-image">
            <img src="images/page-profile-image.png" alt="java-logo" />
          </div>

          <div class="post_body">
            <div class="post_header">
              <div class="post_header-text">
                <h3>
                  Java
                  <span class="header-icon-section">
                    <span class="material-icons post_badge">verified</span>@java
                  </span>
                </h3>
              </div>

              <div class="post_header-discription">
                <p>Java 18 is now available! #Java18 #JDK18 #openjdk</p>
                <br />
                <p>
                  Download now: https://social.ora.cl/6012KoqQ0 <br />
                  Release notes: https://social.ora.cl/6013KoqQF <br />
                </p>
              </div>
            </div>
            <img src="images/post-image.jpg" alt="java18" />

            <div class="post_footer">
              <span class="material-icons">chat</span>
              <span class="material-icons">repeat</span>
              <span class="material-icons">favorite_border</span>
              <span class="material-icons">file_upload</span>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="post_profile-image">
            <img src="images/page-profile-image.png" alt="java-logo" />
          </div>

          <div class="post_body">
            <div class="post_header">
              <div class="post_header-text">
                <h3>
                  Java
                  <span class="header-icon-section">
                    <span class="material-icons post_badge">verified</span>@java
                  </span>
                </h3>
              </div>

              <div class="post_header-discription">
                <p>Java 18 is now available! #Java18 #JDK18 #openjdk</p>
                <br />
                <p>
                  Download now: https://social.ora.cl/6012KoqQ0 <br />
                  Release notes: https://social.ora.cl/6013KoqQF <br />
                  API Javadoc: https://social.ora.cl/6015KoqQN <br />
                  Features: https://social.ora.cl/6016KoqQ4 <br />
                </p>
              </div>
            </div>
            <img src="images/post-image.jpg" alt="java18" />

            <div class="post_footer">
              <span class="material-icons">chat</span>
              <span class="material-icons">repeat</span>
              <span class="material-icons">favorite_border</span>
              <span class="material-icons">file_upload</span>
            </div>
          </div>
        </div> -->
    </main>
    <!-- main section end -->

    <!-- aside element start -->
    <aside>
      <div class="tweet_box">
        <form>
          <div class="tweet_box-input">
            <img src="images/profilePic.jpeg" alt="profile imagw" />
            <input type="text" placeholder="search" class="search" />
            <!-- <button class="">Tweet</button> -->
          </div>
        </form>
      </div>
      <div class="aside_input">
        <h2>Subscribe to Premium</h2>
        <p>
          Subscribe to Unlock new features, and if eligible, receive a share of
          ads revenue
        </p>
        <button class="subscribe_btn">Subscribe</button>
      </div>

      <div class="aside_container">
        <h2>Trends For You</h2>
        <ul class="trends">
          <li class="trends_item">
            <div>
              <h3>News &dot; Trending</h3>
              <h1>BREAKING NEWS</h1>
              <h5>195K Posts</h5>
            </div>
            <div>
              <i class="fa fa-ellipsis-h"></i>

            </div>
          </li>
          <li class="trends_item">
            <div>
              <h3>News &dot; Trending</h3>
              <h1>Israel</h1>
              <h5>5.7M Posts</h5>
            </div>
            <div>
              <i class="fa fa-ellipsis-h"></i>

            </div>
          </li>
          <li class="trends_item">
            <div>
              <h3>News &dot; Trending</h3>
              <h1>WAEC</h1>
              <h5>15K Posts</h5>
            </div>
            <div>
              <i class="fa fa-ellipsis-h"></i>
            </div>
          </li>
          <li class="trends_item">
            <div>
              <h3>News &dot; Trending</h3>
              <h1>Apple</h1>
              <h5>1.4M Posts</h5>
            </div>
            <div>
              <i class="fa fa-ellipsis-h"></i>
            </div>
          </li>
          <li class="trends_item">
            <div>
              <h3>News &dot; Trending</h3>
              <h1>Horizon</h1>
              <h5>895K Posts</h5>
            </div>
            <div>
              <i class="fa fa-ellipsis-h"></i>
            </div>
          </li>
        </ul>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </aside>
    <!-- aside element ends -->
    </body>
  </section>

</html>