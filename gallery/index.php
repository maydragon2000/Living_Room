



<!doctype html>`
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css?v=0.1">
        <base href="https://pebblebrookseniorhomecare.com/"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assisted Living in Temecula Virtual Tour</title>
        <meta name="description" content="The best way to experience Pebble Brook Assisted Living is to visit us in person But here’s a quick way to look around virtually to our Assisted Living Facility">
        <meta name="keywords" content="Virtual tour, Assisted Living Virtual Tour, virtual tour assisted living, virtual tour of assisted living, virtual facility tour, Memory Care Facility Virtual Tour">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">
        <link rel="icon" type="image/png" href="https://www.pebblebrookseniorhomecare.com/img/icon.png"/>
                <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        
        <style>
            .p-text img{
                width: 100% !important;
            }
        </style>
       
       <script type="application/ld+json">
      {
        "@context": {
            "@vocab": "http:\/\/schema.org\/"
        },
        "@graph": [
            {
                "@id": "https:\/\/pebblebrookseniorhomecare.com",
                "@type": "Organization",
                "name": "Pebble Brook Senior Home Care",
                "url": "https:\/\/pebblebrookseniorhomecare.com\/",
                "logo": "https:\/\/pebblebrookseniorhomecare.com\/logo4.svg"
            },
            {
                "@type": "LocalBusiness",
                "parentOrganization": {
                    "name": "Pebble Brook Senior Home Care"
                },
                "name": "Pebble Brook Senior Home Care",
                "telephone": "(951) 303-0253",
                 "priceRange": "4000",
                "openingHoursSpecification": [
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Monday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Tuesday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Wednesday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Thursday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Friday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Saturday"
                        ],
                        "opens": null,
                        "closes": null
                    },
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Sunday"
                        ],
                        "opens": null,
                        "closes": null
                    }
                ],
                "address": {
                    "@type": "PostalAddress",
                    "name": "PBS Home Care - Pebble Brook Senior Home Care",
                    "streetAddress": "33722 Pebble Brook Circle",
                    "addressLocality": "Temecula",
                    "addressRegion": "CA",
                    "postalCode": "92592"
                },
                "image": "https:\/\/pebblebrookseniorhomecare.com\/logo4.svg"
            }
        ]
    }
      

    </script>






    </head>
<body>



    <?php //navbar here

        include("../navbar.php");
    ?>
    	
    <div class="body-wrapper" style="position: relative">
        <div class="section-search" style="display: none">
            <div class="search-bar"><strong>Contact Us</strong	>
              <div class="clear hide" ></div>
            </div>
        </div>

      <script>
            // document.getElementById('search').keypress(function () {
            //     document.getElementById('search').removeClass('error');
            // });

            // const form = document.getElementById('search_form');
            // form.addEventListener('submit', searcht);

            // function searcht(event) {
            //     event.preventDefault();
            //     var term = document.getElementById('search').value;
            //     term = term.replace(/\s+/g, '-').toLowerCase();

            //     if (term == '') {
            //         document.getElementById('search').focus();
            //         document.getElementById('search').addClass('error');
            //     } else {
            //         window.location.href = "search/" + term + "/";
            //     }
            // }
            let scrollpos = window.scrollY
            const header = document.querySelector(".header-wrapper-fixed")
            const header_height = header.offsetHeight

            const add_class_on_scroll = () => header.classList.add("is-sticky")
            const remove_class_on_scroll = () => header.classList.remove("is-sticky")

            window.addEventListener('scroll', function() { 
                scrollpos = window.scrollY;

                if (scrollpos >= header_height) { add_class_on_scroll() }
                else { remove_class_on_scroll() }
            })

            
            let dropCheckboxNew = document.getElementById("drop"); 
            dropCheckboxNew.addEventListener("change", function() { 
                let mainMenu = document.getElementsByClassName("main-ul")[0];
                let menuOverlay = document.getElementsByClassName("menu-overlay")[0];
                
                    if (this.checked) { 
                        mainMenu.style.display = "block";
                        menuOverlay.classList.add('menu-is-open')
                    } else { 
                        mainMenu.style.display = "none";
                        menuOverlay.classList.remove('menu-is-open')
                    } 
            }); 

            let dropCheckboxNewMob = document.getElementById("mob-drop"); 
            dropCheckboxNewMob.addEventListener("change", function() { 
                let mainMenu = document.getElementsByClassName("main-ul")[0];
                let menuOverlay = document.getElementsByClassName("menu-overlay")[0];
                
                    if (this.checked) { 
                        mainMenu.style.display = "block";
                        menuOverlay.classList.add('menu-is-open')
                    } else { 
                        mainMenu.style.display = "none";
                        menuOverlay.classList.remove('menu-is-open')
                    } 
            }); 

            document.querySelector('.pg_close').addEventListener('click',function () {
                let input = document.querySelector('#check01')
                input.checked = false
            })

            function showSharePopup() {
                var pop = document.getElementById("share-popup");
                pop.classList.remove("hide-popup");
            }

            function hideSharePopup() {
                var pop = document.getElementById("share-popup");
                pop.classList.add("hide-popup");
            }
            function showDownloadPopup() {
                var pop = document.getElementById("download-popup");
                pop.classList.remove("hide-popup");
            }

            function hideDownloadPopup() {
                var pop = document.getElementById("download-popup");
                pop.classList.add("hide-popup");
            }
        </script>
    <div class="section-social-mobile">

        <img src="/house1.jpg" alt="Facility Main" title="Home Care Front" style=" padding-right: 0;
        max-width: 100%;
        border-radius: 50%;
        width: 55px;
        height: 55px;
        object-fit: cover;
        border: 3px solid #fff;
        margin-right: 8px;
        ">

                <?php //prices here

        include("../pricesMobile.php");
    ?>

    </div>
    <div class="display-flex">
        <div class="section-content-nav-gallery" style="width: 100%">
            <div class="section-desktop">
                <div class="flex-item flex-item-img">
                    <img class="flex-item-img-img" src="https://pebblebrookseniorhomecare.com/house1.jpg" alt="Home Care Facility" title="RCFE front entrance">
                </div>
                <div class="header-divider"></div>
                <?php //prices here

        include("../prices.php");
    ?>
              
            </div>

            <div class="content-nav-list" style="width: 94%">
             
    <div class="contact-form">
             <?php 
      $msg ="";
      if(!empty($_POST)){
        if(!empty($_POST['name']) && isset($_POST['name'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          $txt ='<div style="margin:0 10% 0 10%;border: 1px solid #cdcdcd;">
                  <div class="col-sm-6 col-sm-offset-3">
                      <div class="panel panel-primary">
                          <div class="panel-body">
                              <div style="padding: 30px;">
                                  <p>Name: '.$name.',</p>
                                  <p>Email: '.$email.',</p>
                                  <p>'.$message.'</p>
                                  <p>Regards</p>
                                  <p>LOGO</p>
                                  <div style="margin-top:10%;">
                                      <hr>
                                      <small class="text-center" style="display:block;">&copy; '.date("Y").' LOGO Inc. All Rights Reserved. <br></small>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>';
          $email = 'winstonfalcon@gmail.com';
          $from = 'inquiry@pebblebrookseniorhomecare.com';  
          $headers = 'From:' . $from."\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

          $msg = mail($email,$subject,$txt,$headers);
        }
      }
      ?>
        <div class="hero-banner">
            <div class="topcenter-box">
                <div class="d-flex flex-row justify-content-between">
                    <div class="contact-form">
                        <div class="text-align">
                            <!-- <span  class="mobile-breadcrumb" style="color:#adadad; font-size:13px"> Residential Care for the Elderly </span> --> 
                            <!-- <span  class="mobile-breadcrumb" style="color:#999; font-size:13px">LICENSE # 336425448 </span>  --> 
                               
                        </div>
                        <div class="hero-banner" style="width: 632px">
                            <div class="topcenter-box second-child">
                                <div class="text-over-background">
                                    <p> 
                                        <span >STATE LICENSE # 336425448</span>
                                    </p> 
                                    <h1>
                                        <span>Pictures of <br>
                                        The Rooms<br>Inside Our Facility</span>
                                    </h1>   
                                </div>                                
                                
                                
                                 
                                <div class="header-padding"><h2>Facility Tour</h2></div> 
                             <h2 class="h1 text-white main-contact-heading">What the inside looks like</h2>
                              <p><span class="p-text" style="line-height:2">
                                We have 5 rooms total<br>
                                4 private rooms <br>
                                1 shared room<br>
                               <br></span>
                               
                                <span class="p-text" style="line-height:2"><b>Living Room Area</b><img src="/gallery/livingroom.jpg" width="100" alt="Home Care Kitchen"></span>
                                <span class="p-text" style="line-height:2">We have a living room area furnished and decorated to accommodate our adults and give them a feel of a home. 
                                They hang out, play games, and discuss in the living room. The living room area is well ventilated and spacious to accommodate them during activities that 
                                require them to sit in the living room area. We make sure it's regularly cleaned to help maintain a healthy environment for our residents. There is television 
                                that enables them to watch a TV program whenever they want to and comfortable cushion chairs to help them relax. </span><br>
                                <hr class="hr3">
                               
                                <span class="p-text" style="line-height:2"><b>Private Room 1</b><img src="/gallery/privateroom1.jpg" width="100" alt="Resident Private Room $4,500 a month">We have private 
                                rooms for residents who want to have their personal space. It has a wide window that allows enough natural lighting and ventilation—decorated with flowers and a bedside light. 
                                The wood floor is also designed to help them walk comfortably to avoid slipping and injuries. </span>
                                
                                <span class="p-text" style="line-height:2">The wood floor is also designed in a way to help them walk comfortably to avoid slipping and injuries.</span>
                             
                                
                                <hr class="hr3">
                                
                                <span class="p-text" style="line-height:2"><b>Private Room 2</b> <img src="/gallery/privateroom2.jpg" width="100" alt="Resident Private Room $4,500 a month">
                                In the private rooms, there is only a single bed. </span>
                                <span class="p-text" style="line-height:2">There is only a single bed in the private rooms. This means residents who stay in a private room always have the space to themselves and privacy.</span>

                                <hr class="hr3">


                                
                                <span class="p-text" style="line-height:2"><b>Shared Room</b><img src="/gallery/shared-room.jpg" width="100" alt="Resident Private Room $4,000 a month">Unlike the private room, the shared room. There are two comfortable beds, bedside lamps, and large windows that allow enough lighting into the room and are well ventilated.

                                </span>   
                                
                                <hr class="hr3">
                                
                                <span class="p-text" style="line-height:2"><b>Backyard</b> <img src="/gallery/backyard.jpg" width="100" alt="senior care backyard">We have a spacious backyard with a small garden that has comfortable chairs where our residents can sit out in the evening and interact while receiving fresh air and enjoying the view of the neighbourhood.</span>         
                                <span class="p-text" style="line-height:2">We have a spacious backyard with a small garden that has comfortable chairs where our residents can sit out in the evening and interact while receiving fresh air and enjoying the view of the neighbourhood.</span>
                                <hr class="hr3">
                                
                                <br>
                                 <a href="/events/" style="color:#FF00FF;font-size: 19px; margin-left:17px">See photos from past events </a> 
                                <br>
                                <br>
                                 
                      
                                 <?php include("../address.php"); ?> 
                        
                        
                                           <h3>Online Form</h3>                                
                                    <br>
                                    <div class="contact-form">
                                        <form method="post" class="form-container">
                                            <input type="text" id="name" class="name" placeholder="Your Name" name="name" required="">
                                            <input type="email" id="email" class="email" placeholder="Your Email" name="email" required="">
                                            <input type="text" id="subject" class="subject" placeholder="Subject" name="subject" required="">
                                            <textarea id="message" name="message" rows="4" class="textarea" placeholder="Message" required=""></textarea>
                                            <button type="submit" class="border-0 fs-16 py-2 px-4 button">Submit</button>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php 
        if(!empty($msg)){ ?>
        <div
            style="text-align:center"
            class="alert alert-success alert-dismissible successmsg"
            
            >
            <p style="font-size:larger; margin-bottom:0; text-align:center; color:green;">
                <b>Thanks, mail sent. We'll get back to you soon!</b>
            </p>
        </div>
      <?php } ?>
      <footer>
        
      </footer>
      <script>
        setTimeout(function () {
          $('.alert-success').css('display','none');
        }, 3500);
      </script>
            </div>
    <br>
            </div>
            <div class="divider"></div>
            <div class="videos-found"></div>
        </div>
        <div class="section-footer">
        <div class="nav nav-footer">
            <ul class="nav-item nav-footer-list">
    		  <?php //footer here

        include("../footerBar.php");
    ?>
            </ul>
        </div>
        <div class="footer-divider-mobile"></div>
        <div class="social-list social-footer">
          <a  aria-label="facebook share" href="https://www.facebook.com/Pebble-Brook-Senior-Home-Care-2227131354196518/" rel="nofollow noopener" class="bg-facebook"></a>
          <a  aria-label="twitter share" href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-twitter"></a>
          <a  aria-label="reddit share" href="https://api.addthis.com/oexchange/0.8/forward/reddit/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-reddit"></a>
          <a  aria-label="google share" href="https://api.addthis.com/oexchange/0.8/forward/google/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-google"></a>
          <a  aria-label="messenger share" href="https://api.addthis.com/oexchange/0.8/forward/messenger/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-messenger"></a>
          <a  aria-label="email share" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=https://pebblebrookseniorhomecare.com/" rel="nofollow noopener" class="bg-email"></a>
        </div>
        <div class="footer-divider"></div>
        <div class="copy">
            Copyright <?php echo date('Y');?>. All rights reserved. Disclaimer: All images are copyright to their respective owners.    </div>
        <div class="logos">
            <div class="bg-googleplay"></div>
            <div class="bg-appstore"></div>
            <div class="bg-rta"></div>
            <div class="bg-mcaffee"></div>
            <div class="bg-lock"></div>
            <div class="bit">128-bit SSL</div>

        </div>
    </div>
      </div>
    <div class="section-content" style=""><main id="maincontent"></main>
                 
                  
    </div>
        
  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QQZQ9DPXLMqqq"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      function gtagCall(){
          gtag('js', new Date());
          gtag('config', 'G-QQZQ9DPXLMqqq');
      }
      gtagCall();
    </script>
    <!-- dropdown menu toggler -->
    <script>
        $('.services-toggle').click(function(){
            $('.our-services .display-flex .right-arrow').toggleClass('d-none');
            $('.our-services .display-flex .down-arrow').toggleClass('d-none')
        })
        $('.facility-toggle').click(function(){
            $('.facility-features .display-flex .right-arrow').toggleClass('d-none');
            $('.facility-features .display-flex .down-arrow').toggleClass('d-none')
        })
    </script>


</body>  