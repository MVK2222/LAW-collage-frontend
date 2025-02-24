<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVD Siddhartha Law College</title>
    <!-- Link to external Google Fonts stylesheet -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Link to external CSS stylesheet -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

        /* Center the card */
.card {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    


}

.card .courses {
    border: solid;
    border-style: ridge;
    padding: 20px;
    max-width: 600px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
}

.card .courses h3 {
    margin-left: 3%;
    color: rgb(227, 173, 12);
    margin-bottom: 5px;
}

.card .courses p, .courses a {
    margin: 5px 0px 5px 0px;
    margin-left: 3%;
}

/* Link styling */
.card .courses a {
    color: rgb(211, 16, 39);
}

.page_img {

    width: 100%;
    height: 300px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 0px;
}

.page_img img {
    width: 100%;
    
}
.overlay-text {
    position: absolute;     /* displays on top of the image */
    color: white;
    font-family: roboto;
    font-size: 50px;
    text-align: center;
    font-weight: bold;
}

    </style>

</head>
<body>
    <?php
        include('includes/header.php');
    ?>

    <main>

        <div class="page_img">
            <img src="Images/gavel.jpg" alt="">
            <div class="overlay-text">List of Courses</div>
        </div>

        <div class="card">
            <div class="courses">
            <h3>B.A.LL.B :</h3>
            <p>BACHELOR OF SOCIAL-LEGAL SCIENCES - B.A. LL. B. (FIVE YEAR LAW COURSE)</p>
            
            <h3>LL.B :</h3>
            <p>BACHELOR OF LAWS (LL.B) - THREE YEARS BACHELORS PROGRAMME</p>
            
            <h3>LL.M(P.G Course) :</h3>
            <p>1. Constitutional and Administrative Laws<br>
               2. Intellectual Property Rights and Cyber Laws</p>
            
            <p><b>Intake: 20 + 20 seats</b></p>
            <a href='uploads\COURSES.pdf'>click here for more details</a>
            
            
            </div>   
        </div>
            
        
    </main>

     <!-- Footer -->
     <?php include('includes/footer.php'); ?>

    