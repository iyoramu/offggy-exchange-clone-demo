<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed layout-menu-100vh" dir="ltr" data-theme="theme-default">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Password Reset</title>
    <meta name="description" content="">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/boxicons.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/dr.css">
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/apex-charts.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/sign_in_up/jquery.dataTables.css">
    <link rel="stylesheet" href="./assets/css/sign_in_up/petit-irutabyose-yoramu.css">
    
    <!-- Helpers -->
    <script src="./assets/js/sign_in/helpers.js"></script>
    <script src="./assets/js/sign_in/config.js"></script>

    <style>
        *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
.contact-section{
  background: url(singup.jpeg) no-repeat center;
  background-size: cover;
  padding: 40px 0;
}
.contact-section h1{
  text-align: center;
  color: #ddd;
}
.border{
  width: 100px;
  height: 10px;
  background: #1964b0;
  margin: 40px auto;
}

.contact-form{
  max-width: 600px;
  margin: auto;
  padding: 0 10px;
  overflow: hidden;
}

.contact-form-text{
  display: block;
  width: 100%;
  box-sizing: border-box;
  margin: 16px 0;
  border: 0;
  background: #37356b;
  padding: 20px 40px;
  outline: none;
  color: #ddd;
  transition: 0.5s;
}
.contact-form-text:focus{
  box-shadow: 0 0 10px 4px #34495e;
}
textarea.contact-form-text{
  resize: none;
  height: 120px;
}
.contact-form-btn{
  float: right;
  border: 0;
  background: #0f2d67;
  color: #fff;
  padding: 12px 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.5s;
}
.contact-form-btn:hover{
  background: #2980b9;
}

    </style>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center" 
                     id="layout-navbar" 
                     style="background-color: #0d0b2e !important; box-shadow: none !important;">
                     <!-- <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"> -->
                         <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" id="toggleMobileMenu">
                            <i class="bx bx-menu bx-sm toggle-icon"></i>
                            <i class="fas fa-bars toggle-icon" style="display: none;"></i>
                            <span class="toggle-text" style="display: none;">Menu</span>
                        </a>
                    </div>
                    
                    <div class="mobile-menu" id="mobileMenu">
                        <a href="index" class="mobile-menu-item">Home</a>
                        <a href="sign_in" class="mobile-menu-item">Sign In</a>
                        <a href="sign_up" class="mobile-menu-item">Sign Up</a>
                        <a href="contactus" class="mobile-menu-item">Contact Us</a>
                    </div>
                </nav>

                <div class="content-wrapper">
                    
<div class="contact-section">

    <h1>Contact Us</h1>
    <div class="border"></div>
    <form class="contact-form">
      <input type="text" class="contact-form-text" name="name" placeholder="Your name">
      <input type="email" class="contact-form-text" name="email" placeholder="Your email">
      <input type="text" class="contact-form-text" name="phone" placeholder="Your phone">
      <textarea class="contact-form-text" name="message" placeholder="Your message"></textarea>
      <input type="hidden" name="_captcha" value="false">
      <input type="submit" class="contact-form-btn" value="Send">
    </form>
  </div>
  <div id="gtx-trans" style="position: absolute; left: 725px; top: 12.6667px;">
      <div class="gtx-trans-icon"></div></div>
                </div>
            </div>
            
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="./assets/js/sign_in/jquery.js"></script>
    <script src="./assets/js/sign_in/popper.js"></script>
    <script src="./assets/js/sign_in/bootstrap.js"></script>
    <script src="./assets/js/sign_in/perfect-scrollbar.js"></script>
    <script src="./assets/js/sign_in/menu.js"></script>
    
    <!-- Vendors JS -->
    <script src="./assets/js/sign_in/apexcharts.js"></script>
    
    <!-- Main JS -->
    <script src="./assets/js/sign_in/main.js"></script>
    
    <!-- Page JS -->
    <script src="./assets/js/sign_in/dashboards-analytics.js"></script>
    <script src="./assets/js/sign_in/api.js" async defer></script>
    <script src="./assets/js/sign_in/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/sign_in/toast.js"></script>
    <script src="./assets/js/sign_in/jquery.dataTables.js"></script>
    
    <script src="./assets/js/sign_in/petit-irutabyose-yoramu.js"></script>
</body>
</html>