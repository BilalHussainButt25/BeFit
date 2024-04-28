<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Responsive Fitness Website</title>
  
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts      -->

    <header class="header">
      <a href="#" class="logo"> <span>Fitness</span>Arena </a>

      <div id="menu-btn" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#features">features</a>
        <a href="#pricing">pricing</a>
        <a href="#trainers">trainers</a>
        <a href="#blogs">blogs</a>
      </nav>
    </header>

    <!-- header section ends     -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide slide"
            style="
              background: url(images/photo-1605296867304-46d5465a13f1.jpg)
                no-repeat;
            "
          >
            <div class="content">
              <span>be strong, be fit</span>
              <h3>Unleash your potential - lift, grow, repeat.</h3>
              <a href="register.php" class="btn">get started</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="
              background: url(images/muscular-young-man-lifting-weights-black-background_7502-7692.avif)
                no-repeat;
            "
          >
            <div class="content">
              <span>be strong, be fit</span>
              <h3>Make yourself stronger than your excuses.</h3>
              <a href="register.php" class="btn">get started</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(images/home-bg-3.jpg) no-repeat"
          >
            <div class="content">
              <span>be strong, be fit</span>
              <h3>Never Quit.</h3>
              <a href="register.php" class="btn">get started</a>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <div class="image">
        <img
          src="images/brutal-strong-bodybuilder-athletic-men-pumping-up-muscles-with-dumbbells_174475-671.avif"
          alt=""
        />
      </div>

      <div class="content">
        <span>about us</span>
        <h3 class="title">Every day is a chance to become better</h3>
        <p>
          Join Fitness arena and experience the ultimate fitness community, Our
          state-of-the-art facility and expert trainers will help you achieve
          your fitness goals, while help you achieve your fitness goals. With
          flexible membershipoptions, there's never a better time to get
          started.
        </p>
        <div class="box-container">
          <div class="box">
            <h3><i class="fas fa-check"></i>body and mind</h3>
            <p>
              We believe that a strong body and mind go hand in hand - join us
              to achieve both.
            </p>
          </div>
          <div class="box">
            <h3><i class="fas fa-check"></i>healthy life</h3>
            <p>
              Join Fitness Arena to make your fitness a priority and have a
              healthier life.
            </p>
          </div>
          <div class="box">
            <h3><i class="fas fa-check"></i>strategies</h3>
            <p>
              Our expert trainers will work with you to develop personalized
              fitness and wellness strategies that help you reah your goals.
            </p>
          </div>
          <div class="box">
            <h3><i class="fas fa-check"></i>workout</h3>
            <p>
              achieve our challenging and effective workouts that are designed
              to help you achieve your fitness goals.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- features section starts  -->

    <section class="features" id="features">
      <h1 class="heading"><span>gym features</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/jay cutler.jpg" alt="" />
          </div>
          <div class="content">
            <img src="images/icon-1.png" alt="" />
            <h3>body building</h3>
            <p>
              Strength does not come from physical capacity, It comes from an
              indomitable will.
            </p>
          </div>
        </div>

        <div class="box second">
          <div class="image">
            <img src="images/Fitness Model.jpg" alt="" />
          </div>
          <div class="content">
            <img src="images/icon-2.png" alt="" />
            <h3>gym for men</h3>
            <p>
              You don't have to be great to start, but you have to start to be
              great.
            </p>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img
              src="images/logan-weaver-lgnwvr-9D_rUDe7xvA-unsplash.jpg"
              alt=""
            />
          </div>
          <div class="content">
            <img src="images/icon-3.png" alt="" />
            <h3>gym for women</h3>
            <p>The only bad workout is the one that didn't happen.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- features section ends -->

    <!-- pricing section starts  -->

    <section class="pricing" id="pricing">
      <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your Comfort</h3>
        <p>
          "Great news, dear gym-goers! We're exited to let you know that we're
          now offering incredibily affordable prices for our top-notch fitness
          services that won't break the bank."
        </p>
        <p><i class="fas fa-check"></i> Cardio exercise</p>
        <p><i class="fas fa-check"></i> Weight lifting</p>
        <p><i class="fas fa-check"></i> Boxing</p>
        <p><i class="fas fa-check"></i> Bodybuilding</p>
      </div>

      <div class="plan basic">
        <h3>Basic Plan</h3>
        <div class="price"><span>Pkr/-</span>3000<span>/mo</span></div>
        <div class="list">
          <p><i class="fas fa-check"></i> cardio exercise</p>
          <p><i class="fas fa-check"></i> weight lifting</p>
          <p><i class="fas fa-check"></i> diet plans</p>
          <p><i class="fas fa-check"></i> Locker</p>
          <p><i class="fas fa-check"></i> Parking Space</p>
        </div>
        <a href="register.php" class="btn">get started</a>
      </div>

      <div class="plan">
        <h3>Premium Plan</h3>
        <div class="price"><span>Pkr/-</span>7000<span>/mo</span></div>
        <div class="list">
          <p><i class="fas fa-check"></i> Personal Trainer</p>
          <p><i class="fas fa-check"></i> Swimming Pool</p>
          <p><i class="fas fa-check"></i> Spa Service</p>
          <p><i class="fas fa-check"></i> Yoga Classes</p>
          <p><i class="fas fa-check"></i> All the Facilities in Basic Plan</p>
        </div>
        <a href="register.php" class="btn">get started</a>
      </div>
    </section>

    <!-- pricing section ends -->

    <!-- trainers section starts  -->

    <section class="trainers" id="trainers">
      <h1 class="heading"><span>expert trainers</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/Ross-Dickerson.jpg" alt="" />
          <div class="content">
            <span>expert trainer</span>
            <h3>Ross Dickerson</h3>
            <div class="share">
              <a
                href="https://www.facebook.com/DickersonRoss/"
                target="_blank"
                class="fab fa-facebook-f"
              ></a>
              <a
                href="https://twitter.com/DickersonRoss?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                target="_blank"
                class="fab fa-twitter"
              ></a>
              <a
                href="https://www.instagram.com/dickersonross/?hl=en"
                target="_blank"
                class="fab fa-instagram"
              ></a>
              <a
                href="https://uk.linkedin.com/in/dickersonross"
                target="_blank"
                class="fab fa-linkedin"
              ></a>
            </div>
          </div>
        </div>

        <div class="box">
          <img src="images/sergi constance.jpg" alt="" />
          <div class="content">
            <span>expert trainer</span>
            <h3>Sergi Constance</h3>
            <div class="share">
              <a
                href="https://www.facebook.com/sergiconstanceweb/"
                target="_blank"
                class="fab fa-facebook-f"
              ></a>
              <a
                href="https://twitter.com/Sergiconstance"
                target="_blank"
                class="fab fa-twitter"
              ></a>
              <a
                href="https://www.instagram.com/sergiconstance/?hl=en"
                target="_blank"
                class="fab fa-instagram"
              ></a>
              <a
                href="https://in.linkedin.com/in/sergi-constance-aa3012b0"
                target="_blank"
                class="fab fa-linkedin"
              ></a>
            </div>
          </div>
        </div>

        <!-- <div class="box">
          <img src="images/aaron williamson.jpeg" alt="" />
          <div class="content">
            <span>expert trainer</span>
            <h3>Aaron Williamson</h3>
            <div class="share">
              <a
                href="https://www.facebook.com/public/Aaron-Williamson"
                target="_blank"
                class="fab fa-facebook-f"
              ></a>
              <a
                href="https://twitter.com/avwilliamson?lang=en"
                target="_blank"
                class="fab fa-twitter"
              ></a>
              <a
                href="https://www.instagram.com/aaronvwilliamson/?hl=en"
                target="_blank"
                class="fab fa-instagram"
              ></a>
              <a
                href="https://www.linkedin.com/pub/dir/Aaron/Williamson"
                target="_blank"
                class="fab fa-linkedin"
              ></a>
            </div>
          </div>
        </div> -->

        <div class="box">
          <img src="images/James ellis.jpg" alt="" />
          <div class="content">
            <span>expert trainer</span>
            <h3>Shaun stafford</h3>
            <div class="share">
              <a
                href="https://www.facebook.com/shaunstaffordfitness/"
                target="_blank"
                class="fab fa-facebook-f"
              ></a>
              <a
                href="https://twitter.com/shaunstafford?lang=en"
                target="_blank"
                class="fab fa-twitter"
              ></a>
              <a
                href="https://www.instagram.com/shaunstafford/?hl=en"
                target="_blank"
                class="fab fa-instagram"
              ></a>
              <a
                href="https://uk.linkedin.com/in/shaun-stafford-b23484165"
                target="_blank"
                class="fab fa-linkedin"
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- trainers section ends -->

    <!-- banner section starts  -->

    <section class="banner">
      <span>join us now</span>
      <h3>get Flat 50% discount</h3>
      <p>
        Transform your body and your wallet with our 50% discount on membersip
        fee. Join now and start your fitness journey for less.
      </p>
      <a href="register.php" class="btn">get discount</a>
    </section>

    <!-- banner section ends -->

    <!-- review section starts  -->

    <section class="review">
      <div class="information">
        <span>Feesback</span>
        <h3>what our clients says</h3>
        <p>
          We have more than 500 Members at our Gym, They are having a wonderfull
          time at our gym Here are the thoughts of some of our Members. Hope it
          will encourage others to start their fitness Journey, AS ther's no bad
          time to start.
        </p>
      </div>

      <div class="swiper review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <p>
              Great gym, clean facilities and high quality equipment Fitness
              Arena covers it all for your dreams.
            </p>
            <div class="user">
              <img src="images/r1.avif" alt="" />
              <div class="info">
                <h3>Bilal Butt</h3>
                <span>Gym Member</span>
              </div>
              <i class="fas fa-quote-left"></i>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              The trainers at Fitness Arena are knowledgeable and always willing
              to help me achieve my goals.
            </p>
            <div class="user">
              <img src="images/r2.avif" alt="" />
              <div class="info">
                <h3>Abubakar</h3>
                <span>Gym Member</span>
              </div>
              <i class="fas fa-quote-left"></i>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Variety of classes with knowledgeable instructors makes it a great
              place to workout and learn.
            </p>
            <div class="user">
              <img src="images/r3.avif" alt="" />
              <div class="info">
                <h3>Faizan</h3>
                <span>Gym Member</span>
              </div>
              <i class="fas fa-quote-left"></i>
            </div>
          </div>

          <div class="swiper-slide slide">
            <p>
              Fitness Arena has a variety of Updated equipments, I never have to
              wait for my cardio equipments.
            </p>
            <div class="user">
              <img src="images/r4.avif" alt="" />
              <div class="info">
                <h3>Ahsan</h3>
                <span>Gym Member</span>
              </div>
              <i class="fas fa-quote-left"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">
      <h1 class="heading"><span>daily posts</span></h1>

      <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/p1.jpg" alt="" />
            </div>
            <div class="content">
              <div class="link">
                <a href="#">by Thomas Jefferson</a> <span>|</span>
                <a href="#">13th feb, 2023</a>
              </div>
              <h3>
                If you want something you've never had, you must be willing to
                do something you've never done, To achieve it.
              </h3>
              <p>Do whatever it takes to achieve it..</p>
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/p2.jpg" alt="" />
            </div>
            <div class="content">
              <div class="link">
                <a href="#">by Endrickson</a> <span>|</span>
                <a href="#">14th feb, 2023</a>
              </div>
              <h3>
                Your body can stand almost anything. Its your mind that you have
                to convince for growth....
              </h3>
              <p>
                If you are mentally strong no one can defeat you except
                yourself.
              </p>
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/p3.jpg" alt="" />
            </div>
            <div class="content">
              <div class="link">
                <a href="#">by Muhammad ALi</a> <span>|</span>
                <a href="#">15th feb, 2023</a>
              </div>
              <h3>
                I dont count my sit-ups. I only start counting when it starts
                hurting because they're the only ones that count.
              </h3>
              <p>Don't look for easy path.</p>
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/p4.jpg" alt="" />
            </div>
            <div class="content">
              <div class="link">
                <a href="#">by Jack LaLanne</a> <span>|</span>
                <a href="#">16th feb, 2023</a>
              </div>
              <h3>
                Your health account, your bank account, they're the same thing.
                The more you put in, the more you can take out.
              </h3>
              <p>Don't ignore any of them.</p>
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/p5.jpg" alt="" />
            </div>
            <div class="content">
              <div class="link">
                <a href="#">by Lou Holtz</a> <span>|</span>
                <a href="#">17th feb, 2023</a>
              </div>
              <h3>
                Ability is what you're capable of doing. Motivation determines
                what you do. Attitude determines how well you do it.
              </h3>
              <p>True....</p>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a class="links" href="#home">home</a>
          <a class="links" href="#about">about</a>
          <a class="links" href="#features">features</a>
          <a class="links" href="#pricing">pricing</a>
          <a class="links" href="#trainers">trainers</a>
          <a class="links" href="#blogs">blogs</a>
        </div>

        <div class="box">
          <h3>opening hours</h3>
          <p>monday : <i> 7:00am - 10:30pm </i></p>
          <p>tuesday : <i> 7:00am - 10:30pm </i></p>
          <p>wednesday : <i> 7:00am - 10:30pm </i></p>
          <p>friday : <i> 7:00am - 10:30pm </i></p>
          <p>saturday : <i> 7:00am - 10:30pm </i></p>
          <p>sunday : <i> closed </i></p>
        </div>

        <div class="box">
          <h3>Contact info.</h3>
          <p><i class="fas fa-phone"></i> +92-349-0028213</p>
          <p><i class="fas fa-phone"></i> +92-334-9385303</p>
          <p><i class="fas fa-envelope"></i> fitnessarena@gmail.com</p>
          <p><i class="fas fa-map"></i> 50700 Gujrat, Pakistan</p>
          <div class="share">
            <a
              href="https://www.facebook.com/bilalbutt.butt.923?mibextid=ZbWKwL"
              target="_blank"
              class="fab fa-facebook-f"
            ></a>
            <a
              href="https://twitter.com/Bilalhussainbu2?t=VswfJlBLssGQhkYodpJ6Nw&s=09"
              target="_blank"
              class="fab fa-twitter"
            ></a>
            <a
              href="https://www.linkedin.com/in/bilal-hussain-0058871b9"
              target="_blank"
              class="fab fa-linkedin"
            ></a>
            <a
              href="https://www.instagram.com/bilalbutt_252002/"
              target="_blank"
              class="fab fa-instagram"
            ></a>
          </div>
        </div>

        <div class="box">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <form action="">
            <input
              type="email"
              name=""
              class="email"
              placeholder="enter your email"
              id=""
            />
            <input type="submit" value="subscribe" class="btn" />
          </form>
        </div>
      </div>
    </section>

    <div class="credit">
      created by <span>BHB private limited</span> | all rights reserved!
    </div>

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
