<?php
session_start();

// Prevent caching to ensure that the user can't go back to the dashboard page after logout
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user'])) {
    echo '<script>location.href="./"</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-template="vertical-menu-template-free">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    
    <title>Customer Reviews</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/sign_in_up/boxicons.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/css/dashboard/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="./assets/css/dashboard/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="./assets/css/dashboard/dr.css">
    <link rel="stylesheet" href="./assets/css/dashboard/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/css/dashboard/apex-charts.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/dashboard/jquery.dataTables.css">
    <link rel="stylesheet" href="./assets/css/dashboard/toastr.min.css">
    <link rel="stylesheet" href="./assets/css/dashboard/petit-irutabyose-yoramu.css">
    <link rel="stylesheet" href="./assets/css/contactus/petit-irutabyose-yoramu.css">
    <link rel="stylesheet" href="./assets/css/review_rating/petit-irutabyose-yoramu.css">
    
    <!-- Scripts -->
    <script src="./assets/js/dashboard/helpers.js"></script>
    <script src="./assets/js/dashboard/config.js"></script>
    <script src="./assets/js/dashboard/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
</head>
<body>   
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme sidenav-bg-color" style="background-color: #07102e !important; color: white !important;" data-bg-class="bg-menu-theme">
                <ul class="menu-inner py-1 pt-5 ps">
                    <li class="menu-item py-1">
                        <a href="#" class="menu-link">
                            <div data-i18n="Basic">Logged in as </div><?php echo $_SESSION['user']['u_username']; ?>
                        </a>
                    </li>
                    <li class="menu-item py-1">
                        <a href="#" class="menu-link">
                            <div data-i18n="Basic">Balance: $0</div>
                        </a>
                    </li>
                    <li class="menu-item py-1">
                        <a href="add_balance" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-credit-card"></i>
                            <div data-i18n="Analytics">ADD BALANCE</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item py-1">
                        <a href="bank_logs" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-bank"></i>
                            <div data-i18n="Basic">BANK LOGS</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">Woodforest Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">Wells Fargo Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">USAA Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">M&T Bank</div></a></li>
                            <li class="menu-item"><a href="#" class="menu-link"><div data-i18n="Error">Bank of America (BOA)</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item py-1 active">
                        <a href="reviews_rating" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-bank"></i>
                            <div data-i18n="Basic">Reviews/Rating</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="transaction_history" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-history"></i>
                            <div data-i18n="Basic">PURCHASE HISTORY</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="request_refund" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-dollar-circle"></i>
                            <div data-i18n="Basic">REQUEST REFUND</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="sign_out" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-log-out"></i>
                            <div data-i18n="Basic">LOGOUT</div>
                        </a>
                    </li>
                </ul>
            </aside>
            
            <script src="./assets/js/dashboard/oh79biksoicotfer6fzldcijjumag4z0.js" async=""></script>

            <div class="layout-page">
                
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center" id="layout-navbar" style="background-color: #0d0b2e !important; box-shadow: none !important;">
                    
                    <!-- Menu Toggle for small screens -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
            
                    <!-- Navbar Content -->
                    <div class="row">
                        <div class="h4 display-5">
                            <!-- Space for additional content if needed -->
                        </div>
                    </div>
            
                    <!-- Welcome Message -->
                    <div class="d-xl-block text-white text-center w-100">
                        <div class="row mx-auto">
                            <div class="col-12">
                                <div class="h4 display-5 h4-display">
                                    Customer Reviews
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- / Navbar -->
                 

                



<div class="reviews-container">
    <!-- <h1 style="color: #fff;">Customer Reviews</h1> -->
    <div id="reviews-list">
                    <div class="review-card">
                <img class="review-image" src="./assets/images/CS_Elysee_UDUKUNDA_2024.jpg" alt="Profile Image">
                <div class="review-content">
                    <div class="review-author" style="color: yellow;">Elysee</div>
                    <div class="review-date">
                        <small style="font-size: 1rem;">Reviewed on September 23, 2024, 7:51 am</small>
                    </div>
                    <div class="review-text">Okay then</div>

                    <!-- Display star rating -->
                    <div class="review-rating" style="font-size: 2rem;">
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                            </div>
                                            
                    <div class="conversation-thread">
                        
                    </div>
                    
                    
                </div>
            </div>
                    <div class="review-card">
                <img class="review-image" src="./assets/images/default-user.png" alt="Profile Image">
                <div class="review-content">
                    <div class="review-author" style="color: yellow;">Muhire</div>
                    <div class="review-date">
                        <small style="font-size: 1rem;">Reviewed on September 7, 2024, 3:19 am</small>
                    </div>
                    <div class="review-text">People will catch you doing something which is not right.</div>

                    <!-- Display star rating -->
                    <div class="review-rating" style="font-size: 2rem;">
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                            </div>
                    <!-- Display review photo if it exists -->
                    
                    <!-- Conversation thread between user and admin -->
                    <div class="conversation-thread">
                                                                                    <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Noo. just have to follow the rules.</p>
                                    <small style="font-size: 1rem;">Replied on September 9, 2024, 10:59 pm</small>
                                </div>
                            
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">hhh you saw it.</p>
                                    <small style="font-size: 1rem;">Replied on September 9, 2024, 10:59 pm</small>
                                </div>
                                                                                                                <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">You will hv to wait:</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 12:01 pm</small>
                                </div>
                            
                                                                                
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">new logs out?</p>
                                    <small style="font-size: 1rem;">Replied on December 15, 2024, 4:25 am</small>
                                </div>
                                                                        </div>

                    <!-- Keep showing the reply form for user if admin has replied -->
                    
                    
                </div>
            </div>
                    <div class="review-card">
                <img class="review-image" src="./assets/images/CS_Elysee_UDUKUNDA_2024.jpg" alt="Profile Image">
                <div class="review-content">
                    <div class="review-author" style="color: yellow;">Elysee</div>
                    <div class="review-date">
                        <small style="font-size: 1rem;">Reviewed on September 7, 2024, 3:19 am</small>
                    </div>
                    <div class="review-text">I love your working it is something to look forward to,,, I really appreciate.</div>

                    <!-- Display star rating -->
                    <div class="review-rating" style="font-size: 2rem;">
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ffcc00">★</span>
                                                    <span style="color:#ccc">★</span>
                                                    <span style="color:#ccc">★</span>
                                            </div>
                    <!-- Display review photo if it exists -->
                    
                    <!-- Conversation thread between user and admin -->
                    <div class="conversation-thread">
                                                                                    <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Do you have money?</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:27 pm</small>
                                </div>
                            
                                                                                                                <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Do you have money?</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:29 pm</small>
                                </div>
                            
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">No! I do not have money.</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:29 pm</small>
                                </div>
                                                                                
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">But I will see What I can do.</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 2:52 pm</small>
                                </div>
                                                                                                                <div class="admin-reply">
                                    <strong style="color: #fff;">Altrexy.com:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Then you to do it quickly before others take your spot.</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 3:11 pm</small>
                                </div>
                            
                                                                                
                                                            <div class="user-reply">
                                    <strong style="color: #fff;">Your Reply:</strong>
                                    <p style="font-size: 1.2rem; color: #fff;">Okay Got it!</p>
                                    <small style="font-size: 1rem;">Replied on September 10, 2024, 3:12 pm</small>
                                </div>
                                                                        </div>

                    <!-- Keep showing the reply form for user if admin has replied -->
                    
                    
                </div>
            </div>
            </div>
</div>

    <div class="review-form">
        <h2 style="color: #fff;">Submit Your Review</h2>
        <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
    <label for="author" style="color: #fff;">Your   username (e.g., <?php echo $_SESSION['user']['u_username']; ?>)</label>

    <input type="text" id="author" name="author" placeholder="Enter your username" style=" font-size: 0.9rem;  
        width: 100%;
        padding: 10px;
        color: #000;
        border-radius: 5px;
        border: 1px solid #ddd;" required="">
</div>

            <div class="form-group">
                <label for="text" style="color: #fff;">Your Review</label>
                <textarea id="text" name="text" placeholder="Please enter your review here" style=" font-size: 0.9rem;  
        width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="image" style="color: #fff;">Your Profile Picture (optional)</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="photo" style="color: #fff;">Upload a Photo (optional)</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            <div class="form-group">
    <label for="rating" style="color: #fff;">Rating (1-5 stars)</label>
    <div class="star-rating" style="font-size: 3rem;
    color: #ccc;
    cursor: pointer;
    transition: color 0.2s ease-in-out;">
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5" title="5 stars">★</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4" title="4 stars">★</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3" title="3 stars">★</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2" title="2 stars">★</label>
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1" title="1 star">★</label>
    </div>
</div>

            <div class="form-group">
                <button type="submit" name="submit" style="padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;">Submit Review</button>
            </div>
        </form>


                        </div>
                    </div>
                    <!-- Footer -->

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <div id="toast-container" class="toast-top-left">
            <div class="toast toast-success bg-success" aria-live="polite" style="background-color: black;">
                <div class="toast-title"> </div>
                <div class="toast-message"> </div>
            </div>
        </div>
    </div>
    <!-- / Layout wrapper -->
     
    
  <!-- Core JS -->
   <script src="./assets/js/dashboard/petit-irutabyose-yoramu.js"></script>
    <script src="./assets/js/dashboard/jquery.js"></script>
    <script src="./assets/js/dashboard/popper.js"></script>
    <script src="./assets/js/dashboard/bootstrap.js"></script>
    <script src="./assets/js/dashboard/perfect-scrollbar.js"></script>
    <script src="./assets/js/dashboard/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="./assets/js/dashboard/apexcharts.js"></script>
    <!-- Main JS -->
    <script src="./assets/js/dashboard/main.js"></script>
    <!-- Page JS -->
    <script src="./assets/js/dashboard/dashboards-analytics.js"></script>
    <script src="./assets/js/dashboard/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/dashboard/toast.js"></script>
    <script src="./assets/js/dashboard/jquery.dataTables.js"></script>
</body>
</html>