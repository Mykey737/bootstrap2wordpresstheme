<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>

        <meta charset="utf-8">
        <title>Bootstrap to Wordpress 2.0</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php wp_head() ?>
        
    </head>

    <body class="blog">

        <div id="top-navigation">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-md-6">
                <nav class="main-menu">
                  <ul class="top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled">
                    <li class="menu-item"><a href="index.html">Home</a></li>
                    <li class="menu-item menu-item-has-children"><a href="index.html">Blog</a>
                      <ul class="sub-menu">
                        <li class="menu-item"><a href="index.html">Single post</a></li>
                        <li class="menu-item"><a href="index.html">Widgets</a></li>
                        <li class="menu-item"><a href="index.html">Contact</a></li>
                        <li class="menu-item menu-item-has-children"><a href="index.html">Blog</a>
                          <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Blog</a></li>
                            <li class="menu-item"><a href="index.html">FAQ</a></li>
                            <li class="menu-item"><a href="index.html">Contact</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item"><a href="widgets.html">Widgets</a></li>
                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                    <li class="menu-item special-menu"><a href="join.html">Join</a></li>
                  </ul>
                </nav>
      
                <button type="button" class="navbar-open">
                  <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                </button>
      
              </div>
            </div>
      
            <!-- Mobile Menu -->
            <div class="mobile-menu">
              <div class="menu-backdrop"></div>
              <div class="close-btn">
                <i class="flaticon flaticon-close"></i>
              </div>
              <nav class="menu-box">
                <ul class="navigation clearfix"></ul>
              </nav>
            </div>
      
          </div>
        </div>
      
        <section class="title-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
                <p class="tag-line sub-title">Bootstrap to WordPress Course 2.0</p>
                <h1 class="page-title">Blog</h1>
              </div>
            </div>
          </div>
        </section>
      
        <section class="subscribe-bar">
          <div class="container">
            <div class="row flex-vertical-center">
              <div class="col-sm-6">
                <p><strong>Want to save 20% on the course?</strong> Enter you email and we'll send you the discount code!</p>
              </div>
              <div class="col-sm-6">
                <form class="" action="index.html" method="post">
                  <div class="row">
                    <div class="col-lg-8">
                      <input type="text" name="" value="">
                    </div>
                    <div class="col-lg-4">
                      <button type="button" name="button" class="btn btn-invert">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      
        <div class="content-area">
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2 overflow-hidden">
                <article class="post my-5">
                  <div class="meta">
                    <span>Mar 7, 2024</span>
                  </div>
                  <h2><a href="#">Blog post title</a></h2>
                  <p class="excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, quia. Hic, temporibus? Aspernatur a ea consequatur. Corrupti soluta nostrum asperiores iure cupiditate, tempora velit beatae magnam maxime tempore vero dolor!
                  </p>
                  <a href="#" class="read-more">Read the full post -&gt;</a>
                </article>
      
                <article class="post my-5">
                  <div class="meta">
                    <span>Mar 7, 2024</span>
                  </div>
                  <h2><a href="#">Blog post title</a></h2>
                  <p class="excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, quia. Hic, temporibus? Aspernatur a ea consequatur. Corrupti soluta nostrum asperiores iure cupiditate, tempora velit beatae magnam maxime tempore vero dolor!
                  </p>
                  <a href="#" class="read-more">Read the full post -&gt;</a>
                </article>
      
                <article class="post my-5">
                  <div class="meta">
                    <span>Mar 7, 2024</span>
                  </div>
                  <h2><a href="#">Blog post title</a></h2>
                  <p class="excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, quia. Hic, temporibus? Aspernatur a ea consequatur. Corrupti soluta nostrum asperiores iure cupiditate, tempora velit beatae magnam maxime tempore vero dolor!
                  </p>
                  <a href="#" class="read-more">Read the full post -&gt;</a>
                </article>
      
                <article class="post my-5">
                  <div class="meta">
                    <span>Mar 7, 2024</span>
                  </div>
                  <h2><a href="#">Blog post title</a></h2>
                  <p class="excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, quia. Hic, temporibus? Aspernatur a ea consequatur. Corrupti soluta nostrum asperiores iure cupiditate, tempora velit beatae magnam maxime tempore vero dolor!
                  </p>
                  <a href="#" class="read-more">Read the full post -&gt;</a>
                </article>
      
                <article class="post my-5">
                  <div class="meta">
                    <span>Mar 7, 2024</span>
                  </div>
                  <h2><a href="#">Blog post title</a></h2>
                  <p class="excerpt">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, quia. Hic, temporibus? Aspernatur a ea consequatur. Corrupti soluta nostrum asperiores iure cupiditate, tempora velit beatae magnam maxime tempore vero dolor!
                  </p>
                  <a href="#" class="read-more">Read the full post -&gt;</a>
                </article>
      
              </div>
            </div>
          </div>
        </div>
      
        <footer>
          <div class="footer-calltoaction text-center">
            <div class="container">
              <div class="row">
                <div class="col-md-8 offset-md-2 overflow-hidden">
                  <p class="sub-title">Join the course</p>
                  <h2>Bootstrap To Wordpress 2.0</h2>
                  <p>Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginner in 2024 and beyond!</p>
                  <a href="#" class="btn btn-primary">Join now -&gt;</a>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright text-center">
            <p>&copy; 2024 Mike Pena Web Design</p>
          </div>
        </footer>
      
        <?php wp_footer(); ?>
        
      </body>

</html>