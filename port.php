<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>My Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Welcome to my <span>PORTFOLIO</h3></span></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#projects" class="nav__link">Projects</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HELLO</span><br></h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>
                
                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="myphoto11.jpeg" alt="">
                </div>
                    <div>
                        <h1 class="about__subtitle">I am Swastika Pathak</h1>
                        <p class="about__text"><h4><span>IT STUDENT</span></h4><br>A creative and quick learner with highly motivated and
                            leadership skills to innovate new ideas in the field of
                            technology. <br>Dedicated and a passionate with good
                            problem solving skills and time management qualities.<br><br></p>
                        <a download href="SwastikaPathakResume.pdf" class="cv-btn">Download CV</a>
                        
                    </div>
                </div>
            </section>

            <!---===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">Html</span>
                        <span class="skills__name">CSS</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">C</span>
                        <span class="skills__name">C++</span>
                        <span class="skills__name">Python</span>
                        <span class="skills__name">Machine Learning</span>
                        
                    </div>
                </div>
            </section>
        

<!--Projects------>
<section id="projects" class="projects">
    <div class="section-title">
        <h1>Projects</h1>
    </div>
    <div class="projects-center">
        
        <article class="project">
            <div class="project-icon">
                <i class="fab fa-html5"></i>
            </div>
            <h2 class="project-title">EDA Project</h2>
            <p class="project-des">
                Analyzed how the Student's Performance is affected due to different factors with the help of Machine Learning using Python.
            </p>

        </article>
        
        <article class="project">
            <div class="project-icon">
                <i class="fab fa-css3"></i>
            </div>
            <h2 class="project-title">Sentiment Analysis</h2>
            <p class="project-des">
                Predicted the cost of used cars with the help of Machine Learning using Python.
            </p>
 
        </article>
    </div>
</section>

            <!--===== CONTACT =====-->
<?php
$nameErr = $emailErr = "";
$name = $email = $message= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">1806083@kiit.ac.in</span>

                        <h3 class="contact__subtitle">PHONE</h3>
                        <span class="contact__text">+91-6370415176</span>

                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">Bokaro Steel City<br>Jharkhand,India</span>
                    </div>
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact__form">    
                        <div class="contact__inputs">
                            <input type="text" placeholder="Your name" name="name" class="contact__input"><span class="error">* <?php echo $nameErr;?></span> 
                            <input type="mail" placeholder="Your email" name="email" class="contact__input"><span class="error">* <?php echo $emailErr;?></span>
                        </div>
                        <textarea name="message" id="" placeholder="Type your Message.." cols="0" rows="10" class="contact__input"></textarea>
                        <input type="submit" value="Send" name="send" class="contact__button">
                    </form>
                </div>
            </section>
            
        </main>
        
        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#skills" class="footer__link">Skills</a></li>
                        <li><a href="#projects" class="footer__link">Projects</a></li>
                        <li><a href="#contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <p class="copyright">Copyright &copy; Swastika.All rights reserved</p>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="http://www.linkedin.com/in/swastika-pathak-9737a71ba" class="footer__social"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://www.instagram.com/swastika_pathak_/" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com/Swastika-pathak" class="footer__social"><i class='bx bxl-github'></i></a>
                </div>
<?php                
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;
?>
            </div>
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="main11.js"></script>

    </body>
</html>