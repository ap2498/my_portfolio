
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:300");

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #000;
  color:white;
}
/* .row {
  --border-width: 1px;

  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  
  font-family: 'Poppins', sans-serif;
  font-size: 2.5rem;
  text-transform: uppercase;
  color: white;
  background: #222;
  border-radius: 10px;

  &::after {
    position: absolute;
    content: "";
    top: calc(-1 * var(--border-width));
    left: calc(-1 * var(--border-width));
    z-index: -1;
    width: calc(100% + var(--border-width) * 2);
    height: calc(100% + var(--border-width) * 2);
    background: linear-gradient(
      60deg,
      hsl(224, 85%, 66%),
      hsl(269, 85%, 66%),
      hsl(314, 85%, 66%),
      hsl(359, 85%, 66%),
      hsl(44, 85%, 66%),
      hsl(89, 85%, 66%),
      hsl(134, 85%, 66%),
      hsl(179, 85%, 66%)
    );
    background-size: 300% 300%;
    background-position: 0 50%;
    border-radius: 10px;
    animation: moveGradient 4s alternate infinite;
  }
}

@keyframes moveGradient {
  50% {
    background-position: 100% 50%;
  }
} */
    .wimg{;
        width:97%;
    }
    #mname{
        font-size:110px;
        font-family:"Poppins";
        font-weight:700;
        text-shadow: 20px 20px 5px #36454F;
    }
    .row {
	position: relative;
	padding-left:10px;
    padding-right:10px;
    padding-top:30px;
    padding-bottom:30px;	
	background: linear-gradient(0deg, #000, #272727);
}

.row:before, .row:after {
	content: '';
	position: absolute;
	left: -2px;
	top: -2px;
	background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
		#0000ff, #00ff00,#ffff00, #ff0000);
	background-size: 400%;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	z-index: -1;
	animation: steam 20s linear infinite;
}

@keyframes steam {
	0% {
		background-position: 0 0;
	}
	50% {
		background-position: 400% 0;
	}
	100% {
		background-position: 0 0;
	}
}

.row:after {
	filter: blur(50px);
}
</style>
<div class="container" style="margin-top:">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <img src="<?php echo base_url()?>assets/images/matrix.jpg" class="wimg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <h1 id="mname">ADITYA</h1><h1 id="mname" style="text-align:right;">PAUL</h1>
            <br>
            <a href="<?php echo base_url('projects/index')?>">To Portfolio -></a>
        </div>
    </div>
</div>