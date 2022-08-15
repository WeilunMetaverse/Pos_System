<html>
    <head>
        <style>
            *,
        *::before,
        *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }


        .flip-card {
        display: inline-block;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 0;
      }
      .flip-card-back {
        position: absolute;
        background: #f00;
        height: 100%;
        width: 100%;
        color: #fff;
        font-size: 20px;
        text-align: center;
        vertical-align: bottom;
        /*line-height: 10rem;*/
        transition: 700ms;
        display: inline-block;
        margin: auto;
        z-index: 1;
        opacity: 0;
        transform: rotateY(180deg);
        color: rgba(0,0,0,0.8);
      }
      .flip-card-front {
        position: absolute;
        background: #000;
        height: 100%;
        width: 100%;
        color: #fff;
        text-align: center;
        
        line-height: 10rem;
        transition: 700ms;
        display: inline-block;
        z-index: 2;
      }
      .flip-card:hover > div {
        transition: all 500ms ease-in-out;
      }
      .flip-card:hover .flip-card-front {
        opacity: 0;
        transform: rotateY(180deg);
      }
      .flip-card:hover .flip-card-back {
        opacity: 1;
        transform: rotateY(0deg);
      }
      

        .floormac {
        /*   transition: all 5s; */
        position: absolute;
        width: 25%;
        height: 230px;
        width: 100%;
        top: 30%;
        left: 25%;
        top: 20%;
        left: 0;
        background-color: #7d8a81;
        transform: translateY(300px) rotateX(60deg) rotateZ(0.1deg); /*translateX(850px) translateY(300px) rotateX(60deg) rotateZ(0.1deg); move to 2d from topmac to bottom*/
        transform-style: preserve-3d;
        }
        
        .chipmac {
        width: 90px;
        height: 40px;
        position: absolute;
        background-color: red;
        left: calc(100% - 90px - 10px);
        top: calc(50% - 20px);
        background-image: url(https://drive.google.com/uc?id=1XflsByjAENEHX-Mf_ZkefL7oeXkJGIZC);
        background-size: 100% 100%;
        transform: translateZ(55px);
        animation-name: chipmacM;
        animation-duration: 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        opacity: 0;
        }

        .chipmac.c2mac {
        animation-delay: 5s;
        }

        @keyframes chipmacM {
        0% {
            opacity: 1;
            transform: translateZ(55px);
        }
        50% {
            opacity: 1;
            transform: translateZ(55px) translateX(300px);
        }
        100% {
            opacity: 0;
            transform: translateZ(55px) translateX(300px);
        }
        }

        .shapemac {
        position: absolute;
        width: 130px;
        height: 130px;
        transform: translateZ(1px);
        transform-style: preserve-3d;
        }

        .shapemac1 {
        top: 50px;
        left: 50px;
        background-color: green;
        }

        .shapemac2mac {
        top: 50px;
        left: 400px; /*calc(50px + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }


        .shapemac3 {
        top: 50px;
        left: 750px; /*calc(50px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }

        .shapemac4 {
        top: 50px;
        left: 1100px; /*calc(50px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px  + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }

        .shapemac5 {
        top: 50px;
        left: 1450; /*calc(50px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px  + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }

        .alarmmac-panelmac {
        position: absolute;
        top: 30px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        }

        .metricsmac-popupmac {
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
        }

        .picmac-screenmac {
        position: absolute;
        width: 130px;
        height: 130px;
        }


        .sidemac {
        color: #fff;
        font-size: 30px;
        /*   transition: all 5s; */
        position: absolute;
        background-color: red;
        display: flex;
        justify-content: center;
        align-items: center;
        transform-origin: 50% 100%;
        transform-style: preserve-3d;
        }

        .sidemac::after {
        position: absolute;
        content: '';
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background-color: yellow;
        left: calc(50% - 5px);
        top: calc(100% - 5px);
        }

        .openmac-sidemac {
        background-color: transparent;
        }

        .openmac-sidemac::before {
        content: '';
        width: 100%;
        height: 100%;
        border-top: 20px solid #f48a00;
        border-left: 15px solid #f48a00;
        border-rightmac: 15px solid #f48a00;
        }

        .rightmac {
        height: 50px;
        width: 130px;
        top: 50%;
        left: 100%;
        background-color: #3A4245;
        transform: translateY(-100%)
            translateX(-50%)
            rotateZ(90deg)
            rotateY(180deg);
        }

        .alarmmac-panelmac .rightmac {
        height: 10px;
        width: 50px;
        }

        .metricsmac-popupmac .rightmac {
        height: 10px;
        width: 200px;
        }

        .picmac-screenmac .rightmac {
        width: 130px;
        height: 10px;
        }

        .innermac-basemac {
        font-size: 15px;
        top: 0%;
        left: 50%;
        width: 100%;
        height: 130px;
        background-color: #222526;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        }

        input[type="checkbox"]:checked + .floormac .rightmac .innermac-basemac {
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(90deg);
        }

        .openmacningmac {
        font-size: 15px;
        top: 0%;
        left: 50%;
        width: 100%;
        height: 100px;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        }

        .openmacningmac-leftmac {
        position: absolute;
        width: calc(50% - 22.5px - 15px);
        height: calc(100% - 20px);
        left: 15px;
        top: 20px;
        background: repeating-linear-gradient(90deg, #6C7F86, #6C7F86 13px, black 13px, black 15px);
        }

        .openmacningmac-middle1 {
        position: absolute;
        width: 15px;
        height: calc(100% - 20px);
        left: calc(50% - 22.5px - 15px + 15px);
        top: 20px;
        background: repeating-linear-gradient(90deg, black, black 2px, #6C7F86 2px, #6C7F86 14px, black 14px, black 15px);
        transform-origin: 50% 0%;
        animation-name: om1n3;
        animation-duration: 5s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        }

        .openmacningmac-middle2 {
        position: absolute;
        width: 15px;
        height: calc(100% - 20px);
        left: calc(50% - 22.5px - 15px + 15px + 15px);
        top: 20px;
        background: repeating-linear-gradient(90deg, black, black 1px, #6C7F86 1px, #6C7F86 14px, black 14px, black 15px);
        transform-origin: 50% 0%;
        animation-name: om2;
        animation-duration: 5s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        }

        .openmacningmac-middle3 {
        position: absolute;
        width: 15px;
        height: calc(100% - 20px);
        left: calc(50% - 22.5px - 15px + 15px + 15px + 15px);
        top: 20px;
        background: repeating-linear-gradient(90deg, black, black 1px, #6C7F86 1px, #6C7F86 13px, black 13px, black 15px);
        transform-origin: 50% 0%;
        animation-name: om1n3;
        animation-duration: 5s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        }

        @keyframes om1n3 {
        0% {
            transform: none;
        }
        20% {
            transform: rotateX(20deg);
        }
        40% {
            transform: rotateX(20deg);
        }
        50% {
            transform: rotateX(-10deg);
        }
        60% {
            transform: rotateX(10deg);
        }
        70% {
            transform: rotateX(-5deg);
        }
        80% {
            transform: none;
        }
        100% {
            transform: none;
        }
        }

        @keyframes om2 {
        0% {
            transform: none;
        }
        20% {
            transform: rotateX(25deg);
        }
        40% {
            transform: rotateX(25deg);
        }
        50% {
            transform: rotateX(-15deg);
        }
        60% {
            transform: rotateX(15deg);
        }
        70% {
            transform: rotateX(-10deg);
        }
        80% {
            transform: none;
        }
        100% {
            transform: none;
        }
        }

        .openmacningmac-rightmac {
        position: absolute;
        width: calc(50% - 22.5px - 15px);
        height: calc(100% - 20px);
        right: 15px;
        top: 20px;
        background: repeating-linear-gradient(90deg, #6C7F86, #6C7F86 13px, black 13px, black 15px);
        }

        input[type="checkbox"]:checked + .floormac .rightmac {
        transform: translateY(-100%)
            translateX(-50%)
            rotateZ(90deg)
            rotateY(180deg)
            rotateX(90deg);
        }

        .rightmac .cornermac {
        font-size: 15px;
        top: 0%;
        left: 50%;
        width: 100%;
        height: 34.64px;
        background-color: #f2a201;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        }

        input[type="checkbox"]:checked + .floormac .rightmac .cornermac {
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(30deg);
        }

        .leftmacmac {
        height: 180px;
        width: 130px;
        top: 50%;
        left: 0%;
        background-color: #f2a201;
        transform: translateY(-100%)
            translateX(-50%)
            rotateZ(-90deg)
            rotateY(180deg);
        }

        .alarmmac-panelmac .leftmacmac {
        background-color: #3A4245;
        height: 10px;
        width: 50px;
        }

        .metricsmac-popupmac .leftmacmac {
        background-color: #3A4245;
        height: 10px;
        width: 200px;
        }

        .picmac-screenmac .leftmacmac {
        width: 130px;
        height: 10px;
        }

        :not(.alarmmac-panelmac):not(.metricsmac-popupmac):not(.picmac-screenmac) > .leftmacmac::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 50px;
        bottom: 0;
        left: 0;
        background-color: #40484B;
        border: 15px solid #475256;
        }

        input[type="checkbox"]:checked + .floormac .leftmacmac {
        transform: translateY(-100%)
            translateX(-50%)
            rotateZ(-90deg)
            rotateY(180deg) 
            rotateX(90deg);
        }

        .frontmac {
        width: 130px;
        height: 150px;
        top: 0%;
        left: 50%;
        background-color: #f9b234;
        transform: 
            translateX(-50%)
            translateY(-100%)
            rotateZ(0deg)
            rotateY(180deg);
        }

        .alarmmac-panelmac .frontmac {
        background-color: #91A4AB;
        height: 10px;
        width: 50px;
        }

        .metricsmac-popupmac .frontmac {
        background-color: #91A4AB;
        height: 10px;
        width: 240px;
        }

        .picmac-screenmac .frontmac {
        background-color: #91A4AB;
        width: 130px;
        height: 10px;
        }

        :not(.alarmmac-panelmac):not(.metricsmac-popupmac):not(.picmac-screenmac) > .frontmac::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 50px;
        bottom: 0;
        left: 0;
        background-color: #40484B;
        border: 15px solid #475256;
        }

        input[type="checkbox"]:checked + .floormac .frontmac {
        transform: 
            translateX(-50%)
            translateY(-100%)
            rotateZ(0deg)
            rotateY(180deg)
            rotateX(90deg);
        }

        .frontmac .fornt-cornermac {
        font-size: 15px;
        top: 0%;
        left: 50%;
        width: 100%;
        height: 30px;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        background-color: transparent;
        }

        .frontmac .fornt-cornermac::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-color: transparent;
        border-bottom: 30px solid #f9b234;
        border-left: 17.32px solid transparent;
        border-right: 0px solid transparent;
        height: 0;
        }


        .backmac {
        width: 130px;
        height: 150px;
        top: 100%;
        left: 50%;
        background-color: #f9b234;
        transform: translateX(-50%)
            translateY(-100%)
            rotateZ(-180deg)
            rotateY(180deg); 
        }

        .alarmmac-panelmac .backmac {
        background-color: #91A4AB;
        height: 10px;
        width: 50px;
        }

        .metricsmac-popupmac .backmac {
        background-color: #91A4AB;
        height: 10px;
        width: 200px;
        }

        .picmac-screenmac .backmac {
        background-color: #91A4AB;
        width: 130px;
        height: 10px;
        }

        .alarmmac-panelmac-screenmac {
        top: 0%;
        left: 50%;
        width: 100%;
        height: 50px;
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(90deg);
        transform-style: preserve-3d;
        background-color: #00C3F9;
        border: 5px solid #67797B;
        overflow: hidden;
        }

        .metric-panelmac-screenmac {
        display: flex;
        justify-content: start;
        align-items: start;
        flex-direction: column;
        padding: 10px;
        top: 0%;
        left: 50%;
        width: 120%;
        height: 200px;
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(90deg);
        transform-style: preserve-3d;
        background-color: black; /*#76daff */
        border: 5px solid #67797B;
        overflow: hidden;
        }

        

        .picmac-panelmac-screenmac {
        top: 0%;
        left: 50%;
        width: 100%;
        height: 130px;
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(90deg);
        transform-style: preserve-3d;
        background-color: #00C3F9;
        border: 5px solid #67797B;
        overflow: hidden;
        }

        .mTitle {
        font-size: 30px;
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
        }

        .metric {
        color: #000000;
        font-size: 25px;
        margin-bottom: 10px;
        }

        .metric-name {
        font-weight: bold;
        }

        .alarmmac-panelmac-screenmac::before,
        .metric-panelmac-screenmac::before,
        .picmac-panelmac-screenmac::before,
        .flip-card-front::before,
        .flip-card-back::before
        {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 200%;
        height: 50%;
        background-color: #00DFFE; 
        transform: translateY(-50%) rotateZ(-45deg);
        z-index: -1;
        }

        .metric-panelmac-screenmac::before,
        .flip-card-front::before,
        .flip-card-back::before{
        background-color: #c7c7c9;
        opacity:0.5; /*#3dbdec shadow*/
        }


        :not(.alarmmac-panelmac):not(.metricsmac-popupmac):not(.picmac-screenmac) > .backmac::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 50px;
        bottom: 0;
        left: 0;
        background-color: #40484B;
        border: 15px solid #475256;
        }

        input[type="checkbox"]:checked + .floormac .backmac {
        transform: translateX(-50%)
            translateY(-100%)
            rotateZ(-180deg)
            rotateY(180deg)
            rotateX(90deg);
        }

        .backmac .backmac-cornermac {
        font-size: 15px;
        top: 0%;
        left: 50%;
        width: 100%;
        height: 30px;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        background-color: transparent;
        }

        .backmac .backmac-cornermac::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-color: transparent;
        border-bottom: 30px solid #f9b234;
        border-left: 0px solid transparent;
        border-right: 17.32px solid transparent;
        height: 0;
        }

        .topmac {
        position: absolute;
        background-color: blue;
        width: 100%;
        height: calc(130px - 17.32px);
        top: 0%;
        left: 50%;
        border: 10px solid #feed02;
        background-color: #f9b234;
        box-shadow: inset -8px 8px 0 0px #f2a201;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        }

        input[type="checkbox"]:checked + .floormac .topmac {
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(60deg);
        }

        .chakalaka {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background-color: #678a8f;
        border: 3px solid #424e58;
        padding: 2px;
        transform-style: preserve-3d;
        }

        .chakalaka-content {
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        }

        .chakalaka-content > .chakalaka-topmac {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #fe0000;
        transform: translateZ(20px);
        -webkit-animation: red 1s infinite;
        animation: red 1s infinite; 
        }

        .chakalaka-content > .chakalaka-cylindermac {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        }

        .cylindermac {
        position: absolute;
        width: 38.27%;
        height: 20px;
        transform-origin: 50% 0%;
        left: 50%;
        top: 0;
        transform-style: preserve-3d;
        }

        .cylindermac > .cylindermac-sidemac {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #fe0000;
        transform-origin: 0% 0%;
        transform: rotateX(90deg) rotateY(22.5deg);
        backface-visibility: visible;
        transform-style: preserve-3d;
        transition: green 2s ease-out;
        -webkit-animation: green 1s infinite;
        animation: green 1s infinite; 
        }

        @-webkit-keyframes red {
          0% { background-color: red; }
          33% { background-color: #fff; }  
          67% { background-color: red; }
          100% { background-color: #fff; }
        }

        @keyframes red {
          0% { background-color: red; }
          33% { background-color: #fff; }  
          67% { background-color: red; }
          100% { background-color: #fff; }
        }

        @-webkit-keyframes green {
          0% { background-color: green; }
          33% { background-color: green; }  
          67% { background-color: green; }
          100% { background-color: green; }
        }

        @keyframes green {
          0% { background-color: green; }
          33% { background-color: green; }  
          67% { background-color: green; }
          100% { background-color: green; }
        }

        .cylindermac > .cylindermac-sidemac .cylindermac-sidemac {
        position: absolute;
        left: 100%;
        width: 100%;
        height: 100%;
        background: #fe0000;
        transform-origin: 0% 50%;
        transform: rotateY(45deg);
        transform-style: preserve-3d;
        transition: 0.6s;
        -webkit-animation: green 1s infinite;
        animation: red 1s infinite; 
        }

        .cylindermac .cylindermac-sidemac.color2 {
        background-color: #DD0101;
        transition: 0.6s;
        
        }

        .maslulmac {
        position: absolute;
        width: 200px;
        height: 130px;
        transform: translateZ(50px);
        overflow: hidden;
        transition: 0.6s;
        }

        .maslulmac::before {
        content: '';
        position: absolute;
        top: 0;
        left: -22px;
        width: calc(100% + 22px);
        height: 100%;
        background: repeating-linear-gradient(90deg, #5D6B6F, #5D6B6F 20px, black 20px, black 22px);
        transform: translateX(0px);
        animation-name: maslulmacMove;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        }

        .maslulmac.m1 {
        top: 50px;
        left: 190px; /*calc(50px + 130px + 10px)*/
        }

        .maslulmac.m2 {
        top: 50px;
        left: 540px;/*calc(50px + 130px + 10px + 80px + 10px + 250px + 10px)*/
        }

        .maslulmac.m3 {
        top: 50px;
        left: 890px;/*calc(50px + 130px + 10px + 80px + 10px + 250px + 10px + 200px + 10px + 130px + 10px)*/
        }

        .maslulmac.m4 {
        top: 50px;
        left: 1240px;/*calc(50px + 130px + 10px + 80px + 10px + 250px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px)*/
        }

        .maslulmac.m5 {
        top: 50px;
        left: 1590px; /*calc(50px + 130px + 10px + 200px + 10px + 250px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px)*/
        }

        .maslulmac.m6 {
        top: 50px;
        left: 1930px; /*calc(50px + 130px + 10px + 200px + 10px + 250px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px)*/
        }


        @keyframes maslulmacMove {
        from {
            transform: translateX(0px);  
        }
        to {
            transform: translateX(22px);
        }
        }

        .metricsmac-popupmac {
        position: absolute;
        background-color: red;
        top: 0%;
        left: 50%;
        width: 240px;
        height: 200px;
        transform-origin: 50% 100%; /*height of display */
        transform: translateX(-50%) translateY(-100%) rotateX(-90deg) translateY(-220px) rotateY(0deg); /*original (transform: translateX(-50%) translateY(-100%) rotateX(-90deg) translateY(-220px) rotateY(0deg);)*/
        transform-style: preserve-3d;
        }
        </style>
    </head>
    <body>
        <input type="checkbox" id="checkbox" style="display:none;"/>
<div class="floormac">
  
  <div class="shapemac shapemac1">
    
    <div class="shapemac metricsmac-popupmac">
      
      <div class="sidemac rightmac"></div>
      
      <div class="sidemac leftmac"></div>
      
      <div class="sidemac frontmac"></div>
      
      <div class="sidemac backmac">
        
        <div class="sidemac metric-panelmac-screenmac">
        <div class="flip-card">
            <div class="flip-card-front">L08 Station 1</div>
            <div class="flip-card-back" style="background:black"><b style="color:white;">Actual Output : 180 <br>Target Output : 170<br>Condition : Run</b></div>
        
          <div class="mTitle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="chipmac c1" style="background-image:url(media/circuitboarddemo02.jpg);"></div>
    <div class="chipmac c2mac" style="background-image:url(media/circuitboarddemo02.jpg);"></div>
    <div class="sidemac rightmac">
      <div class="sidemac innermac-basemac"></div>
      <div class="sidemac openmacningmac openmac-sidemac">
        <div class="openmacningmac-leftmac"></div>
        <div class="openmacningmac-middle1"></div>
        <div class="openmacningmac-middle2"></div>
        <div class="openmacningmac-middle3"></div>
        <div class="openmacningmac-rightmac"></div>
        <div class="sidemac cornermac">
          Cornermac
          <div class="sidemac topmac">
            <div class="chakalaka">
              <div class="chakalaka-content">
              <div id="L08part6a" class="chakalaka-topmac" style="background:black; animation:green 1s infinite;">
                  
                  </div>
                <div class="chakalaka-cylindermac">
                  <div class="cylindermac">
                    <div class="cylindermac-sidemac color2" >
                      <div class="cylindermac-sidemac" style="background:black; animation:green 1s infinite;">
                        <div class="cylindermac-sidemac color2" style="background:black; animation:green 1s infinite;">
                          <div class="cylindermac-sidemac" style="background:black; animation:green 1s infinite;">
                            <div id="L08part6b" class="cylindermac-sidemac color2" style="background:black; animation:green 1s infinite;">
                              <div id="L08part6c" class="cylindermac-sidemac" style="background:black; animation:green 1s infinite;">
                                <div id="L08part6d" class="cylindermac-sidemac color2" style="background:black; animation:green 1s infinite;">
                                  <div id="L08part6e" class="cylindermac-sidemac"style="background:black; animation:green 1s infinite;">

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidemac leftmac">
    </div>
    <div class="sidemac frontmac">
      Frontmac
      <div class="sidemac fornt-cornermac">
        cornermac
      </div>
    </div>
    <div class="sidemac backmac">
      Back
      <div class="shapemac alarmmac-panelmac active-screenmac">
        <div class="sidemac rightmac"></div>
        <div class="sidemac leftmac"></div>
        <div class="sidemac frontmac"></div>
        <div class="sidemac backmac">
          <div class="sidemac alarmmac-panelmac-screenmac"></div>
        </div>
      </div>
      <div class="sidemac backmac-cornermac">
        cornermac
      </div>
    </div>
  </div>
  
  <div class="maslulmac m1"></div>
  <div class="shapemac shapemac3">
    <div class="shapemac metricsmac-popupmac">
      <div class="sidemac rightmac"></div>
      <div class="sidemac leftmac"></div>
      <div class="sidemac frontmac"></div>
      <div class="sidemac backmac">
        <div class="sidemac metric-panelmac-screenmac">
        <div class="flip-card">
            <div class="flip-card-front">L08 Station 3</div>
            <div class="flip-card-back" style="background:black"><b style="color:white;">Actual Output : 180 <br>Target Output : 170<br>Condition : Run</b></div>
        
          <div class="mTitle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="chipmac c1"></div>
    <div class="chipmac c2mac"></div>
    <div class="sidemac rightmac">
      <div class="sidemac innermac-basemac"></div>
      <div class="sidemac openmacningmac openmac-sidemac">
        <div class="openmacningmac-leftmac"></div>
        <div class="openmacningmac-middle1"></div>
        <div class="openmacningmac-middle2"></div>
        <div class="openmacningmac-middle3"></div>
        <div class="openmacningmac-rightmac"></div>
        <div class="sidemac cornermac">
          Cornermac
          <div class="sidemac topmac">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-topmac">
                </div>
                <div class="chakalaka-cylindermac">
                  <div class="cylindermac">
                    <div class="cylindermac-sidemac color2">
                      <div class="cylindermac-sidemac">
                        <div class="cylindermac-sidemac color2">
                          <div class="cylindermac-sidemac">
                            <div class="cylindermac-sidemac color2">
                              <div class="cylindermac-sidemac">
                                <div class="cylindermac-sidemac color2">
                                  <div class="cylindermac-sidemac">

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidemac leftmac">
    </div>
    <div class="sidemac frontmac">
      Frontmac
      <div class="sidemac fornt-cornermac">
        cornermac
      </div>
    </div>
    <div class="sidemac backmac">
      Back
      <div class="shapemac alarmmac-panelmac active-screenmac">
        <div class="sidemac rightmac"></div>
        <div class="sidemac leftmac"></div>
        <div class="sidemac frontmac"></div>
        <div class="sidemac backmac">
          <div class="sidemac alarmmac-panelmac-screenmac"></div>
        </div>
      </div>
      <div class="sidemac backmac-cornermac">
        cornermac
      </div>
    </div>
  </div>
  <div class="maslulmac m3"></div>
  <div class="shapemac shapemac2mac">
    <div class="shapemac metricsmac-popupmac">
      <div class="sidemac rightmac"></div>
      <div class="sidemac leftmac"></div>
      <div class="sidemac frontmac"></div>
      <div class="sidemac backmac">
        <div class="sidemac metric-panelmac-screenmac">
        <div class="flip-card">
            <div class="flip-card-front">L08 Station 2</div>
            <div class="flip-card-back" style="background:black"><b style="color:white;">Actual Output : 180 <br>Target Output : 170<br>Condition : Run</b></div>
        
          <div class="mTitle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="chipmac c1"></div>
    <div class="chipmac c2mac"></div>
    <div class="sidemac rightmac">
      <div class="sidemac innermac-basemac"></div>
      <div class="sidemac openmacningmac openmac-sidemac">
        <div class="openmacningmac-leftmac"></div>
        <div class="openmacningmac-middle1"></div>
        <div class="openmacningmac-middle2"></div>
        <div class="openmacningmac-middle3"></div>
        <div class="openmacningmac-rightmac"></div>
        <div class="sidemac cornermac">
          Cornermac
          <div class="sidemac topmac">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-topmac">
                </div>
                <div class="chakalaka-cylindermac">
                  <div class="cylindermac">
                    <div class="cylindermac-sidemac color2">
                      <div class="cylindermac-sidemac">
                        <div class="cylindermac-sidemac color2">
                          <div class="cylindermac-sidemac">
                            <div class="cylindermac-sidemac color2">
                              <div class="cylindermac-sidemac">
                                <div class="cylindermac-sidemac color2">
                                  <div class="cylindermac-sidemac">

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidemac leftmac">
    </div>
    <div class="sidemac frontmac">
      Frontmac
      <div class="sidemac fornt-cornermac">
        cornermac
      </div>
    </div>
    <div class="sidemac backmac">
      Back
      <div class="shapemac alarmmac-panelmac active-screenmac">
        <div class="sidemac rightmac"></div>
        <div class="sidemac leftmac"></div>
        <div class="sidemac frontmac"></div>
        <div class="sidemac backmac">
          <div class="sidemac alarmmac-panelmac-screenmac"></div>
        </div>
      </div>
      <div class="sidemac backmac-cornermac">
        cornermac
      </div>
    </div>
  </div>
  <div class="maslulmac m2"></div>
  <div class="shapemac shapemac4">
    <div class="shapemac metricsmac-popupmac">
      <div class="sidemac rightmac"></div>
      <div class="sidemac leftmac"></div>
      <div class="sidemac frontmac"></div>
      <div class="sidemac backmac">
        <div class="sidemac metric-panelmac-screenmac">
        <div class="flip-card">
            <div class="flip-card-front">L08 Station 4</div>
            <div class="flip-card-back" style="background:black"><b style="color:white;">Actual Output : 180 <br>Target Output : 170<br>Condition : Run</b></div>
        
          <div class="mTitle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="chipmac c1"></div>
    <div class="chipmac c2mac"></div>
    <div class="sidemac rightmac">
      <div class="sidemac innermac-basemac"></div>
      <div class="sidemac openmacningmac openmac-sidemac">
        <div class="openmacningmac-leftmac"></div>
        <div class="openmacningmac-middle1"></div>
        <div class="openmacningmac-middle2"></div>
        <div class="openmacningmac-middle3"></div>
        <div class="openmacningmac-rightmac"></div>
        <div class="sidemac cornermac">
          Cornermac
          <div class="sidemac topmac">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-topmac">
                </div>
                <div class="chakalaka-cylindermac">
                  <div class="cylindermac">
                    <div class="cylindermac-sidemac color2">
                      <div class="cylindermac-sidemac">
                        <div class="cylindermac-sidemac color2">
                          <div class="cylindermac-sidemac">
                            <div class="cylindermac-sidemac color2">
                              <div class="cylindermac-sidemac">
                                <div class="cylindermac-sidemac color2">
                                  <div class="cylindermac-sidemac">

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidemac leftmac">
    </div>
    <div class="sidemac frontmac">
      Frontmac
      <div class="sidemac fornt-cornermac">
        cornermac
      </div>
    </div>
    <div class="sidemac backmac">
      Back
      <div class="shapemac alarmmac-panelmac active-screenmac">
        <div class="sidemac rightmac"></div>
        <div class="sidemac leftmac"></div>
        <div class="sidemac frontmac"></div>
        <div class="sidemac backmac">
          <div class="sidemac alarmmac-panelmac-screenmac"></div>
        </div>
      </div>
      <div class="sidemac backmac-cornermac">
        cornermac
      </div>
    </div>
  </div>
  <div class="maslulmac m4"></div>
  <div class="shapemac shapemac5">
    <div class="shapemac metricsmac-popupmac">
      <div class="sidemac rightmac"></div>
      <div class="sidemac leftmac"></div>
      <div class="sidemac frontmac"></div>
      <div class="sidemac backmac">
        <div class="sidemac metric-panelmac-screenmac">
        <div class="flip-card">
            <div class="flip-card-front">L08 Station 5</div>
            <div class="flip-card-back" style="background:black"><b style="color:white;">Actual Output : 180 <br>Target Output : 170<br>Condition : Run</b></div>
        
          <div class="mTitle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="chipmac c1"></div>
    <div class="chipmac c2mac"></div>
    <div class="sidemac rightmac">
      <div class="sidemac innermac-basemac"></div>
      <div class="sidemac openmacningmac openmac-sidemac">
        <div class="openmacningmac-leftmac"></div>
        <div class="openmacningmac-middle1"></div>
        <div class="openmacningmac-middle2"></div>
        <div class="openmacningmac-middle3"></div>
        <div class="openmacningmac-rightmac"></div>
        <div class="sidemac cornermac">
          Cornermac
          <div class="sidemac topmac">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-topmac">
                </div>
                <div class="chakalaka-cylindermac">
                  <div class="cylindermac">
                    <div class="cylindermac-sidemac color2">
                      <div class="cylindermac-sidemac">
                        <div class="cylindermac-sidemac color2">
                          <div class="cylindermac-sidemac">
                            <div class="cylindermac-sidemac color2">
                              <div class="cylindermac-sidemac">
                                <div class="cylindermac-sidemac color2">
                                  <div class="cylindermac-sidemac">

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidemac leftmac">
    </div>
    <div class="sidemac frontmac">
      Frontmac
      <div class="sidemac fornt-cornermac">
        cornermac
      </div>
    </div>
    <div class="sidemac backmac">
      Back
      <div class="shapemac alarmmac-panelmac active-screenmac">
        <div class="sidemac rightmac"></div>
        <div class="sidemac leftmac"></div>
        <div class="sidemac frontmac"></div>
        <div class="sidemac backmac">
          <div class="sidemac alarmmac-panelmac-screenmac"></div>
        </div>
      </div>
      <div class="sidemac backmac-cornermac">
        cornermac
      </div>
    </div>
  </div>
  <div class="maslulmac m5"></div>
  <div class="shapemac shapemac5">
    <div class="shapemac metricsmac-popupmac">
      <div class="sidemac rightmac"></div>
      <div class="sidemac leftmac"></div>
      <div class="sidemac frontmac"></div>
      <div class="sidemac backmac">
        <div class="sidemac metric-panelmac-screenmac">
        <div class="flip-card">
            <div class="flip-card-front">L08 Station 5</div>
            <div class="flip-card-back" style="background:black"><b style="color:white;">Actual Output : 180 <br>Target Output : 170<br>Condition : Run</b></div>
        
          <div class="mTitle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="chipmac c1"></div>
    <div class="chipmac c2mac"></div>
    <div class="sidemac rightmac">
      <div class="sidemac innermac-basemac"></div>
      <div class="sidemac openmacningmac openmac-sidemac">
        <div class="openmacningmac-leftmac"></div>
        <div class="openmacningmac-middle1"></div>
        <div class="openmacningmac-middle2"></div>
        <div class="openmacningmac-middle3"></div>
        <div class="openmacningmac-rightmac"></div>
        <div class="sidemac cornermac">
          Cornermac
          <div class="sidemac topmac">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-topmac">
                </div>
                <div class="chakalaka-cylindermac">
                  <div class="cylindermac">
                    <div class="cylindermac-sidemac color2">
                      <div class="cylindermac-sidemac">
                        <div class="cylindermac-sidemac color2">
                          <div class="cylindermac-sidemac">
                            <div class="cylindermac-sidemac color2">
                              <div class="cylindermac-sidemac">
                                <div class="cylindermac-sidemac color2">
                                  <div class="cylindermac-sidemac">

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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sidemac leftmac">
    </div>
    <div class="sidemac frontmac">
      Frontmac
      <div class="sidemac fornt-cornermac">
        cornermac
      </div>
    </div>
    <div class="sidemac backmac">
      Back
      <div class="shapemac alarmmac-panelmac active-screenmac">
        <div class="sidemac rightmac"></div>
        <div class="sidemac leftmac"></div>
        <div class="sidemac frontmac"></div>
        <div class="sidemac backmac">
          <div class="sidemac alarmmac-panelmac-screenmac"></div>
        </div>
      </div>
      <div class="sidemac backmac-cornermac">
        cornermac
      </div>
    </div>
  </div>
  <div class="maslulmac m6"></div>
  

<script>
    document.getElementById("checkbox").checked = true;
</script>

<script src="library/js/jquery.js"></script>
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="library/js/scripts.js"></script>
<script src="internaltext/internaltext.js"></script>

<script>
    //Load data after complete openmac web page
    $(document).ready(function () {

        getDataCounter();

        $("#dataCounterBody").empty();
        $("#dataCounterBody").append('<tr align="center" style="font-weight: bold">' +
            '<td colspan="8"><span><img src="media/loading2.gif" width="50" height="50" alt="Mplify"><p>Loading...</p></span></td></tr>');

    });

    //Get Counter data with javascript
    setInterval(getDataCounter, 10000);
    function getDataCounter() {
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "data/ajax_counter_data.php", //Data from folder data
            cache: false,
            dataType: "json",   //expect html to be returned
            success: function (response) {

                console.log(response);

                var summaryTable = document.getElementById("dataCounterBody");
                //
                $("#dataCounterBody").empty();
                for (i = 0; i < response.length; i++) {

                    $("#dataCounterBody").append('<tr align="center" >' +
                        '<td><a href="" style="color:white"><span>' + response[i].line + '</span></a></td>' +
                        '<td><span  style="color:white">' + response[i].shift + '  </span></td>' +
                        '<td><span  style="color:white">' + response[i].lor + '</span></td>' +
                        '<td><span  style="color:white">' + response[i].target + '</span></td>' +
                        '<td><span  style="color:white">' + response[i].actual + '</span></td>' +
                        '<td><span  style="color:white">' + response[i].diff + '</span></td>' +
                        '<td><span  style="color:white">' + response[i].status + '</span></td>' +
                        '<td><span  style="color:white">' + response[i].model + '</span></td></tr>');
                        
                                }
                    
                for (i = 6; i < response.length; i++) {
                    if(response[i].status=="Offline"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" red";
                            document.getElementById('L08part'+i+'a').style.background = 'Grey';
                            document.getElementById('L08part'+i+'b').style.background = 'Grey';
                            document.getElementById('L08part'+i+'c').style.background = 'Grey';
                            document.getElementById('L08part'+i+'d').style.background = 'Grey';
                            document.getElementById('L08part'+i+'e').style.background = 'Grey';
                            document.getElementById('L08part'+i+'condition').textContent="Condition: Off";
                        }

                        else if(response[i].status=="Stop"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" yellow";
                            document.getElementById('L08part'+i+'a').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'b').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'c').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'d').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'e').style.background = '#F53C42';
                            document.getElementById('L08part'+i+'condition').textContent="Condition: Stop";
                        }

                        else if(response[i].status=="Run"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" green";
                            document.getElementById('L08part'+i+'a').style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                            document.getElementById('L08part'+i+'b').style.background = '#00D45F';
                            document.getElementById('L08part'+i+'c').style.background = '#00D45F';
                            document.getElementById('L08part'+i+'d').style.background = '#00D45F';
                            document.getElementById('L08part'+i+'e').style.background = '#00D45F';
                            document.getElementById('L08part'+i+'condition').textContent="Condition: Run";
                        }

                        else if(response[i].status=="Break"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" blue";
                            document.getElementById('L08part'+i+'a').style.background = '#FFEE4A'; 
                            document.getElementById('L08part'+i+'b').style.background = '#FFEE4A';
                            document.getElementById('L08part'+i+'c').style.background = '#FFEE4A';
                            document.getElementById('L08part'+i+'d').style.background = '#FFEE4A';
                            document.getElementById('L08part'+i+'e').style.background = '#FFEE4A';
                            document.getElementById('L08part'+i+'condition').textContent="Condition: Break";
                        }
                        //console.log(document.getElementById('dep'+i).className);
                        //console.log(response[i].actual);
                        
                }
            },
        
            complete: function () {
                // Schedule the next request when the current one's complete
                // setTimeout(getDataCounter(), 10000);  
            }
        });
    }


</script>

    </body>
</html>