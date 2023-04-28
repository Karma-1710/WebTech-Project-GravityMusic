<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <title>user page</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>

</head>
<body>
   



<div class="home">
        <div class = "navbar">
            <h1 class = "logo">Gravity</h1>
            <div class="buttondiv">
                <!-- <i class="fa-solid fa-magnifying-glass search"></i> -->
                <input type="text" name="" placeholder="Search...">
                <!-- <button type="button" class="buttonhome">SignUp</button> -->
                <a href="logout.php" class="btn" style="font-size:17px;">Logout</a>
                <a href="contact.php" class="btn" style="font-size: 15px;">Contact</a>
            </div>
        </div>
        <div class="content">
            <i class="fa-solid fa-headphones-simple headphone"></i>
            <h3>Welcome <span class="user" style="font-size: 40px; color:#fff;"><?php echo $_SESSION['user_name'] ?></span></h3>
            <h1>Streaming <span class="music">Music</span></h1>
            <h1>Made Easy</h1>
            <button type="button" class="buttonlearn"><a href="#explore">Explore Now</a></button>
        </div>
        <div class="notes">
            <img src="bubble.png" alt="">

            <img src="bubble.png" alt="">

            <img src="bubble.png" alt="">

            <img src="bubble.png" alt="">

            <img src="bubble.png" alt="">

            <img src="bubble.png" alt="">

            <img src="bubble.png" alt="">

        </div>
    </div>
<div class="main" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Explore Latest</h3>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="0">
                        <img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Miley Cyrus</h4>
                    <p>lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="1">
                        <img src="https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Bruno Mars</h4>
                    <p>Lorem ipsum  - 2020</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="2">
                        <img src="https://images.pexels.com/photos/838696/pexels-photo-838696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>P!NK</h4>
                    <p>Lorem ipsum  - 2020</p>
                </div>
    
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="3">
                        <img src="https://images.pexels.com/photos/1047442/pexels-photo-1047442.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>The Weeknd</h4>
                    <p>Lorem ipsum  - 2020</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="4">
                        <img src="https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>John Legend</h4>
                    <p>Lorem ipsum - 2020</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="5">
                        <img src="https://images.pexels.com/photos/210922/pexels-photo-210922.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Rihanna</h4>
                    <p>Lorem ipsum  - 2020</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="6">
                        <img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Camila Cabello</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4> Calvin Harris</h4>
                    <p>Lorem ipsum  - 2020</p>
                </div>
                
            </div>
    
    
            <div class="row">
                <div class="col-md-12">
                    <h3>Trending Top</h3>
                </div>
                <div class="col-md-2">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Snoop Dogg</h4>
                </div>
                <div class="col-md-2">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Eminem</h4>
                </div>
                <div class="col-md-2">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/894156/pexels-photo-894156.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>50 Cent</h4>
                </div>
                
                <div class="col-md-2">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/2118046/pexels-photo-2118046.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4> Drake</h4>
                </div>
                <div class="col-md-2">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/1735240/pexels-photo-1735240.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Bob Dylan</h4>
                </div>
                <div class="col-md-2">
                    <a href="#" class="album-poster">
                        <img src="https://images.pexels.com/photos/2272854/pexels-photo-2272854.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                    </a>
                    <h4>Freddie Mercury</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Create Your Own Music!</h3>
                </div>
                <div class="createForm">
                    <div class="contact-box">
                        <div class="left"></div>
                        <div class="right">
                            <h2 class="contactUs">Upload your Music!</h2>
                            <input type="text" class="field" placeholder="Creator Name">
                            <input type="text" class="field" placeholder="Song Name">
                            <input type="text" class="field" placeholder="Genre">
                            <textarea placeholder="Description" class="field"></textarea>
                            <input type="file" accept="image/jpeg, image/png, image/gif" class="upload">
                            <button class="btn" >Upload</button>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <footer class="footer-distributed">

<div class="footer-left">
    <h3>Gravity</h3>

    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
        |
        <a href="#">Blog</a>
    </p>

    <p class="footer-company-name">Copyright © 2023 <strong>Karma Soni</strong></p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p>Jaipur</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+91 9510907679</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:karmahsoni@gmail.com">karmahsoni@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        <strong>This is a Web Application where you can Listen and Create Music! It gives you a user friendly experience filled with animations and gives you overall better interactivity.</strong> 
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/karma_soni1710/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/karma-soni-433253227/"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
<div id="aplayer"></div>
</footer>
   <script src="https://kit.fontawesome.com/a5cd61b8d1.js" crossorigin="anonymous"></script>
        <!-- Jquery Link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<!-- Bootstrap Link -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- APlayer Jquery link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>
    <script>


		// NOW I CLICK album-poster TO GET CURRENT SONG ID
		$(".album-poster").on('click', function(e){
			var dataSwitchId = $(this).attr('data-switch');
			//console.log(dataSwitchId);

			// and now i use aplayer switch function see
			ap.list.switch(dataSwitchId); //this is static id but i use dynamic 

			// aplayer play function
			// when i click any song to play
			ap.play();

			// click to slideUp player see
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
		    container: document.getElementById('aplayer'),
		    listFolded: true,
		    audio: [
		    {
		        name: 'Invisible Beauty',
		        artist: 'Artist Name',
		        url: 'source/invisible_beauty.mp3',
		        cover: 'https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
		    },
			{
		        name: 'Just Stay',  // SONG NAME
		        artist: 'Artist Name', //ARTIST NAME
		        url: 'source/just_stay.mp3', // PATH NAME AND SONG URL
		        cover: 'https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' // COVER IMAGE
		    },
			{
				name: 'Liquid Time',
				artist: 'Artist Name',
				url: 'source/liquid_time.mp3',
				cover: 'https://images.pexels.com/photos/838696/pexels-photo-838696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},
			{
				name: 'Silky Smooth',
				artist: 'Artist Name',
				url: 'source/silky_smooth.mp3',
				cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
			},


		    ]
		});
	</script>
</body>
</html>

