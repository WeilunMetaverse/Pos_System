<!doctype html>
<html lang="en">
  <head>

<style>
    *{
    margin: 0;
    padding: 0;
}

body{
    background: #ccc;
    font-family: sans-serif;
}

ul{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    margin: 0;
    padding: 0;
}

ul li{
    list-style: none;
    margin: 0 5px;
}

ul li a1 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 20px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a1 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 2px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a1{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 300px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(0deg) skewX(20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a1::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a1::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a1:hover{
    transform:rotate(0deg) skew(25deg) translate(20px,-15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover .fa{
    color: #fff;
}

ul li:hover span{
    color: #fff;
}


ul li:hover a1{
    background: #000;
}

ul li:hover a1:before{
    background: black;
}

ul li:hover a1:after{
    background: #000;
}

ul li a2 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 20px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a2 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 2px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a2{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 180px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(0deg) skewX(20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a2::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a2::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a2:hover{
    transform:rotate(0deg) skew(25deg) translate(20px,-15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a2{
    background: #000; 
}

ul li:hover a2:before{
    background: black;
}

ul li:hover a2:after{
    background: #000;
}

ul li a3 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 20px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a3 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 2px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a3{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 370px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(0deg) skewX(20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a3::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a3::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a3:hover{
    transform:rotate(0deg) skew(25deg) translate(20px,-15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a3{
    background: #000;
}

ul li:hover a3:before{
    background: black;
}

ul li:hover a3:after{
    background: #000;
}

ul li a31 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 20px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a31 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 2px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a31{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 236px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(0deg) skewX(20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a31::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a31::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a31:hover{
    transform:rotate(0deg) skew(25deg) translate(20px,-15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a31{
    background: #000;
}

ul li:hover a31:before{
    background: black;
}

ul li:hover a31:after{
    background: #000;
}

ul li a32 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 30px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a32 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 10px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a32{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 230px;
    height: 36px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(0deg) skewX(20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a32::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a32::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a32:hover{
    transform:rotate(0deg) skew(25deg) translate(20px,-15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a32{
    background: #000;
}

ul li:hover a32:before{
    background: black;
}

ul li:hover a32:after{
    background: #000;
}

ul li a4 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 30px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a4 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 10px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a4{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 320px;
    height: 35px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-18deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a4::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a4::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    /*background:#b1b1b1b1;*/
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a4:hover{
    transform:rotate(72deg) skew(-18deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a4{
    background: #000;
}

ul li:hover a4:before{
    background: black;
}

ul li:hover a4:after{
    background: #000;
}

ul li a41 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 30px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a41 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 10px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a41{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 320px;
    height: 35px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-18deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a41::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a41::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a41:hover{
    transform:rotate(72deg) skew(-18deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a41{
    background: #000;
}

ul li:hover a41:before{
    background: black;
}

ul li:hover a41:after{
    background: #000;
}

ul li a5 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 22px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a5 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 3px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a5{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 180px;
    height: 35px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a5::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a5::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a5:hover{
    transform:rotate(72deg) skew(-20deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a5{
    background: #000;
}

ul li:hover a5:before{
    background: black;
}

ul li:hover a5:after{
    background: #000;
}

ul li a6 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 22px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a6 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 3px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a6{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 180px;
    height: 30px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a6::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a6::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    /*background:#b1b1b1b1;*/
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a6:hover{
    transform:rotate(72deg) skew(-20deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a6{
    background: #000;
}

ul li:hover a6:before{
    background: black;
}

ul li:hover a6:after{
    background: #000;
}

ul li a61 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 22px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a61 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 3px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a61{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 180px;
    height: 30px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a61::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a61::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a61:hover{
    transform:rotate(72deg) skew(-20deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a61{
    background: #000;
}

ul li:hover a61:before{
    background: black;
}

ul li:hover a61:after{
    background: #000;
}

ul li a7 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 22px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a7 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 3px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a7{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 180px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a7::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a7::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    /*background:#b1b1b1b1;*/
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a7:hover{
    transform:rotate(72deg) skew(-20deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a7{
    background: #000;
}

ul li:hover a7:before{
    background: black;
}

ul li:hover a7:after{
    background: #000;
}

ul li a8 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 22px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a8 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 3px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a8{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 350px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(72deg) skewX(-20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a8::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background:#b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a8::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a8:hover{
    transform:rotate(72deg) skew(-20deg) translate(-20px,15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a8{
    background: #000;
}

ul li:hover a8:before{
    background: black;
}

ul li:hover a8:after{
    background: #000;
}

ul li a9 .fa{
    font-size: 20px; /*logo size*/
    color: #333;
    line-height: 20px; /*3d effect floating*/
    transition: 0.5s;
    padding-right: 14px; /*padding for logo right*/
 
}

ul li a9 span{
    padding:0;
    margin:0;
    position: absolute;
    top: 2px; /*padding for internal word */
    color: #333;
    letter-spacing: 4px;
    transition: 0.5s;

}

ul li a9{
    text-decoration: none;
    display: absolute;
    display: block;
    width: 180px;
    height: 25px;
    background: #fff;
    text-align: left;
    padding-left: 20px;
    transform: rotate(0deg) skewX(20deg) translate(0,0);
    transition: 0.5;
    box-shadow: -20px 20px 10px rgba(0,0,0,0.5);
}

ul li a9::before{
    content: '';
    position: absolute;
    top: 10px;
    left: -20px;
    height: 100%;
    width: 20px;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}

ul li a9::after{
    content: '';
    position: absolute;
    bottom: -20px;
    left: -10px;
    height: 20px;
    width: 100%;
    background: #b1b1b1b1;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
}

ul li a9:hover{
    transform:rotate(0deg) skew(20deg) translate(20px,-15px);
    box-shadow: -50px 50px 50px rgba(0,0,0,0.5);
}

ul li:hover a9{
    background: #000;
}

ul li:hover a9:before{
    background: black;
}

ul li:hover a9:after{
    background: #000;
}
</style>


<style>
        
        .figureframe{

        width: 1470px;
        height: 552px;
        /*border: 4px solid black;*/
        border: outset silver;
        border-radius: 25px;
        background: #eee;
        margin: auto;
        padding: 15px 10px;
        
        }

        .displaybackground {
            width: 1450px;
            height: 500px;
            border-radius:25px;
            background:url(media/backgroundproductionline1.jpg);
        }
    </style>
    
<style>
        @import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700);

        notificationpop,
        buttonpop {
        position: absolute;
        font: normal normal normal 14px/28px "Noto Sans", sans-serif;
        }

        notificationpop {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width: 28px;
        height: 28px;
        text-align: center;
        background: red;
        border-radius: 100%;
        color: white;
        transition: background .4s ease;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        
        }

        notificationpop:hover {
        cursor: pointer;
        background: red;
        }

        buttonpop {
        left: calc(50% - 32px);
        bottom: 50px;
        border: 0;
        border-radius: 4px;
        padding: 1px 14px;
        color: #52D96A;
        background: transparent;
        border: 2px solid transparent;
        transition: border .2s ease;
        
        }

        buttonpop:hover {
        border: 2px solid #52D96A;
        cursor: pointer;
        }

        buttonpop:focus {
        outline: none
        }

        .animatepop {
        animation: scaleup 0.7s infinite;
        }

        @-webkit-keyframes scaleup {
        0%,
        100% {
            width: 28px;
            height: 28px;
            line-height: 28px;
        }
        50% {
            width: 38px;
            height: 38px;
            line-height: 38px;
        }
        }

        @keyframes scaleup {
        0%,
        100% {
            width: 28px;
            height: 28px;
            line-height: 28px;
        }
        50% {
            width: 38px;
            height: 38px;
            line-height: 38px;
        }
        }

        .rotate1{
            transform: rotateZ(90deg);
        }
    </style>


<!-- Setting up CSS function ---------------------------------------------------------------------------------------------------------------------------------------------------------->
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style3.css"/>
    <link rel="stylesheet" href="internaltext/internaltext1.css"/>
    <link rel="stylesheet" href="testingcss.css">
    <link rel="stylesheet" href="3dproductionlayout.css">
    <link rel="stylesheet" href="popup.css"/>
    <link rel="stylesheet" href="frameview.css"/>
    <link rel="stylesheet" href="3dworddisplay1.css">
    <link rel="stylesheet" href="notification.css"/>

    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-this one got problem on the pop up function-->
<!-- Setting up CSS function ---------------------------------------------------------------------------------------------------------------------------------------------------------->


<style>


        /*rectangle*/ 
        body {
            background: black; /*change back ground color #01087d */
        }
        
        
        .box {
            position: absolute;
            left: 42%;
            top: 40%;
        }

        .box2 {
            position: absolute;
            left: 52%;
            top: 25%;
        }
        
        .side {
            box-sizing: border-box;
            height: 55px;
        }
        
        .top {
            width: 200px;
            transform: skew(55deg, -35deg);
            background: #51aef9;
            margin-left: 5px;
            height: 40px;
        }
        
        .left {
            width: 57px;
            transform: skew(0, 35deg);
            background: #8ffce7;
            margin-top: 50px;
            margin-left: -23px;
        }
        
        .right {
            position: absolute;
            bottom: 50px;
            left: 34px;
            width: 200px;
            transform: skew(0, -35deg);
            background: #3460f2;
        }
        /*rectangle*/ 
    </style>
    
</head>
<body><!--style="background:url(media/interioradjust1.JPG);"-->

<!----------Image Layout for the Actual Factory---------------------------------------------------------------------------------------------------------------------------------------->
  
  
  <img src="media/actuallayout1.png" style="transform: skewY(18deg);transform:skewX(18deg);border-radius: 10px;margin:200px; width:1600px; height:900px;opacity:0.9;"><!--3dlayoutnew2-->
  <div id="notification-area">
  </div>
<!----------Display Production L01-L09------------------------------------------------------------------------------------------------------------------------------------------------->
    <span class="text111" style="position:absolute; left:20px; top:60px;">Production 1</span>
    <span class="text111" style="position:absolute; left:180px; top:110px;">L01 - L09</span>
<!----------Display Production L10-L16------------------------------------------------------------------------------------------------------------------------------------------------->
    <span class="text111" style="position:absolute; left:220px; top:730px;">Production 2</span>
    <span class="text111" style="position:absolute; left:380px; top:780px;">L10 - L16</span>
<!----------Display Production L22-L33------------------------------------------------------------------------------------------------------------------------------------------------->
    <span class="text111" style="position:absolute; left:900px; top:300px;">Production 3 </span>
    <span class="text111" style="position:absolute; left:1060px; top:350px;">L22 - L33</span>
<!----------Table List of Production Line from L01-L33--------------------------------------------------------------------------------------------------------------------------------->
    <ul style="top:15.6%; left:24%;">
    
        <li>
            <a1 id="abc0" href="#" data-modal-target="#modal1">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L01 </span>
            <notificationpop id="displaypop0" style="left:-330px;display:block;">S</notificationpop>
            </a1>
        </li>
    </ul>  
    <ul style="top:18.6%; left: 24.46%;">  <!--top increase 11% left increase 2%-->
        <li>
            <a1 id="abc1" href="#" data-modal-target="#modal2">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L02 </span>
            <notificationpop id="displaypop1" style="left:-330px;display:block;">S</notificationpop>
            </a1>
        </li>
        
    </ul>
    <ul style="top:21.7%; left:26.9%;">   <!--top=+3.1; left=+0.6-->
        <li>
            <a3 id="abc2" href="#" data-modal-target="#modal3" style="background:red;">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L03 </span>
            <notificationpop id="displaypop2" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul>   
         
    <ul style="top:25.2%; left:27.4%;">  
        <li>
            <a3 id="abc3" href="#" data-modal-target="#modal4">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L04 </span>
            <notificationpop id="displaypop3" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul>  
    <ul style="top:28.4%; left:27.9%;">  
        <li>
            <a3 id="abc4" href="#" data-modal-target="#modal5">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L05 </span>
            <notificationpop id="displaypop4" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul>  
    <ul style="top:31.70%; left:28.5%;">  
        <li>
            <a3 id="abc5" href="#" data-modal-target="#modal6">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L06 </span>
            <notificationpop id="displaypop5" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul>  
    <ul style="top:35%; left:29%;" >  
        <li>
            <a3 id="abc6" href="#" data-modal-target="#modal8">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L08 </span>
            <notificationpop id="displaypop6" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul>  
    <ul style="top:38.15%; left:29.5%;">  
        <li>
            <a3 id="abc7" href="#" data-modal-target="#modal9">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L09 </span>
            <notificationpop id="displaypop7" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul>   
    
    <ul style="top:41.5%; left:30%;">   <!--production line 2 (10,12,13,14,15,16)-->
        <li>
            <a3 id="abc8" href="#" data-modal-target="#modal10">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L10 </span>
            <notificationpop id="displaypop8" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul> 

    <ul style="top:45%; left:27.2%;">   <!--production line 2 (10,12,13,14,15,16)-->
        <li>
            <a31 id="abc9" href="#" data-modal-target="#modal12">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L12 </span>
            <notificationpop id="displaypop9" style="left:-270px;display:block;">S</notificationpop>
            </a31>
        </li>
    </ul> 

    <ul style="top:47.95%; left:27.7%;">   <!--production line 2 (10,12,13,14,15,16)-->
        <li>
            <a31 id="abc10" href="#" data-modal-target="#modal13">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L13 </span>
            <notificationpop id="displaypop10" style="left:-270px;display:block;">S</notificationpop>
            </a31>
        </li>
    </ul> 

    <ul style="top:51.89%; left:31.8%;">   <!--production line 2 (10,12,13,14,15,16)-->
        <li>
            <a3 id="abc11" href="#" data-modal-target="#modal14">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L14 </span>
            <notificationpop id="displaypop11" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul> 

    <ul style="top:55.68%; left:32.4%;">   <!--production line 2 (10,12,13,14,15,16)-->
        <li>
            <a3 id="abc12" href="#" data-modal-target="#modal15">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L15 </span>
            <notificationpop id="displaypop12" style="left:-400px;display:block;">S</notificationpop>
            </a3>
        </li>
    </ul> 

    <ul style="top:59.5%; left:29.45%;">   <!--production line 2 (10,12,13,14,15,16)-->
        <li>
            <a32 id="abc13" href="#" data-modal-target="#modal16">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L16 </span>
            <notificationpop id="displaypop13" style="left:-260px;display:block;">S</notificationpop>
            </a32>
        </li>
    </ul> 
    
    <ul style="top:54.1%; left:57.6%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a41 id="abc14" href="#" data-modal-target="#modal22">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L22 </span>
            <notificationpop id="displaypop14" class="rotate1" style="top:10px; left:-355px;display:block;">S</notificationpop>
            </a41>
        </li>
    </ul> 

    <ul style="top:54.2%; left:60.2%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a4 id="abc15" href="#" data-modal-target="#modal23">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L23 </span>
            <notificationpop id="displaypop15" class="rotate1" style="top:12px; left:-355px;display:block;">S</notificationpop>
            </a4>
        </li>
    </ul> 

    <ul style="top:54.3%; left:62.8%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a4 id="abc16" href="#" data-modal-target="#modal24">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L24 </span>
            <notificationpop id="displaypop16" class="rotate1" style="top:12px; left:-355px;display:block;">S</notificationpop>
            </a4>
        </li>
    </ul>

    <ul style="top:53.89%; left:67.3%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a61 id="abc17" href="#" data-modal-target="#modal25">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L25 </span>
            <notificationpop id="displaypop17" class="rotate1" style="top:22px; left:-215px;display:block;">S</notificationpop>
            </a61>
        </li>
    </ul> 

    <ul style="top:53.89%; left:69.4%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a6 id="abc18" href="#" data-modal-target="#modal26">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L26 </span>
            <notificationpop id="displaypop18" class="rotate1" style="top:22px; left:-215px;display:block;">S</notificationpop>
            </a6>
        </li>
    </ul> 

    <ul style="top:53.89%; left:71.5%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a6 id="abc19" href="#" data-modal-target="#modal27">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L27 </span>
            <notificationpop id="displaypop19" class="rotate1" style="top:22px; left:-215px;display:block;">S</notificationpop>
            </a6>
        </li>
    </ul> 

    <ul style="top:53.89%; left:73.8%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a7 id="abc20" href="#" data-modal-target="#modal29">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L29 </span>
            <notificationpop id="displaypop20" class="rotate1" style="top:25px; left:-215px;display:block;">S</notificationpop>
            </a7>
        </li>
    </ul>

    <ul style="top:53.89%; left:75.5%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a7 id="abc21" href="#" data-modal-target="#modal30">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L30 </span>
            <notificationpop id="displaypop21" class="rotate1" style="top:22px; left:-215px;display:block;">S</notificationpop>
            </a7>
        </li>
    </ul> 

    <ul style="top:53.89%; left:77.2%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a7 id="abc22" href="#" data-modal-target="#modal31">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L31 </span>
            <notificationpop id="displaypop22" class="rotate1" style="top:22px; left:-215px;display:block;">S</notificationpop>
            </a7>
        </li>
    </ul>
    
    <ul style="top:62.1%; left:80.23%;" >   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a8 id="abc23" href="#" data-modal-target="# " style="display:none;">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L32 </span>
            <notificationpop id="displaypop23" class="rotate1" style="top:22px; left:-385px;display:block;">S</notificationpop>
            </a8>
        </li>
    </ul> 

    <ul style="top:71%; left:74.2%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a9 id="abc24" href="#" data-modal-target="#modal32EC">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L32EC </span>
            <notificationpop id="displaypop24" style="left:-215px;display:block;">S</notificationpop>
            </a9>
        </li>
    </ul> 

    <ul style="top:75%; left:75%;">   <!--production line 3 (22,23,24,25,26,27,29,30,31,32,32ec,33)-->
        <li>
            <a9 id="abc25" href="#" data-modal-target="#modal33">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <span> - L33 </span>
            <notificationpop id="displaypop25" style="left:-215px;display:block;">S</notificationpop>
            </a9>
        </li>
    </ul> 
<!----------Modalling Setting for Button----------------------------------------------------------------------------------------------------------------------------------------------->

    <!----------------------part for L01 content---------------------------->
<div class="modal" id="modal1">
    <div class="modal-header">
      <div class="title">Production Line L01</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        
        <div id="figureframeset0" class="figureframe">
            <div class="displaybackground"> <!--background image for production line mac-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat0.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>
        </div><!--background image for production line mac-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    
    <h1></h1>
    <button id="internalline0a" class="accordion" >Production L01 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue0"></p>
        <p id="outputvalue0t"></p> 
        <p id="outputvalue0con"></p>     
    </div>

    <button class="accordion">Production L01 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L01 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L01 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L01 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L01 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div> 
    
  </div>
  <div id="overlay"></div>
    <!----------------------part for L01 content---------------------------->

    <!----------------------part for L02 content---------------------------->
<div class="modal" id="modal2">
    <div class="modal-header">
      <div class="title">Production Line L02</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
    <div id="figureframeset1" class="figureframe">
    <!--<div class="displaybackground">--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat1.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
        

    <!--</div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline1a" class="accordion">Production L02 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue1"></p>
        <p id="outputvalue1t"></p> 
        <p id="outputvalue1con"></p>
    </div>

    <button class="accordion">Production L02 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L02 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L02 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L02 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L02 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>   
    
  </div>
  <div id="overlay"></div>
    <!----------------------part for L02 content---------------------------->
    <!----------------------part for L03 content---------------------------->
<div class="modal" id="modal3">
    <div class="modal-header">
      <div class="title">Production Line L03</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
    <div id="figureframeset2" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat2.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline2a" class="accordion">Production L03 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue2"></p>
        <p id="outputvalue2t"></p> 
        <p id="outputvalue2con"></p>
    </div>

    <button class="accordion">Production L03 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L03 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L03 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L03 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L03 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>
    
    
  </div>
  <div id="overlay"></div>
    <!----------------------part for L03 content---------------------------->
    <!----------------------part for L04 content---------------------------->
<div class="modal" id="modal4">
    <div class="modal-header">
      <div class="title">Production Line L04</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
    <div id="figureframeset3" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat3.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline3a" class="accordion">Production L04 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue3"></p>
        <p id="outputvalue3t"></p> 
        <p id="outputvalue3con"></p>
    </div>

    <button class="accordion">Production L04 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L04 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L04 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L04 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L04 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>
    
  </div>
  <div id="overlay"></div>
    <!----------------------part for L04 content---------------------------->
    <!----------------------part for L05 content---------------------------->
<div class="modal" id="modal5">
    <div class="modal-header">
      <div class="title">Production Line L05</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
    <div id="figureframeset4" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat4.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline4a" class="accordion">Production L05 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue4"></p>
        <p id="outputvalue4t"></p> 
        <p id="outputvalue4con"></p>
    </div>

    <button class="accordion">Production L05 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L05 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L05 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L05 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L05 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>
    
  </div>
  <div id="overlay"></div>
    <!----------------------part for L05 content---------------------------->
    <!----------------------part for L06 content---------------------------->
<div class="modal" id="modal6">
    <div class="modal-header">
      <div class="title">Production Line L06</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
    <div id="figureframeset5" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat5.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline5a" class="accordion">Production L06 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue5"></p>
        <p id="outputvalue5t"></p> 
        <p id="outputvalue5con"></p>
    </div>

    <button class="accordion">Production L06 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L06 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L06 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L06 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L06 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>
    
  </div>
  <div id="overlay"></div>
    <!----------------------part for L06 content---------------------------->
    <!----------------------part for L08 content---------------------------->
<div class="modal" id="modal8">
    <div class="modal-header">
      <div class="title">Production Line L08</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
    <div id="figureframeset6" class="figureframe">
    <!--<div id="container">
        <iframe id="embed" src="testing3dmachineflat.php" scrolling="no" alt="img"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat6.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline6a" class="accordion">Production L08 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue6"></p>
        <p id="outputvalue6t"></p> 
        <p id="outputvalue6con"></p>
    </div>

    <button class="accordion">Production L08 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L08 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L08 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L08 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L08 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
        
    </div>
    <div id="overlay"></div>
    <!----------------------part for L08 content---------------------------->
    <!----------------------part for L09 content---------------------------->
<div class="modal" id="modal9">
    <div class="modal-header">
      <div class="title">Production Line L09</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset7" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat7.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>

    </div>
        <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline7a" class="accordion">Production L09 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue7"></p>
        <p id="outputvalue7t"></p> 
        <p id="outputvalue7con"></p>
    </div>

    <button class="accordion">Production L09 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L09 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L09 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L09 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L09 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>
  </div>
  <div id="overlay"></div>
    <!----------------------part for L09 content---------------------------->
    <!----------------------part for L10 content---------------------------->
<div class="modal" id="modal10">
    <div class="modal-header">
      <div class="title">Production Line L10</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset8" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat8.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline8a" class="accordion">Production L10 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue8"></p>
        <p id="outputvalue8t"></p> 
        <p id="outputvalue8con"></p>
    </div>

    <button class="accordion">Production L10 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L10 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L10 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L10 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L10 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
  </div>
    </div>
    </div>
  <div id="overlay"></div>
    <!----------------------part for L10 content---------------------------->
    <!----------------------part for L12 content---------------------------->
<div class="modal" id="modal12">
    <div class="modal-header">
      <div class="title">Production Line L12</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset9" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat9.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline9a" class="accordion">Production L12 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue9"></p>
        <p id="outputvalue9t"></p> 
        <p id="outputvalue9con"></p>
    </div>

    <button class="accordion">Production L12 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L12 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L12 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L12 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L12 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L12 content---------------------------->
    <!----------------------part for L13 content---------------------------->
<div class="modal" id="modal13">
    <div class="modal-header">
      <div class="title">Production Line L13</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset10" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat10.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline10a" class="accordion">Production L13 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue10"></p>
        <p id="outputvalue10t"></p> 
        <p id="outputvalue10con"></p>
    </div>

    <button class="accordion">Production L13 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L13 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L13 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L13 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L13 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L13 content---------------------------->
    <!----------------------part for L14 content---------------------------->
<div class="modal" id="modal14">
    <div class="modal-header">
      <div class="title">Production Line L14</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset11" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat11.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>        
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline11a" class="accordion">Production L14 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue11"></p>
        <p id="outputvalue11t"></p> 
        <p id="outputvalue11con"></p>
    </div>

    <button class="accordion">Production L14 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L14 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L14 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L14 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L14 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L14 content---------------------------->
    <!----------------------part for L15 content---------------------------->
<div class="modal" id="modal15">
    <div class="modal-header">
      <div class="title">Production Line L15</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset12" class="figureframe">
    <!----------------------part for 3d Machine content----------------------------------------------------------------------------------------------------------------------------------->
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat12.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content----------------------------------------------------------------------------------------------------------------------------------->            
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline12a" class="accordion">Production L15 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue12"></p>
        <p id="outputvalue12t"></p> 
        <p id="outputvalue12con"></p>
    </div>

    <button class="accordion">Production L15 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L15 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L15 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L15 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L15 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L15 content---------------------------->
    <!----------------------part for L16 content---------------------------->
<div class="modal" id="modal16">
    <div class="modal-header">
      <div class="title">Production Line L16</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset13" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat13.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button id="internalline13a" class="accordion">Production L16 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue13"></p>
        <p id="outputvalue13t"></p> 
        <p id="outputvalue13con"></p>
    </div>

    <button class="accordion">Production L16 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L16 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L16 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L16 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L16 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L16 content---------------------------->
    <!----------------------part for L22 content---------------------------->
<div class="modal" id="modal22">
    <div class="modal-header">
      <div class="title">Production Line L22</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset14" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat14.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline14a" class="accordion">Production L22 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue14"></p>
        <p id="outputvalue14t"></p> 
        <p id="outputvalue14con"></p>
    </div>

    <button class="accordion">Production L22 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L22 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L22 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L22 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L22 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L22 content---------------------------->
    <!----------------------part for L23 content---------------------------->
<div class="modal" id="modal23">
    <div class="modal-header">
      <div class="title">Production Line L23</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset15" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat15.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline15a" class="accordion">Production L23 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue15"></p>
        <p id="outputvalue15t"></p> 
        <p id="outputvalue15con"></p>
    </div>

    <button class="accordion">Production L23 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L23 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L23 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L23 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L23 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L23 content---------------------------->
    <!----------------------part for L24 content---------------------------->
<div class="modal" id="modal24">
    <div class="modal-header">
      <div class="title">Production Line L24</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset16" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat16.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline16a" class="accordion">Production L24 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue16"></p>
        <p id="outputvalue16t"></p> 
        <p id="outputvalue16con"></p>
    </div>

    <button class="accordion">Production L24 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L24 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L24 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L24 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L24 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L24 content---------------------------->
    <!----------------------part for L25 content---------------------------->
<div class="modal" id="modal25">
    <div class="modal-header">
      <div class="title">Production Line L25</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset17" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat17.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline17a" class="accordion">Production L25 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue17"></p>
        <p id="outputvalue17t"></p> 
        <p id="outputvalue17con"></p>
    </div>

    <button class="accordion">Production L25 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L25 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L25 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L25 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L25 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L25 content---------------------------->
    <!----------------------part for L26 content---------------------------->
<div class="modal" id="modal26">
    <div class="modal-header">
      <div class="title">Production Line L26</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset18" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat18.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline18a" class="accordion">Production L26 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue18"></p>
        <p id="outputvalue18t"></p> 
        <p id="outputvalue18con"></p>
    </div>

    <button class="accordion">Production L26 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L26 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L26 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L26 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L26 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L26 content---------------------------->
    <!----------------------part for L27 content---------------------------->
<div class="modal" id="modal27">
    <div class="modal-header">
      <div class="title">Production Line L27</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset19" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat19.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline19a" class="accordion">Production L27 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue19"></p>
        <p id="outputvalue19t"></p> 
        <p id="outputvalue19con"></p>
    </div>

    <button class="accordion">Production L27 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L27 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L27 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L27 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L27 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L27 content---------------------------->
    <!----------------------part for L29 content---------------------------->
<div class="modal" id="modal29">
    <div class="modal-header">
      <div class="title">Production Line L29</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset20" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat20.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline20a" class="accordion">Production L29 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue20"></p>
        <p id="outputvalue20t"></p> 
        <p id="outputvalue20con"></p>
    </div>

    <button class="accordion">Production L29 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L29 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L29 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L29 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L29 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L29 content---------------------------->
    <!----------------------part for L30 content---------------------------->
<div class="modal" id="modal30">
    <div class="modal-header">
      <div class="title">Production Line L30</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset21" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat21.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline21a" class="accordion">Production L30 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue21"></p>
        <p id="outputvalue21t"></p> 
        <p id="outputvalue21con"></p>
    </div>

    <button class="accordion">Production L30 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L30 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L30 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L30 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L30 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L30 content---------------------------->
    <!----------------------part for L31 content---------------------------->
<div class="modal" id="modal31">
    <div class="modal-header">
      <div class="title">Production Line L31</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset22" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat22.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline22a" class="accordion">Production L31 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue22"></p>
        <p id="outputvalue22t"></p> 
        <p id="outputvalue22con"></p>
    </div>

    <button class="accordion">Production L31 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L31 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L31 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L31 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L31 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L31 content---------------------------->
    <!----------------------part for L32 content---------------------------->
<div class="modal" id="modal32">
    <div class="modal-header">
      <div class="title">Production Line L32</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset23" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat23.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline23a" class="accordion">Production L32 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue23"></p>
        <p id="outputvalue23t"></p> 
        <p id="outputvalue23con"></p>
    </div>

    <button class="accordion">Production L32 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L32 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L32 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L32 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L32 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L32 content---------------------------->
    <!----------------------part for L32EC content-------------------------->
<div class="modal" id="modal32EC">
    <div class="modal-header">
      <div class="title">Production Line L32EC</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset24" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat24.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>-->
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline24a" class="accordion">Production L32EC Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue24"></p>
        <p id="outputvalue24t"></p> 
        <p id="outputvalue24con"></p>
    </div>

    <button class="accordion">Production L32EC Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L32EC Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L32EC Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L32EC Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L32EC Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L32EC content-------------------------->
    <!----------------------part for L33 content---------------------------->
<div class="modal" id="modal33">
    <div class="modal-header">
      <div class="title">Production Line L33</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        Current Production Status
        <br><br>
        <div id="figureframeset25" class="figureframe">
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
    <!--<div id="container">
            <iframe id="embed" src="http://localhost:8080/ajax_with_php/internshiptask/testing3dmachineflat/testing3dmachineflat25.php" alt="img" style="top:500px;left:100px;"></iframe>
        </div>--> 
    <!----------------------part for 3d Machine content------------------------------------------------------------------------------------------------------------------------------------>
        </div>
    <div class="containerq" style="float: left; margin-left: 50px;">
    <h1></h1>
    <button  id="internalline25a" class="accordion">Production L33 Station 1</button>
    <div class="accordion-content">
        <p id="outputvalue25"></p>
        <p id="outputvalue25t"></p> 
        <p id="outputvalue25con"></p>
    </div>

    <button class="accordion">Production L33 Station 2</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L33 Station 3</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>

    <div class="containerq" style="float: left; margin-top: 40px;">
    <h1></h1>
    <button class="accordion">Production L33 Station 4</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L33 Station 5</button>
    <div class="accordion-content">
        <p>
        Output : 70.....
        </p>
    </div>

    <button class="accordion">Production L33 Station 6</button>
    <div class="accordion-content">
        <p>
        Output : 690.....
        </p>
    </div>
    </div>
    </div>
    </div>
    <div id="overlay"></div>
    <!----------------------part for L33 content---------------------------->


<!----------JSON Data Retrived--------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Bootstrap core JavaScript -->
    <script defer src="popup.js"></script>
    <script src="notification.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="library/js/scripts.js"></script>
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    
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

                    //console.log(response);

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
                        
                    for (i = 0; i < response.length; i++) {
                            if(response[i].status=="Stop"){
                                document.getElementById('abc'+i).style.background = '#F53C42';
                                document.getElementById('figureframeset'+i).style.borderColor = '#F53C42';
                                document.getElementById('internalline'+i+'a').style.background = '#F53C42';
                                document.getElementById('internalline'+i+'a').style.color = 'white';
                                document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                document.getElementById('outputvalue'+i+'con').textContent=" Condition: Stop";
                                //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                                document.getElementById('displaypop'+i).style.display = "block";
                                if(response[i].status=="Stop"){
                                    temperary = response[i].line;
                                    notifyError(temperary);
                                }
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                                /*document.getElementById('L08part'+i+'a').style.background = '#F53C42';
                                document.getElementById('L08part'+i+'b').style.background = '#F53C42';
                                document.getElementById('L08part'+i+'c').style.background = '#F53C42';
                                document.getElementById('L08part'+i+'d').style.background = '#F53C42';
                                document.getElementById('L08part'+i+'e').style.background = '#F53C42';
                                document.getElementById('L08part'+i+'condition').textContent="Condition: Stop";*/
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            }

                            else if(response[i].status=="Offline"){
                                document.getElementById('abc'+i).style.background = 'Grey';
                                document.getElementById('figureframeset'+i).style.borderColor = 'Grey';
                                document.getElementById('internalline'+i+'a').style.background = 'Grey';
                                document.getElementById('internalline'+i+'a').style.color = 'white';
                                document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                document.getElementById('outputvalue'+i+'con').textContent=" Condition: Offline";
                                //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                                //document.getElementById('displaypop'+i).style.display = "none";
                                document.getElementById('displaypop'+i).style.display = "none";

    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                                /*document.getElementById('L01part'+i+'a').style.background = 'Grey';
                                document.getElementById('L01part'+i+'b').style.background = 'Grey';
                                document.getElementById('L01part'+i+'c').style.background = 'Grey';
                                document.getElementById('L01part'+i+'d').style.background = 'Grey';
                                document.getElementById('L01part'+i+'e').style.background = 'Grey';
                                document.getElementById('L01part'+i+'condition').textContent="Condition: Off";*/
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            }
                                
                            else if(response[i].status=="Run"){
                                document.getElementById('abc'+i).style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                                document.getElementById('figureframeset'+i).style.borderColor = '#00D45F';
                                document.getElementById('internalline'+i+'a').style.background = '#00D45F';
                                document.getElementById('internalline'+i+'a').style.color = 'white';
                                document.getElementById('outputvalue'+i).innerHTML= "Actual Output : "+response[i].actual;
                                document.getElementById('outputvalue'+i+'t').innerHTML= "Target Output : "+response[i].target;
                                document.getElementById('outputvalue'+i+'con').textContent=" Condition: Run";
                                //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                                //document.getElementById('displaypop'+i).style.display = "block";
                                document.getElementById('displaypop'+i).style.display = "none";
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                                /*document.getElementById('L01part'+i+'a').style.background = '#00D45F'; //#8AFF4C light green //#00D45F normal green //#00B14F dark green
                                document.getElementById('L01part'+i+'b').style.background = '#00D45F';
                                document.getElementById('L01part'+i+'c').style.background = '#00D45F';
                                document.getElementById('L01part'+i+'d').style.background = '#00D45F';
                                document.getElementById('L01part'+i+'e').style.background = '#00D45F';
                                document.getElementById('L01part'+i+'condition').textContent="Condition: Run";*/
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            }

                            else if(response[i].status=="Break"){
                                document.getElementById('abc'+i).style.background = '#FFEE4A';
                                document.getElementById('figureframeset'+i).style.borderColor = '#FFEE4A';
                                document.getElementById('internalline'+i+'a').style.background = '#FFEE4A';
                                document.getElementById('internalline'+i+'a').style.color = 'white';
                                document.getElementById('outputvalue'+i).innerHTML= "Output : "+response[i].actual;
                                document.getElementById('outputvalue'+i+'t').innerHTML= "Output : "+response[i].target;
                                document.getElementById('outputvalue'+i+'con').textContent=" Condition: Break";
                                //document.getElementById('outputdisplay'+i).innerHTML= response[i].actual;
                                //document.getElementById('displaypop'+i).style.display = "block";
                                document.getElementById('displaypop'+i).style.display = "none";
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                                /*document.getElementById('L01part'+i+'a').style.background = '#FFEE4A'; 
                                document.getElementById('L01part'+i+'b').style.background = '#FFEE4A';
                                document.getElementById('L01part'+i+'c').style.background = '#FFEE4A';
                                document.getElementById('L01part'+i+'d').style.background = '#FFEE4A';
                                document.getElementById('L01part'+i+'e').style.background = '#FFEE4A';
                                document.getElementById('L01part'+i+'condition').textContent="Condition: Break";*/
    //-------------------------------------------------code for 3d production layout-----------------------------------------------------------------------------------------------------//                        
                            }   
                    } 
                },
            
                complete: function () {
                    // Schedule the next request when the current one's complete
                    // setTimeout(getDataCounter(), 10000);  
                }
            });
        }


    </script>
<!----------JSON Data Retrived--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!----------Notification Pop----------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script>
        setInterval(function () {
            $("notificationpop").addClass("animatepop");
            $("notificationpop")[0].addEventListener(
                "animationend",
            function () {
            $("notificationpop").removeClass("animatepop");
            },
            false
            );
            }, 1000);

    </script>  
<!----------Notification Pop----------------------------------------------------------------------------------------------------------------------------------------------------------->
<!----------Notification View---------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script>
        function notifyError(temperary){
        temperarycall = "Production Line "+ temperary + " |[ STOP ]| ";
        notify("error",temperarycall);
    }
    </script>
<!----------Notification View---------------------------------------------------------------------------------------------------------------------------------------------------------->

<!----------3d production layout function---------------------------------------------------------------------------------------------------------------------------------------------->

    <script>
        document.getElementById("checkbox").checked = true;
    </script>

<!----------3d production layout function---------------------------------------------------------------------------------------------------------------------------------------------->

</body>
</html>
