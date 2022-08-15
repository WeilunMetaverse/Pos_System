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

        html,
        body {
        height: 100%;
        /*   transition: all 5s; */
        /*   transform: scale(1.5) translateY(100px); */
        }

        input[type="checkbox"] {
        position: absolute;
        left: 100px;
        top: 100px;
        width: 50px;
        height: 50px;
        }

        input[type="checkbox"]:checked + .floor {
        
        }

        .floor {
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
        transform: translateX(850px) translateY(300px) rotateX(60deg) rotateZ(0.1deg); /*move to 2d from top to bottom*/
        transform-style: preserve-3d;
        }

        .chip {
        width: 90px;
        height: 40px;
        position: absolute;
        background-color: red;
        left: calc(100% - 90px - 10px);
        top: calc(50% - 20px);
        background-image: url(https://drive.google.com/uc?id=1XflsByjAENEHX-Mf_ZkefL7oeXkJGIZC);
        background-size: 100% 100%;
        transform: translateZ(55px);
        animation-name: chipM;
        animation-duration: 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        opacity: 0;
        }

        .chip.c2 {
        animation-delay: 5s;
        }

        @keyframes chipM {
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

        .shape {
        position: absolute;
        width: 130px;
        height: 130px;
        transform: translateZ(1px);
        transform-style: preserve-3d;
        }

        .shape1 {
        top: 50px;
        left: 50px;
        background-color: green;
        }

        .shape2 {
        top: 50px;
        left: 400px; /*calc(50px + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }


        .shape3 {
        top: 50px;
        left: 750px; /*calc(50px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }

        .shape4 {
        top: 50px;
        left: 1100px; /*calc(50px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px  + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }

        .shape5 {
        top: 50px;
        left: 1450; /*calc(50px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px  + 130px + 10px + 200px + 10px)*/
        background-color: green;
        }

        .alarm-panel {
        position: absolute;
        top: 30px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        }

        .metrics-popup {
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
        }

        .pic-screen {
        position: absolute;
        width: 130px;
        height: 130px;
        }


        .side {
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

        .side::after {
        position: absolute;
        content: '';
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background-color: yellow;
        left: calc(50% - 5px);
        top: calc(100% - 5px);
        }

        .open-side {
        background-color: transparent;
        }

        .open-side::before {
        content: '';
        width: 100%;
        height: 100%;
        border-top: 20px solid #f48a00;
        border-left: 15px solid #f48a00;
        border-right: 15px solid #f48a00;
        }

        .right {
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

        .alarm-panel .right {
        height: 10px;
        width: 50px;
        }

        .metrics-popup .right {
        height: 10px;
        width: 200px;
        }

        .pic-screen .right {
        width: 130px;
        height: 10px;
        }

        .inner-base {
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

        input[type="checkbox"]:checked + .floor .right .inner-base {
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(90deg);
        }

        .openning {
        font-size: 15px;
        top: 0%;
        left: 50%;
        width: 100%;
        height: 100px;
        transform: translateX(-50%)
            translateY(-100%);
        transform-style: preserve-3d;
        }

        .openning-left {
        position: absolute;
        width: calc(50% - 22.5px - 15px);
        height: calc(100% - 20px);
        left: 15px;
        top: 20px;
        background: repeating-linear-gradient(90deg, #6C7F86, #6C7F86 13px, black 13px, black 15px);
        }

        .openning-middle1 {
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

        .openning-middle2 {
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

        .openning-middle3 {
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

        .openning-right {
        position: absolute;
        width: calc(50% - 22.5px - 15px);
        height: calc(100% - 20px);
        right: 15px;
        top: 20px;
        background: repeating-linear-gradient(90deg, #6C7F86, #6C7F86 13px, black 13px, black 15px);
        }

        input[type="checkbox"]:checked + .floor .right {
        transform: translateY(-100%)
            translateX(-50%)
            rotateZ(90deg)
            rotateY(180deg)
            rotateX(90deg);
        }

        .right .corner {
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

        input[type="checkbox"]:checked + .floor .right .corner {
        transform: translateX(-50%)
            translateY(-100%)
            rotateX(30deg);
        }

        .left {
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

        .alarm-panel .left {
        background-color: #3A4245;
        height: 10px;
        width: 50px;
        }

        .metrics-popup .left {
        background-color: #3A4245;
        height: 10px;
        width: 200px;
        }

        .pic-screen .left {
        width: 130px;
        height: 10px;
        }

        :not(.alarm-panel):not(.metrics-popup):not(.pic-screen) > .left::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 50px;
        bottom: 0;
        left: 0;
        background-color: #40484B;
        border: 15px solid #475256;
        }

        input[type="checkbox"]:checked + .floor .left {
        transform: translateY(-100%)
            translateX(-50%)
            rotateZ(-90deg)
            rotateY(180deg) 
            rotateX(90deg);
        }

        .front {
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

        .alarm-panel .front {
        background-color: #91A4AB;
        height: 10px;
        width: 50px;
        }

        .metrics-popup .front {
        background-color: #91A4AB;
        height: 10px;
        width: 240px;
        }

        .pic-screen .front {
        background-color: #91A4AB;
        width: 130px;
        height: 10px;
        }

        :not(.alarm-panel):not(.metrics-popup):not(.pic-screen) > .front::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 50px;
        bottom: 0;
        left: 0;
        background-color: #40484B;
        border: 15px solid #475256;
        }

        input[type="checkbox"]:checked + .floor .front {
        transform: 
            translateX(-50%)
            translateY(-100%)
            rotateZ(0deg)
            rotateY(180deg)
            rotateX(90deg);
        }

        .front .fornt-corner {
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

        .front .fornt-corner::before {
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


        .back {
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

        .alarm-panel .back {
        background-color: #91A4AB;
        height: 10px;
        width: 50px;
        }

        .metrics-popup .back {
        background-color: #91A4AB;
        height: 10px;
        width: 200px;
        }

        .pic-screen .back {
        background-color: #91A4AB;
        width: 130px;
        height: 10px;
        }

        .alarm-panel-screen {
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

        .metric-panel-screen {
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
        background-color: #76daff;
        border: 5px solid #67797B;
        overflow: hidden;
        }

        .pic-panel-screen {
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

        .alarm-panel-screen::before,
        .metric-panel-screen::before,
        .pic-panel-screen::before
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

        .metric-panel-screen::before{
        background-color: #3dbdec;
        }


        :not(.alarm-panel):not(.metrics-popup):not(.pic-screen) > .back::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 50px;
        bottom: 0;
        left: 0;
        background-color: #40484B;
        border: 15px solid #475256;
        }

        input[type="checkbox"]:checked + .floor .back {
        transform: translateX(-50%)
            translateY(-100%)
            rotateZ(-180deg)
            rotateY(180deg)
            rotateX(90deg);
        }

        .back .back-corner {
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

        .back .back-corner::before {
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

        .top {
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

        input[type="checkbox"]:checked + .floor .top {
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

        .chakalaka-content > .chakalaka-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #fe0000;
        transform: translateZ(20px);
        }

        .chakalaka-content > .chakalaka-cylinder {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        }

        .cylinder {
        position: absolute;
        width: 38.27%;
        height: 20px;
        transform-origin: 50% 0%;
        left: 50%;
        top: 0;
        transform-style: preserve-3d;
        }

        .cylinder > .cylinder-side {
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
        }

        .cylinder > .cylinder-side .cylinder-side {
        position: absolute;
        left: 100%;
        width: 100%;
        height: 100%;
        background: #fe0000;
        transform-origin: 0% 50%;
        transform: rotateY(45deg);
        transform-style: preserve-3d;
        }

        .cylinder .cylinder-side.color2 {
        background-color: #DD0101;
        }

        .maslul {
        position: absolute;
        width: 200px;
        height: 130px;
        transform: translateZ(50px);
        overflow: hidden;
        }

        .maslul::before {
        content: '';
        position: absolute;
        top: 0;
        left: -22px;
        width: calc(100% + 22px);
        height: 100%;
        background: repeating-linear-gradient(90deg, #5D6B6F, #5D6B6F 20px, black 20px, black 22px);
        transform: translateX(0px);
        animation-name: maslulMove;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        }

        .maslul.m1 {
        top: 50px;
        left: 190px; /*calc(50px + 130px + 10px)*/
        }

        .maslul.m2 {
        top: 50px;
        left: 540px;/*calc(50px + 130px + 10px + 80px + 10px + 250px + 10px)*/
        }

        .maslul.m3 {
        top: 50px;
        left: 890px;/*calc(50px + 130px + 10px + 80px + 10px + 250px + 10px + 200px + 10px + 130px + 10px)*/
        }

        .maslul.m4 {
        top: 50px;
        left: 1240px;/*calc(50px + 130px + 10px + 80px + 10px + 250px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px)*/
        }

        .maslul.m5 {
        top: 50px;
        left: 1590px; /*calc(50px + 130px + 10px + 200px + 10px + 250px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px + 200px + 10px + 130px + 10px)*/
        }

        @keyframes maslulMove {
        from {
            transform: translateX(0px);  
        }
        to {
            transform: translateX(22px);
        }
        }

        .metrics-popup {
        position: absolute;
        background-color: red;
        top: 0%;
        left: 50%;
        width: 240px;
        height: 200px;
        transform-origin: 50% 100%;
        transform: translateX(-50%) translateY(-100%) rotateX(-90deg) translateY(-220px) rotateY(0deg); /*original (transform: translateX(-50%) translateY(-100%) rotateX(-90deg) translateY(-220px) rotateY(0deg);)*/
        transform-style: preserve-3d;
        }
        </style>
    </head>
    <body>
        <input type="checkbox" id="checkbox" style="display:none;"/>
<div class="floor">
  <div class="shape shape1">
    <div class="shape metrics-popup">
      <div class="side right"></div>
      <div class="side left"></div>
      <div class="side front"></div>
      <div class="side back">
        <div class="side metric-panel-screen">
          <div class="mTitle">L31 Station 1</div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
          <div class="metric">
          <span id="L31part22condition" class="metric-name"></span>
          </div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="chip c1" style="background-image:url(media/circuitboarddemo02.jpg);"></div>
    <div class="chip c2" style="background-image:url(media/circuitboarddemo02.jpg);"></div>
    <div class="side right">
      <div class="side inner-base"></div>
      <div class="side openning open-side">
        <div class="openning-left"></div>
        <div class="openning-middle1"></div>
        <div class="openning-middle2"></div>
        <div class="openning-middle3"></div>
        <div class="openning-right"></div>
        <div class="side corner">
          Corner
          <div class="side top">
            <div class="chakalaka">
              <div class="chakalaka-content">
              <div id="L31part22a" class="chakalaka-top" style="background:black;">
                  
                  </div>
                <div class="chakalaka-cylinder">
                  <div class="cylinder">
                    <div class="cylinder-side color2">
                      <div class="cylinder-side">
                        <div class="cylinder-side color2">
                          <div class="cylinder-side">
                            <div id="L31part22b" class="cylinder-side color2" style="background:black;">
                              <div id="L31part22c" class="cylinder-side" style="background:black;">
                                <div id="L31part22d" class="cylinder-side color2" style="background:black;">
                                  <div id="L31part22e" class="cylinder-side"style="background:black;">

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
    <div class="side left">
    </div>
    <div class="side front">
      Front
      <div class="side fornt-corner">
        corner
      </div>
    </div>
    <div class="side back">
      Back
      <div class="shape alarm-panel active-screen">
        <div class="side right"></div>
        <div class="side left"></div>
        <div class="side front"></div>
        <div class="side back">
          <div class="side alarm-panel-screen"></div>
        </div>
      </div>
      <div class="side back-corner">
        corner
      </div>
    </div>
  </div>
  
  <div class="maslul m1"></div>
  <div class="shape shape3">
    <div class="shape metrics-popup">
      <div class="side right"></div>
      <div class="side left"></div>
      <div class="side front"></div>
      <div class="side back">
        <div class="side metric-panel-screen">
          <div class="mTitle">L31 Station 3</div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
          <div class="metric">
            <span class="metric-name">Condition: </span>
            Run
          </div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="chip c1"></div>
    <div class="chip c2"></div>
    <div class="side right">
      <div class="side inner-base"></div>
      <div class="side openning open-side">
        <div class="openning-left"></div>
        <div class="openning-middle1"></div>
        <div class="openning-middle2"></div>
        <div class="openning-middle3"></div>
        <div class="openning-right"></div>
        <div class="side corner">
          Corner
          <div class="side top">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-top">
                </div>
                <div class="chakalaka-cylinder">
                  <div class="cylinder">
                    <div class="cylinder-side color2">
                      <div class="cylinder-side">
                        <div class="cylinder-side color2">
                          <div class="cylinder-side">
                            <div class="cylinder-side color2">
                              <div class="cylinder-side">
                                <div class="cylinder-side color2">
                                  <div class="cylinder-side">

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
    <div class="side left">
    </div>
    <div class="side front">
      Front
      <div class="side fornt-corner">
        corner
      </div>
    </div>
    <div class="side back">
      Back
      <div class="shape alarm-panel active-screen">
        <div class="side right"></div>
        <div class="side left"></div>
        <div class="side front"></div>
        <div class="side back">
          <div class="side alarm-panel-screen"></div>
        </div>
      </div>
      <div class="side back-corner">
        corner
      </div>
    </div>
  </div>
  <div class="maslul m3"></div>
  <div class="shape shape2">
    <div class="shape metrics-popup">
      <div class="side right"></div>
      <div class="side left"></div>
      <div class="side front"></div>
      <div class="side back">
        <div class="side metric-panel-screen">
          <div class="mTitle">L31 Station 2</div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
          <div class="metric">
            <span class="metric-name">Condition: </span>
            Run
          </div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="chip c1"></div>
    <div class="chip c2"></div>
    <div class="side right">
      <div class="side inner-base"></div>
      <div class="side openning open-side">
        <div class="openning-left"></div>
        <div class="openning-middle1"></div>
        <div class="openning-middle2"></div>
        <div class="openning-middle3"></div>
        <div class="openning-right"></div>
        <div class="side corner">
          Corner
          <div class="side top">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-top">
                </div>
                <div class="chakalaka-cylinder">
                  <div class="cylinder">
                    <div class="cylinder-side color2">
                      <div class="cylinder-side">
                        <div class="cylinder-side color2">
                          <div class="cylinder-side">
                            <div class="cylinder-side color2">
                              <div class="cylinder-side">
                                <div class="cylinder-side color2">
                                  <div class="cylinder-side">

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
    <div class="side left">
    </div>
    <div class="side front">
      Front
      <div class="side fornt-corner">
        corner
      </div>
    </div>
    <div class="side back">
      Back
      <div class="shape alarm-panel active-screen">
        <div class="side right"></div>
        <div class="side left"></div>
        <div class="side front"></div>
        <div class="side back">
          <div class="side alarm-panel-screen"></div>
        </div>
      </div>
      <div class="side back-corner">
        corner
      </div>
    </div>
  </div>
  <div class="maslul m2"></div>
  <div class="shape shape4">
    <div class="shape metrics-popup">
      <div class="side right"></div>
      <div class="side left"></div>
      <div class="side front"></div>
      <div class="side back">
        <div class="side metric-panel-screen">
          <div class="mTitle">L31 Station 5</div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
          <div class="metric">
            <span class="metric-name">Condition: </span>
            Run
          </div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="chip c1"></div>
    <div class="chip c2"></div>
    <div class="side right">
      <div class="side inner-base"></div>
      <div class="side openning open-side">
        <div class="openning-left"></div>
        <div class="openning-middle1"></div>
        <div class="openning-middle2"></div>
        <div class="openning-middle3"></div>
        <div class="openning-right"></div>
        <div class="side corner">
          Corner
          <div class="side top">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-top">
                </div>
                <div class="chakalaka-cylinder">
                  <div class="cylinder">
                    <div class="cylinder-side color2">
                      <div class="cylinder-side">
                        <div class="cylinder-side color2">
                          <div class="cylinder-side">
                            <div class="cylinder-side color2">
                              <div class="cylinder-side">
                                <div class="cylinder-side color2">
                                  <div class="cylinder-side">

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
    <div class="side left">
    </div>
    <div class="side front">
      Front
      <div class="side fornt-corner">
        corner
      </div>
    </div>
    <div class="side back">
      Back
      <div class="shape alarm-panel active-screen">
        <div class="side right"></div>
        <div class="side left"></div>
        <div class="side front"></div>
        <div class="side back">
          <div class="side alarm-panel-screen"></div>
        </div>
      </div>
      <div class="side back-corner">
        corner
      </div>
    </div>
  </div>
  <div class="maslul m4"></div>
  <div class="shape shape5">
    <div class="shape metrics-popup">
      <div class="side right"></div>
      <div class="side left"></div>
      <div class="side front"></div>
      <div class="side back">
        <div class="side metric-panel-screen">
          <div class="mTitle">L31 Station 6</div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
          <div class="metric">
            <span class="metric-name">Condition: </span>
            Run
          </div>
          <div class="metric">
            <span class="metric-name"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="chip c1"></div>
    <div class="chip c2"></div>
    <div class="side right">
      <div class="side inner-base"></div>
      <div class="side openning open-side">
        <div class="openning-left"></div>
        <div class="openning-middle1"></div>
        <div class="openning-middle2"></div>
        <div class="openning-middle3"></div>
        <div class="openning-right"></div>
        <div class="side corner">
          Corner
          <div class="side top">
            <div class="chakalaka">
              <div class="chakalaka-content">
                <div class="chakalaka-top">
                </div>
                <div class="chakalaka-cylinder">
                  <div class="cylinder">
                    <div class="cylinder-side color2">
                      <div class="cylinder-side">
                        <div class="cylinder-side color2">
                          <div class="cylinder-side">
                            <div class="cylinder-side color2">
                              <div class="cylinder-side">
                                <div class="cylinder-side color2">
                                  <div class="cylinder-side">

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
    <div class="side left">
    </div>
    <div class="side front">
      Front
      <div class="side fornt-corner">
        corner
      </div>
    </div>
    <div class="side back">
      Back
      <div class="shape alarm-panel active-screen">
        <div class="side right"></div>
        <div class="side left"></div>
        <div class="side front"></div>
        <div class="side back">
          <div class="side alarm-panel-screen"></div>
        </div>
      </div>
      <div class="side back-corner">
        corner
      </div>
    </div>
  </div>
  <div class="maslul m5"></div>
  

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
    //Load data after complete open web page
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
                    
                for (i = 22; i < response.length; i++) {
                    if(response[i].status=="Offline"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" red";
                            document.getElementById('L31part'+i+'a').style.background = 'Grey';
                            document.getElementById('L31part'+i+'b').style.background = 'Grey';
                            document.getElementById('L31part'+i+'c').style.background = 'Grey';
                            document.getElementById('L31part'+i+'d').style.background = 'Grey';
                            document.getElementById('L31part'+i+'e').style.background = 'Grey';
                            document.getElementById('L31part'+i+'condition').textContent="Condition: Off";
                        }

                        else if(response[i].status=="Stop"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" yellow";
                            document.getElementById('L31part'+i+'a').style.background = '#F53C42';
                            document.getElementById('L31part'+i+'b').style.background = '#F53C42';
                            document.getElementById('L31part'+i+'c').style.background = '#F53C42';
                            document.getElementById('L31part'+i+'d').style.background = '#F53C42';
                            document.getElementById('L31part'+i+'e').style.background = '#F53C42';
                            document.getElementById('L31part'+i+'condition').textContent="Condition: Stop";
                        }

                        else if(response[i].status=="Run"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" green";
                            document.getElementById('L31part'+i+'a').style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                            document.getElementById('L31part'+i+'b').style.background = '#00D45F';
                            document.getElementById('L31part'+i+'c').style.background = '#00D45F';
                            document.getElementById('L31part'+i+'d').style.background = '#00D45F';
                            document.getElementById('L31part'+i+'e').style.background = '#00D45F';
                            document.getElementById('L31part'+i+'condition').textContent="Condition: Run";
                        }

                        else if(response[i].status=="Break"){
                            //document.getElementById('dep'+i).className = "circle position"+i+" blue";
                            document.getElementById('L31part'+i+'a').style.background = '#FFEE4A'; 
                            document.getElementById('L31part'+i+'b').style.background = '#FFEE4A';
                            document.getElementById('L31part'+i+'c').style.background = '#FFEE4A';
                            document.getElementById('L31part'+i+'d').style.background = '#FFEE4A';
                            document.getElementById('L31part'+i+'e').style.background = '#FFEE4A';
                            document.getElementById('L31part'+i+'condition').textContent="Condition: Break";
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