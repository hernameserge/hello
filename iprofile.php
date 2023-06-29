<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iProfile</title>

    <link href="../css/iprofile.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>

    <!-- Ajax Icons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Boxicons CDN -->
    <link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="idrive-info-section">
            <div class="profile-picture">  
                <div class="change-picture">
                    <a href=""> Change Picture </a>
                </div>   
            </div>
                <div class="text-group">  
                    <h3> istudent name</h3>
                    <h1> student name </h1> 
                    <p> iDrive iD: xxxx-xxxx</p>
                    <h2 class = "enrolled"> Currently Enrolled:  mm/dd/yy </h2>
                    <h2 class = "enrolled"> Last Enrolled: mm/dd/yy </h2>
                </div>
            </div>

            <div class = "contact-info-section">
                <div class="text-title"> <h1> contact information </h1> </div>
                <div class="edit-btn"> 
                    <i class='bx bx-edit-alt'></i>
                </div>
                <form action="" action="POST">
                    <div class="form-group"> 
                        <div class="form-label"> <label for = ""> Mobile Number </label> </div>
                        <input type="text" value = "09083550192">
                        <div class="form-label email"> <label for = ""> Email Address </label> </div>
                        <input type="text" value = "STUDENTNAME@GMAIL.COM">
                    </div>
                    <div class="form-group">
                        <div class="form-label emergency"> <label for = ""> If emergency, please contact: </label> </div>
                        <input type="text" value = "09085768911">
                        <input type="text" value = "HERNANDO D. OCAMPO">
                    </div>
                </form>
            </div>
    </div>
    
</body>
</html>