<?php

    session_start();
    // require "../includes/db_connect.inc.php";

    $uspec = $degree = $msg = "" ;
    $uid= null;

    $message = "";
    
    $Pass = $fName = $uEmail = $uPass =  $uPhone = $uDob = $spec = $userGender = $userAllergy = $userBlood = $userspec = $uPassToDb = $days = $degree = $dd =  $dg = $userid = $fees = $userTimeErr = $errExists = $userIdErr = $userPassErr = $userFnameErr = $userEmailErr = $userPhoneErr = $userAddErr = $userAddErr = $userDobErr = $userTimeErr = $userFeesErr = $time =  $etime = $stime = $userAdd = "" ;
    // $userspec = $_SESSION["spec"] ;
    
   

?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hospital Management System</title>


    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/index_style.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar flex-md-nowrap p-0 shadow fixed-top" style="background-color: #99C2FF; color: white; ">
      <img src="../images/logo.png" width="76px" height="76px">
      <a class="navbar-brand col-sm-6 mr-0" href="../index.php" style="text-decoration: none;color: white;"><b>Hospital Management System</b></a>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo $_SERVER['PHP_SELF']; ?>" >About Us</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>

      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="doctor_list_1.php" >Doctor's List</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="../support.php" >Support</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
       <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="forms/login.php" >Sign in</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>
      <ul class="navbar-nav col-sm-1 mr-auto">
        <li class="nav-item"><a class="nav-link" href="forms/registration.php" >Sign up</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#">About Us </a></li> -->
      </ul>



    </nav>

    <div class="container-fluid">

        

        <main role="main" class="col-md-9  col-lg-10 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap  pt-3 pb-2 mb-3 border-bottom" style="margin-top:90px;">
            <h1 class="h2">About Us</h1>
          </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

          <div class="container">
           <p style="text-align:justify;">Our hospital management system organizes the stable functioning of daily tasks and interactions. This is a special tool to support the smooth operating of the software components that are vital for the clinic administration. This hospital records management software keeps a track of all the operations, stores the users??? data, performs its analysis and generates the reports. The medical institution is given the opportunity to collect its information in one place. It includes the patient and doctors??? records as well as the data concerning financial affairs, supply management, etc. Furthermore, it is only processed, classified and accessible for authorized users. The hospital database management system provides users with data security due to all regulations. Implementation of different functions empowers smooth and clear functionality.
The hospital records management software tracks the number of available doctors and their working hours. This allows to have the accurate schedule of each employee, manage your facility abilities and the supply chain in order to meet all the needs of the patients. It helps to arrange the appointments for both the staff and patients??? convenience.
Any clinic should store medical histories, test results, prescribed treatments, etc. The good hospital database management system will do it for you. All the details are securely stored for the access of the doctor and can be provided to the patients by their requests. They can receive the test results or medical reports by email or the user account. When the written form is required, printing will take only a few minutes for the clinic staff.
Another function is connected with managing finances. The hospital accounting software estimates the patients??? payments. It might remind the bank account where you can check performed operations and the billing status of each customer.
Moreover, the hospital record management system is capable of generating regular reports of the tracked data including healthcare, staff efficiency, finances, inventory, and facility utilization, etc. This greatly helps the clinic authorities in making reasonable policy decisions. Therefore, any of these functions are designed to make the clinic management system easy to use, comprehensive, powerful and reliable. </p>

            





          </div>
        </form>


        </main>
      </div>
    </div>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>


    <script>

    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");

      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      this.classList.toggleClass("rotate");
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }



    </script>



  </body>

</html>
