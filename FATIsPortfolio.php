
<?php
// Check if the cookie 'visited' is set
if (!isset($_COOKIE['visited'])) {
    // Set a cookie to expire in 1 day (86400 seconds)
    setcookie('visited', '', time() - 3600, "/");
    $showPopup = true;
} else {
    $showPopup = false;
}

// Optional: Uncomment this block to clear the 'visited' cookie for testing
// setcookie('visited', '', time() - 3600, "/"); // This will remove the cookie
?>

<?php
// Load Composer's autoloader if installed with Composer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust if PHPMailer is installed via Composer

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;                      // Disable verbose debug output (2 for debugging)
    $mail->isSMTP();                           // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';      // Set SMTP server
    $mail->SMTPAuth   = true;                  // Enable SMTP authentication
    $mail->Username   = 'your-email@gmail.com'; // Your Gmail address
    $mail->Password   = 'your-password';       // Your Gmail password (Note: Use App Password for Gmail)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
    $mail->Port       = 587;                   // TCP port for TLS

    // Recipients
    $mail->setFrom('your-email@gmail.com', 'Your Name'); // Sender's email and name
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Add a recipient (email and name)
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';               // Subject of the email
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>'; // HTML body
    $mail->AltBody = 'This is the plain text version of the message'; // Plain text body

    // Send email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Willy Wonkas - Personal Portfolio Website Template" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="willy wonka" />
    <title>Fatlind's Portfolio</title>
  <!--favicon-img--> 
   <link rel="icon" type="image/png" href="images/favicon.png">
   <!--favicon-img-->
   <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>

    <script>
        function showPopup() {
            // JavaScript alert with custom text and button
            alert("NOTE: This Portfolio is just to show u about me and my work. It is a taken template from internet!");
        }
    </script>
</head>
<body>

<?php if ($showPopup): ?>
    <script>
        // Trigger the popup only if it's the user's first visit
        showPopup();
    </script>
<?php endif; ?>

<?php 
include("Includes/Connect.php");
?>

    <!--contains all the div-->
    <div id="all">
    <!--mouse  follower-->
        <div class="cursor"></div>
    <!--mouse  follower-->
    <!--loader-->
        <div id="loader">
            <span class="color">Fatlind</span>Hamza
        </div>
    <!--loader-end-->
    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
    <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <img src="images/fAA.png" alt="logo" id="home-link">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#home1" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
                <a href="#" data-text="BLOG" id="blog-link" >BLOG</a>
                <a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
            </div>
        </div>
        <!--Navigator-Fullscreen END-->
          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="images/fAA.png" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            <div class="social-media-links">
               <a href="https://www.instagram.com/fatlind.hz/"><img src="images/instagram logo.png" class="social-media" alt="instagram-logo"></a><!--Your instagram homepage link inser in place of "#"-->
                <a href="https://www.facebook.com/fatlind.hamza.3?mibextid=LQQJ4d"><img src="images/facebook logo.png" class="social-media" alt="facebook-logo"></a>
                <a href="https://www.linkedin.com/in/fatlind-hamza-2b35a027a/"><img src="images/linkedin logo.png" class="social-media" alt="linkedin-logo"></a>
                

            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="firstline"><span class="color">Fatlind </span>Hamza</div>
                <div class="secondline">
                I'm a
            <span class="txt-rotate color" data-period="1200"data-rotate='[ " Developer.", "Designer.", "Software Designer." ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="Mailto:Fatlindhamza0127@gmail.com"><img src="images/mail.png" alt="email-pic" class="contactpic"></a><!--Your email Id write in place of "#"-->
                <a href="Tel:043 889 025"><img src="images/call.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->
                    </div>    
            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/unnamed-removebg-preview.png" alt="logo" style="-icab-box-shadow:   12px 12px 29px #555;" >
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->
        <!--about-->
        <div id="about">
            <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    About <span class="color">Me</span>
                    <span class ="header-caption">Get to Know <span class="color"> me.</span></span>
                </div>
                <div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
               <span class="about-first-line">
                    I'm creative 
                    <span class="color">web developer</span>
                     based in Prizren, KOSOVO </span>
                     <br>
               <span class="about-second-line"> With 4 yreas as a junior Web Developer and 2 years of experience as a advanced Web developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step while working.</span>
               <div class="cv">
                <a href="Fati-cv1.pdf"><button>Download <span class="colors">CV</span></button></a>
            </div>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/Fatlind-pc2.png" alt="Your Image" class="imgabout">
            </div>
            </div>
    
            </div>
            <!--services start-->
            <div id="services">
                <div class="color-changer">
                    <div class="color-panel">
                        <img src="images/gear.png" alt="">
                    </div>
                    <div class="color-selector">
                        <div class="heading">Custom Colors</div>
                        <div class="colors">
                            <ul >
                            <li>
                                <a href="#0" class="color-red " title="color-red"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-purple" title="color-purple"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-malt" title="color-malt"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-green" title="color-green"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-blue" title="color-blue"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-orange" title="color-orange"></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    </div>
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">My</span> Services
                    </div>
            <!--services header end-->
            <!--services content-->
                    <div class="services-content">
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/coding.png" alt="service-one">
                               </div>
                               <div class="service-description">
                                <h2>Web Structuring</h2>
                                <p>The structure of the web is one of the basic things that must be completed with professionalism, which is sensible when designing because there may be disruption in the future.</p>
                               </div>
                           </div>
                           <div class="service-two service wow">
                               <div class="service-img">
                               <img src="images/instagram.png" alt="service-two">
                               </div>
                               <div class="service-description">
                                <h2>Data Structured</h2>
                                <p>The structuration of data's needs a lot of work to have the most simply way to find products, classed them, and update them when we need, otherwise it also needs to make a simply administration wich allow us to add cattergories, products etc...</p>
                               </div>
                           </div>
                           <div class="service-three service wow">
                            <div class="service-img">
                               <img src="images/bulb.png" alt="service-three">
                            </div>
                            <div class="service-description">
                                <h2>Web Designing</h2>
                                <p>The design of a web page is a reflection that attracts the customer and has a great impact on them. 
                                It also requires color matching as required by the type of web. And requires creativity to design it as beautifully as possible, which I have that.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!--services content end-->
            <div id="skills">
        <div class="skills-header">
            My <span class="color">Skills</span>
        </div>
        <div class="skills-content" style="text-align: center;">
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">HTML/CSS</div>
                </div>
                <div class="html-prog prog">
                    <div class="html-progress">100%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">Javascript</div>
                </div>
                <div class="html-prog prog">
                    <div class="js-progress">90%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">Adobe Premier Pro</div>
                </div>
                <div class="html-prog prog">
                    <div class="adobe-progress">65%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">Laravel</div>
                </div>
                <div class="html-prog prog">
                    <div class="laravel-progress">80%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">React Native</div>
                </div>
                <div class="html-prog prog">
                    <div class="react-progress">75%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">PHP</div>
                </div>
                <div class="html-prog prog">
                    <div class="php-progress">90%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">JQuery</div>
                </div>
                <div class="html-prog prog">
                    <div class="jquery-progress">95%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">Bootstrap</div>
                </div>
                <div class="html-prog prog">
                    <div class="bootstrap-progress">100%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">MySQL</div>
                </div>
                <div class="html-prog prog">
                    <div class="mysql-progress">80%</div>
                </div>
            </div>
            <div class="skill-html skill">
                <div class="skill-text">
                    <div class="html">Wix/Wordpress</div>
                </div>
                <div class="html-prog prog">
                    <div class="wordpress-progress">90%</div>
                </div>
            </div>
        </div>
    </div>
    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
             <div class="footer-text">
                 <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Fatlind Hamza
             </div>
            </div>
    <!--copyright-section-->
        </div>
        <!--about end-->
        <!--portfolio-->
        <div id="portfolio">
            <div class="color-changer">
                <div class="color-panel">
                    <img src="images/gear.png" alt="">
                </div>
                <div class="color-selector">
                    <div class="heading">Custom Colors</div>
                    <div class="colors">
                        <ul >
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                        </ul>
                    </div>
                </div>
                </div>
            <div class="portfolio-header"> <span class="color"> My </span> Portfolio
            <span class ="header-caption"> Some Of My <span class="color"> Works</span></span></div>
             <div id="portfolio-content">
                 <div class="portfolio portfolio-first">
                     <div class="portfolio-image">
                        <img src="images/ALCATRAZFASHION.png" alt="portfolio-first">
                     </div>
                     <div class="portfolio-text">
                         <h2>Alcatrazz Fashion </h2>
                         <p>This is my first E-commerce web that i created for my shop with my skills with Front-end - HTML/CSS/JS/BOOTSTRAP!</p>
                         <div class="button"><a href="HtmlCssJsProject/watcher-html/index.html"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                     </div>
                 </div>
                 <div class="portfolio portfolio-second">
                    <div class="portfolio-image">
                        <img src="images/eduflex.png" alt="portfolio-second">
                    </div>
                    <div class="portfolio-text">
                        <h2>EduFlex for School</h2>
                        <p>This is my php project with some regjister form and login simple, Php</p>
                        <div class="button"><a href="coliprojekt/index.php"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/Fati.png" alt="portfolio-third">
                    </div>
                    <div class="portfolio-text">
                        <h2>Shtepia Modes "FATI" - Laravel</h2>
                        <p>This is my e-Commerce Laracel Projekt, which is created about my wedding dresses shop, this is my biggest project ever and im trying to advance this project in time and lunch it on goole soon. </p>
                        <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/portfolio-fourth.jpg" alt="portfolio-fourth">
                    </div>
                    <div class="portfolio-text">
                        <h2>Wow Graphics</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                             expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                        <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
                 </div>
                    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
                <div class="footer-text">
                    <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Fatlind Hamza
                </div>
               </div>
       <!--copyright-section-->
             </div>
        <!--portfolio end-->
        <!--blog-->
        <div id="blog">
            <div class="color-changer">
                <div class="color-panel">
                    <img src="images/gear.png" alt="">
                </div>
                <div class="color-selector">
                    <div class="heading">Custom Colors</div>
                    <div class="colors">
                        <ul >
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                        </ul>
                    </div>
                </div>
                </div>
        <div class="blog-header"> Blogs</span>
            <span class ="header-caption"> My Latest <span class="color"> blog posts.</span></span></div>
            <div class="blog-content">
                 <div class="blogs">
                     <a href="#">
                     <div class="img">
                         <img src="images/post-one.jpg" alt="blog-one">
                        <div class="blog-date">8 May,20</div>
                     </div>
                     <div class="blog-text">
                         <h3>Harleys In Hawaai</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus alias dolore recusandae illum, corrupti quo 
                             veniam saepe aliquid! Quis voluptates ratione consequuntur vel, perferendis cum provident? Magnam fugiat voluptas
                              libero.</p>
                     </div></a>
                 </div>      
                 <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/post-two.jpg" alt="blog-two">
                        <div class="blog-date">16 Jan,20</div>
                    </div>
                    <div class="blog-text">
                        <h3>Key To Be Productive</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt maiores, 
                            recusandae cupiditate ducimus a non tempora, architecto obcaecati eaque ipsum assumenda harum dolorum iusto tenetur
                             eius eligendi dolor magnam sit!</p>
                    </div></a>
                </div>      
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/post-three.jpg" alt="blog-three">
                        <div class="blog-date">30 Nov,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Caffeine Addict</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo nostrum impedit 
                            ipsam perspiciatis ratione sapiente quasi optio reprehenderit, labore consequuntur suscipit cum quas.
                             Officiis dolorem asperiores, ut necessitatibus quas doloremque?</p>
                    </div></a>
                </div>
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/post-four.jpg" alt="blog-four">
                        <div class="blog-date">6 Jul,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Web Development</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, veniam ratione quam vitae,
                             quibusdam explicabo rem debitis velit ipsa repellat, impedit nulla fuga? Amet corporis praesentium quae.
                              Sed, quibusdam necessitatibus.</p>
                    </div></a>
                </div>  
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/post-five.jpg" alt="blog-five">
                        <div class="blog-date">1 Jun,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Work From Home</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sunt eum necessitatibus rem 
                            dignissimos nulla mollitia cumque, provident officiis non vitae? Animi aut doloremque illum, soluta hic minus 
                            sint explicabo..</p>
                    </div></a>
                </div>  
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/post-six.jpg" alt="blog-six">
                        <div class="blog-date">28 Feb,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Business Trip</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora dolorum fuga ratione, unde, 
                            ex quaerat iste numquam nemo nihil nobis rem sint quia recusandae dignissimos quos ut rerum nam.</p>
                    </div></a>
                </div>        
            </div>
               <!--copyright-section You Can Remove After Downloading-->
               <div class="footer">
                <div class="footer-text">
                    <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Fatlind Hamza
                </div>
               </div>
       <!--copyright-section-->
        </div>
        <!--blog end-->
        <!--contact-->
     <div id="contact">
        <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
         <div class="contact-header">Contact <span class="color"> Me</span>
        <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div></div>
        <div class="contact-content">
            <!--Contact form-->
             <div class="contact-form">
                 <div class="form-header">
                     Message Me
                 </div>
                 <form id="myForm" action="#">
                    <div class="input-line">
                        <input  id="name" type="text" placeholder="Name" class="input-name">
                        <input id="email" type="email" placeholder="Email"  class="input-name">
                    </div>
                    <input type="text" id="subject" placeholder="subject" class="input-subject">
                    <textarea id ="body" class="input-textarea" placeholder="message"></textarea>
                    <button type="button" id ="submit" value="send">Submit</button>
                 </form>
               
             </div>

             
            <!--Contact form-->
            <!--Contact information-->
             <div class="contact-info">
                <div class="contact-info-header">
                    Contact Info
                </div>
                <div class="contact-info-content">
                <div class="contect-info-content-line">
                    <img src="./images/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                        <h6>Name</h6>
                        <p>Fatlind Hamza</p>
                  </div>
                </div>
                <div class="contect-info-content-line">
                  <img src="./images/icon-location.png" class="icon" alt="location-icon">
                  <div class="contact-info-icon-text">
                      <h6>Location</h6>
                      <p>Prizren, Kosovo</p>
                </div>
              </div>
              <div class="contect-info-content-line">
                  <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                  <div class="contact-info-icon-text">
                      <h6>Call</h6>
                      <p>+383 49 889 025</p>
                </div>
              </div>
              
              <div class="contect-info-content-line">
                  <img src="./images/icon-email.png" class="icon" alt="email-icon">
                  <div class="contact-info-icon-text">
                      <h6>Email</h6>
                      <p>Fatlindhamza0127@gmail.com</p>
                </div>
              </div>
                </div>
            <!--Contact information end-->
           </div>
        </div>
                    <!--copyright-section You Can Remove After Downloading-->
                    <div class="footer">
                        <div class="footer-text">
                            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Fatlind Hamza
                        </div>
                       </div>
               <!--copyright-section-->
     </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>


</body>
</html>