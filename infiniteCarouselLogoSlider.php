<!DOCTYPE html>
<html>
<head>
  <title>Infinite Autoplay Carousel</title>
  <style type="text/css">
    body{
      min-width: 100vh;
      display: grid;
      place-items: center;
    }
    .slider{
      width: 90%;
      margin: 0 auto;
      position: relative;
      width: 90%;
      display: flex;
      place-items: center;
      overflow: hidden;
    }
    .slide-track{
      display: flex;
      width: calc(200px*9);
      animation: scroll 5s linear infinite;
    }
    @keyframes scroll{
      0%{
        transform: translateX(0);
      }
      100%{
        transform: translateX(calc(-200px * 1));
      }
    }
    .slide{
      width: 170px;
      align-items: center;
      padding: 15px;
      perspective: 100px;
      text-align: center;
    }
    .slide img{
      width: 100%;
      transition: transform 1s;
    }
    .slide img:hover{
      transform: translateZ(20px);
    }
    .slider::before,
    .slider::after{
      background: linear-gradient(to right, rgba(255,255,255,1)0%, rgba(255,255,255,0) 100%);
      content: '';
      height: 100%;
      position: absolute;
      width: 15%;
      z-index: 2;
    }
    .slider::before{
      left: 0;
      top: 0;
    }
    .slider::after{
      right: 0;
      top: 0;
    }
  </style>
</head>
<body>
  <div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img src="admin/img/logo/ROB.jpg"><br>
         <p>Approved by Bangladesh Government</p>   
      </div>
      <div class="slide"><img src="admin/img/logo/RMU.png"></div>
      <div class="slide"><img src="admin/img/logo/BMC.png"></div>   
      <div class="slide">
        <img src="admin/img/logo/ROB.jpg"><br>
         <p>Approved by Bangladesh Government</p>   
      </div>
      <div class="slide"><img src="admin/img/logo/RMU.png"></div>
      <div class="slide"><img src="admin/img/logo/BMC.png"></div>         
    </div>
  </div>
</body>
</html>