Enterprise-Grade Cryptocurrency Exchange Simulation  
Copyright (C) 2025  IRUTABYOSE Yoramu  

This program is free software: you can redistribute it and/or modify  
it under the terms of the GNU General Public License as published by  
the Free Software Foundation, either version 3 of the License, or  
(at your option) any later version.  

This program is distributed in the hope that it will be useful,  
but WITHOUT ANY WARRANTY; without even the implied warranty of  
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the  
GNU General Public License for more details.  

You should have received a copy of the GNU General Public License  
along with this program.  If not, see <https://www.gnu.org/licenses/>.  
<?php
session_start();
// Redirect if already authenticated
if (isset($_SESSION['user'])) {
    header('Location: dashboard');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- METADATA SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="renderer" content="webkit">
    <title>Offgy logsstore - Official Website</title>
    
    <!-- CSS IMPORTS -->
    <link href="./assets/css/home/iconfont.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/bootstrap.min-v3.3.5.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/slick.min.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/animate.min.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/jquery.mCustomScrollbar.min.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/base-v2.0.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/main.css" type="text/css" rel="stylesheet">
    <link href="./assets/css/home/media.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/home/petit-irutabyose-yoramu.css">
</head>
<body>
    <!-- BODY CONTENT -->
    <h1 class="ys_page_title">Offgy Logsstore</h1>
    <div class="ys_page_wrap">
        <!-- HEADER SECTION -->
        
        <header class="ys_header">
            <div class="ys_hd_pc isfixed">
                <div class="mod_nav">
                    <div class="ys_cont1462">
                        <div class="mod_nav_le mod_nav_le1">
                            <ul class="mod_nav_le_ul clearfix">
                               
                                
                                <li class="mnlu_li fl" id="channel_2008">
                                    <a href="index" class="mnlu_li_link">
                                        <div class="mnlu_li_link_icon mod_cover">
                                            
                                        </div>
                                        <div class="mnlu_li_link_parga">
                                            <p>Home</p>
                                        </div>
                                    </a>
                                     
                                </li>
                                <li class="mnlu_li fl" id="channel_854">
                                    <a href="sign_in" class="mnlu_li_link">
                                        <div class="mnlu_li_link_icon mod_cover">
                                            <img src="./assets/icons/icon1.svg" alt="Services">
                                            <img src="./assets/icons/icon2.svg" alt="Services">
                                        </div>
                                        <div class="mnlu_li_link_parga">
                                            <p>SignIn</p>
                                        </div>
                                    </a>
                                    
                                     
 
                        </li></ul></div>
                        <div class="mod_nav_logo">
                            <a href="#index">
                                <div class="mod_cover">
                                    <img src="./assets/icons/log4.svg" alt="Offgy logsstore">
                                    <img src="./assets/icons/log3.svg" alt="offgy">
                                </div>
                            </a>
                        </div>
                        <div class="mod_nav_ri">
                            <div class="mod_nav_le mod_nav_le2">
                                <ul class="mod_nav_le_ul clearfix">
                                    <li class="mnlu_li fl" id="channel_862">
                                        <a href="sign_up" class="mnlu_li_link">
                                            
                                            <div class="mnlu_li_link_parga">
                                                <p>SignUp</p>
                                            </div>
                                        </a>
                                         
                                                
                                            
                                    
                                         
                                    </li><li class="mnlu_li fl" id="channel_899">
                                        <a href="contactus" class="mnlu_li_link">
                                            
                                            <div class="mnlu_li_link_parga">
                                                <p>Contact</p>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="mod_nav_other">
                                <div>
                                    <div class="mnol_tp">
                                        <div>
                                            
                                        </div>
                                        <div class=" ">
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="mod_nav_other_search">
                                    <div class="mnos_tp">
                                        
                                    </div>
                                    <!-- Search Dropdown -->
                                    <div class="mnos_bt">
                                        <div class="mnos_bt_cont">
                                            <div class="mnos_bt_cont_search">
                                               
                                                    <div class="mbcs_tp">
                                                        <input type="hidden" name="siteId" id="siteId" value="34">
                                                        <div class="mbcs_input">
                                                            <input type="text" placeholder="Please enter keywords" autocomplete="off" name="q" id="mbcs_input_cont">
                                                        </div>
                                                        
                                                         
                                                    </div>
                                               
                                                <div class="mbcs_bt std_parga">
                                                    <ul class="mbcs_bt_ul">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             


            <!-- ph Top Navigation -->
            <div class="ys_hd_ph">
                <!-- Navigation Start -->
                <nav class="ys_ph_navbar ys_ph_navbar1">
                    <!-- Navigation Bar -->
                    <div class="ys_phnav_header">
                        <!-- logo -->
                        <div class="ys_phnav_logo">
                            <a href="#index">
                        <img src="./assets/icons/log3.svg" alt="Offgy Logsstore">
                    </a>
                        </div>
                        <!-- Right Side -->
                        <div class="ys_phnav_r clearfix">
                            <!-- Language -->
                            <div class="ys_phnav_language fl">
                                <div class="mod_nav_other_lang">
                                    <div class="mnol_tp">
                                        <div class="mnol_tp_icon1">
                                            <div class="mod_cover">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Button -->
                            <div class="ys_phnav_menubox fl">
                                <div class="ys_phnav_menubtn"> <span></span> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dropdown Menu -->
                    <div class="ys_phnav_menu">
                        <!-- Navigation -->
                        <div class="ys_phmenu_scroll">
                            <ul class="ys_ph_nav">
                                <!-- When there are subordinates, add the class name ys_phnav_haschild. There is no need to check for the presence of plus or minus signs. -->
                                <li>
                                    <div class="ys_phnav_lisbox">
                                        <a href="index">Home</a>
                                        <div class="ys_phnav_icon"></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="ys_phnav_lisbox">
                                        <a href="sign_in">SignIn</a>
                                        <div class="ys_phnav_icon"></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="ys_phnav_lisbox">
                                        <a href="sign_up">SignUp</a>
                                        <div class="ys_phnav_icon"></div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="ys_phnav_lisbox">
                                        <a href="contactus">Contact</a>
                                        <div class="ys_phnav_icon"></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- search -->
                         
                    </div>
                    <!-- language selection pop-up -->
                    <div class="ys_phnav2_lang_modal">
                       
                        <div class="ys_phnav2_lang_scroll">
                            <div class="mnol_pop_cont_bt">
                                <div>
                                    
                                     
                                </div>
                            </div>
                        </div>
                    </div>


                </nav>
                <!-- navigation end -->
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="ys_main home_main">
            <!-- BANNER SECTION START HERE -->
            <div class="ys_banner">
                <ul class="ys_ban_slick">
                    <!-- SLIDE 1 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <video class="ys_ban_video" src="./assets/videos/video_1.mp4" 
                                   muted autoplay loop playsinline
                                   poster="./assets/images/coins-2842668_1280.jpg"></video>
                            <img class="ys_ban_ph" src="./assets/images/wallet-2125548_1280.jpg" alt="Better Life">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit">Better Price<br>Finer business</div>
                            <div class="ys_ban_subtit std_title24">A great business at a fair price is superior to a fair business at a great price.</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="-1">
                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE 2 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <img class="ys_ban_ph" src="./assets/images/building-5738714_1280.jpg" alt="Better Business">
                            <img class="ys_ban_pc" src="./assets/images/bench-1190768_1280.jpg" alt="Better Business">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit"><br>Offgy Logsstore ensures your financial security</div>
                            <div class="ys_ban_subtit std_title24">Banking is not just about money, it's about trust and building relationships</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="0">
                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE 3 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <img class="ys_ban_ph" src="./assets/images/building-5738714_1280.jpg" alt="Better Business">
                            <img class="ys_ban_pc" src="./assets/images/fichtelberg-1048982_1280.jpg" alt="Better Business">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit">Better Price<br>Finer business</div>
                            <div class="ys_ban_subtit std_title24">A great business at a fair price is superior to a fair business at a great price.</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="-1">
                                       
                                        <p>Business for life</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE 4 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <img class="ys_ban_ph" src="./assets/images/building-5738714_1280.jpg" alt="Better Business">
                            <img class="ys_ban_pc" src="./assets/images/bench-1190768_1280.jpg" alt="Better Business">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit"><br>Offgy Logsstore in the citi</div>
                            <div class="ys_ban_subtit std_title24">Banking is not just about money, it's about trust and building relationships</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="-1">
                                       
                                        <p>We got your back</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE 5 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <img class="ys_ban_ph" src="./assets/images/building-5738714_1280.jpg" alt="Better Business">
                            <img class="ys_ban_pc" src="./assets/images/shopping-2735735_1280.jpg" alt="Better Business">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit">Trusted Logs<br>Better Life</div>
                            <div class="ys_ban_subtit std_title24">In banking or finance, trust is the only thing you have to sell</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="-1">
                                        
                                        <p>A change for the better</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE 6 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <img class="ys_ban_ph" src="./assets/images/building-5738714_1280.jpg" alt="Better Business">
                            <img class="ys_ban_pc" src="./assets/images/wallet-2125548_1280.jpg" alt="Better Business">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit">Better Price<br>Finer business</div>
                            <div class="ys_ban_subtit std_title24">A great business at a fair price is superior to a fair business at a great price.</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="-1">
                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE 7 -->
                    <li class="ys_ban_li">
                        <div class="ys_ban_imgbox">
                            <img class="ys_ban_ph" src="./assets/images/building-5738714_1280.jpg" alt="Better Business">
                            <img class="ys_ban_pc" src="./assets/images/bench-1190768_1280.jpg" alt="Better Business">
                        </div>
                        <div class="ys_ban_txtbox ys_pos_center ys_cont1200">
                            <div class="ys_ban_title mod_ban_tit"><br>Offgy Logsstore ensures your financial security</div>
                            <div class="ys_ban_subtit std_title24">Banking is not just about money, it's about trust and building relationships</div>
                            <div class="ys_ban_more">
                                <div class="std_btn1">
                                    <a href="#" class="std_btn1_box" tabindex="-1">
                                         
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- BANNER SECTION CHANGES END HERE -->
             
            <div class="home_new bg-safe">
                <p>Our store embodies a self-written engine, anti-DDoS system and a bulletproof server. <br>
                     Logs are re-checked and updated after each occurrence of issuing bulk purchases. <br>
                      Please do not hesitate to contact the support team if you encounter any issue. <br>

                    Please take the time to read through our policies. <br>
                    
                    The store disclaims any responsibility for any additional actions you take with the purchased log in your possession. <br>
                    
                    Funds sent to the store will be allocated to the user after two confirmations. <br>
                    
                    Get in touch with the SUPPORT TEAM , in case of any queries or inquiries. <br>
                    
                    A token would be issued to any account after three instant purchases or a deposit of more than $1000. <br>
                    
                    Accounts that have been inactive for six months will be deactivated <br>
                </p> 
                 
              </div>

              <div class="home_new bg-investment">
                <p>FAQs

                    Q1: How do I add balance? <br>
                    
                    A: To add balance, simply navigate to the sidebar and click the "Add Balance” button. <br>
                    From there, you can pay with bitcoins and follow the prompts to complete the transaction. <br>
                    
                    Q2: Can I buy without adding balance? <br>
                    
                    A: Yes, you can still make purchases without adding balance to your account. <br>
                    Simply choose your desired product or service, proceed to checkout, <br>
                    and follow the prompts to complete the transaction using your preferred payment method. <br>
                </p> 
                 
              </div>
        </main>

        <!-- FOOTER SECTION -->
        <footer class="ys_footer">
            <div class="mod_foot">
               
                    <div class="mod_foot_nav">
                        <ul class="mod_foot_nav_ul">
                             
                             
                            
                            
                        </ul>
                    </div>
                    <div class="mod_foot_bt">
                        <div class="mod_foot_bt_le">
                            <div class="mod_foot_info_li mod_foot_info_email">
                                <a href="mailto:logsstore@offgy.com">
                                    <div class="mfil_icon">
                                        <img src="./assets/icons/icon9.svg" alt="Yutong">
                                    </div>
                                    <div class="mfil_text">
                                        <p><span><b>E-mail:</b> </span>logsstore@offgy.com</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="mfbl_info">
                                <!-- copyright information -->
                                <p>
                                    <span>Copyright © 2023 Offgy loggsstore Co., Ltd. All Rights Reserved.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            
        </footer>

        <!-- sidebar -->
        <div class="mod_sidenav">
            <!-- PC-side sidebar -->
            <div class="mod_sidepc">
                <div class="mod_side act">
                    <div class="mod_side_list">
                        <ul class="mod_side_list_ul">
                             
                            
                            <li class="mslu_li">
                                <a href="mailto:logsstore@gmail.com">
                                    <div class="mslu_li_icon">
                                        <div class="mslu_li_icon_img ys_pos_center">
                                            <!-- The first icon is the white icon that appears when the mouse hovers over it.，The second icon is the black outline icon before the mouse hovers over it -->
                                            <div class="mlii_icon">
                                                <img src="./assets/icons/com_icon5.svg" alt="Yutong">
                                                <img src="./assets/icons/com_icon6.svg" alt="Yutong">
                                            </div>
                                        </div>
                                    </div>
                                    </a><div class="mslu_li_pop"><a href="mailto:logsstore@gmail.com">
                                        </a><div class="mslu_li_pop_cont"><a href="mailto:logsstore@gmail.com">
                                            <div class="mlpc_tp">
                                                
                                                <div class="mlpc_tp_parga std_parga">
                                                    <p>Email:</p>
                                                </div>
                                            </div>
                                            </a><div class="mlpc_mid"><a href="mailto:logsstore@gmail.com">
                                                </a><p><a href="mailto:logsstore@gmail.com"></a><a href="mailto:logsstore@offgy.com">logsstore@offgy.com</a></p>
                                            </div>
                                            <div class="mlpc_bt std_parga1">
                                                <p>Welcome to contact us</p>
                                            </div>
                                        </div>
                                    </div>
                                
                            </li>
                           
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
            <!-- mobile-side sidebar -->
    </div>


    <script language="javascript" src="./assets/js/home/LsJS.aspx"></script>

    <!-- ################################### -->
    
    <script src="./assets/js/home/jquery.min.js"></script>
    <script src="./assets/js/home/slick.min.js"></script>

    <!-- SIMPLIFIED SLICK INITIALIZATION -->
     <script src="./assets/js/home/petit-irutabyose-yoramu.js"></script>
    
    <!-- ################################### -->

    <!-- EXISTING OTHER SCRIPTS -->
    <script src="./assets/js/home/index.js"></script>
    <script src="./assets/js/home/anime.min.js"></script>
    <script src="./assets/js/home/appear.js"></script>
    <script src="./assets/js/home/swiper.min.js"></script>



    <script src="./assets/js/home/layer.js"></script>
    <script src="./assets/js/home/jquery.highlight.js"></script>
    <script src="./assets/js/home/visit_info.js"></script>
    <script src="./assets/js/home/jquery.mousewheel.min.js"></script>
    <script src="./assets/js/home/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./assets/js/home/wow.min.js"></script>
    <script src="./assets/js/home/base-v2.0.min.js"></script>
    <script src="./assets/js/home/common.js"></script>
</body>
</html>
