<html>

<head>
    <style>
        .text111 {
            position: absolute;


            text-transform: uppercase;
            font-family: verdana;
            font-size: 250%;
            font-weight: bold;
            color: #f5f5f5;
            /*text-shadow: 
    1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
    1px 18px 6px rgba(16,16,16,0.4),
    1px 22px 10px rgba(16,16,16,0.2),
    1px 25px 35px rgba(16,16,16,0.2),
    1px 30px 60px rgba(16,16,16,0.4); */
        }
    </style>
    <style>
        *,
        *::after,
        *::before {
            box-sizing: border-box;
        }

        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 200ms ease-in-out;
            border: 1px solid black;
            border-radius: 10px;
            z-index: 10;
            background-color: white;
            width: 100%;
            height: 60%;


        }

        .modal.active {
            transform: translate(-50%, -50%) scale(1);
        }

        .modal-header {
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid black;
        }

        .modal-header .title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .modal-header .close-button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-size: 1.25rem;
            font-weight: bold;
        }

        .modal-body {
            padding: 10px 15px;
        }

        #overlay {
            position: fixed;
            opacity: 0;
            transition: 200ms ease-in-out;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .5);
            pointer-events: none;
        }

        #overlay.active {
            opacity: 1;
            pointer-events: none;
        }
    </style>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <style>
        ul {
            position: absolute;
            display: flex;

        }

        ul li {
            list-style: none;


        }

        ul li a1 .fa {
            font-size: 80%;
            /*logo size*/
            color: #333;
            /*line-height: 0px; 3d effect floating*/
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/


        }

        ul li a1 span {

            /*position: absolute;*/
            top: 4%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a1 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 280px;
            /*300px*/
            height: 21px;
            max-height: 100%;
            max-width: 100%;
            background: #fff;

            padding-left: 20px;
            transform: rotate(0deg) skewX(20deg) translate(0, 0);
            transition: 0.5;
            /*box-shadow: -20px 20px 10px rgba(0,0,0,0.5);*/
        }

        ul li a1::before {
            content: '';
            position: absolute;
            top: 47%;
            left: -7%;
            height: 100%;
            width: 7%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a1::after {
            content: '';
            position: absolute;
            bottom: -95%;
            left: -3.5%;
            height: 93%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a1:hover {
            transform: rotate(0deg) skew(25deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover .fa {
            color: #fff;
        }

        ul li:hover span {
            color: #fff;
        }


        ul li:hover a1 {
            background: #000;
        }

        ul li:hover a1:before {
            background: black;
        }

        ul li:hover a1:after {
            background: #000;
        }

        ul li a2 .fa {
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a2 span {
            top: 2px;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a2 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 280px;
            /*300px*/
            height: 21px;
            max-height: 100%;
            max-width: 100%;
            background: #fff;

            padding-left: 20px;
            transform: rotate(0deg) skewX(20deg) translate(0, 0);
            transition: 0.5;
            /*box-shadow: -20px 20px 10px rgba(0,0,0,0.5);*/
        }

        ul li a2::before {
            content: '';
            position: absolute;
            top: 47%;
            left: -7%;
            height: 100%;
            width: 7%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a2::after {
            content: '';
            position: absolute;
            bottom: -95%;
            left: -3.5%;
            height: 93%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a2:hover {
            transform: rotate(0deg) skew(25deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a2 {
            background: #000;
        }

        ul li:hover a2:before {
            background: black;
        }

        ul li:hover a2:after {
            background: #000;
        }

        ul li a3 .fa {
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a3 span {
            top: 4%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a3 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 370px;
            height: 25px;
            max-height: 100%;
            max-width: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(0deg) skewX(20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a3::before {
            content: '';
            position: absolute;
            top: 39%;
            left: -5.5%;
            height: 100%;
            width: 5.5%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a3::after {
            content: '';
            position: absolute;
            bottom: -79%;
            left: -2.7%;
            height: 80%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a3:hover {
            transform: rotate(0deg) skew(25deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a3 {
            background: #000;
        }

        ul li:hover a3:before {
            background: black;
        }

        ul li:hover a3:after {
            background: #000;
        }

        ul li a31 .fa {
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a31 span {

            top: 4%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a31 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 236px;
            height: 25px;
            max-height: 100%;
            max-width: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(0deg) skewX(20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a31::before {
            content: '';
            position: absolute;
            top: 40%;
            left: -8.5%;
            height: 100%;
            width: 8.5%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a31::after {
            content: '';
            position: absolute;
            bottom: -79%;
            left: -4.2%;
            height: 80%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a31:hover {
            transform: rotate(0deg) skew(25deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a31 {
            background: #000;
        }

        ul li:hover a31:before {
            background: black;
        }

        ul li:hover a31:after {
            background: #000;
        }

        ul li a32 .fa {
            font-size: 80%;
            /*logo size*/
            color: #333;

            transition: 0.5s;
            padding-right: 10%;
            /*padding for logo right*/

        }

        ul li a32 span {

            top: 4%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a32 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 230px;
            height: 36px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;

            padding-left: 20px;
            transform: rotate(0deg) skewX(20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a32::before {
            content: '';
            position: absolute;
            top: 29.1%;
            left: -8.5%;
            height: 100%;
            width: 8.5%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a32::after {
            content: '';
            position: absolute;
            bottom: -55%;
            left: -4.5%;
            height: 54%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a32:hover {
            transform: rotate(0deg) skew(25deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a32 {
            background: #000;
        }

        ul li:hover a32:before {
            background: black;
        }

        ul li:hover a32:after {
            background: #000;
        }


        ul li a4 .fa {
            padding-top: 3%;
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a4 span {

            top: 4%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a4 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 280px;
            height: 35px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-18deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a4::before {
            content: '';
            position: absolute;
            top: 29%;
            left: -5.9%;
            height: 100%;
            width: 5.9%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a4::after {
            content: '';
            position: absolute;
            bottom: -58%;
            left: -2.7%;
            height: 60%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a4:hover {
            transform: rotate(72deg) skew(-18deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a4 {
            background: #000;
        }

        ul li:hover a4:before {
            background: black;
        }

        ul li:hover a4:after {
            background: #000;
        }

        ul li a41 .fa {
            padding-top: 3%;
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a41 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 20%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a41 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 280px;
            height: 35px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-18deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a41::before {
            content: '';
            position: absolute;
            top: 29%;
            left: -5.9%;
            height: 100%;
            width: 5.9%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a41::after {
            content: '';
            position: absolute;
            bottom: -58%;
            left: -2.7%;
            height: 60%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a41:hover {
            transform: rotate(72deg) skew(-18deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a41 {
            background: #000;
        }

        ul li:hover a41:before {
            background: black;
        }

        ul li:hover a41:after {
            background: #000;
        }

        ul li a5 .fa {
            font-size: 20px;
            /*logo size*/
            color: #333;
            line-height: 22px;
            /*3d effect floating*/
            transition: 0.5s;
            padding-right: 14px;
            /*padding for logo right*/

        }

        ul li a5 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 3px;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a5 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 180px;
            height: 35px;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a5::before {
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

        ul li a5::after {
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

        ul li a5:hover {
            transform: rotate(72deg) skew(-20deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a5 {
            background: #000;
        }

        ul li:hover a5:before {
            background: black;
        }

        ul li:hover a5:after {
            background: #000;
        }

        ul li a6 .fa {
            padding-top: 5%;
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a6 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 20%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a6 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 180px;
            height: 30px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a6::before {
            content: '';
            position: absolute;
            top: 33%;
            left: -11%;
            height: 100%;
            width: 11%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a6::after {
            content: '';
            position: absolute;
            bottom: -65%;
            left: -5.3%;
            height: 70%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
            z-index: -100;
            /**------------------------------------------------------------------------------------------------------------------------------------------------ */
        }

        ul li a6:hover {
            transform: rotate(72deg) skew(-20deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a6 {
            background: #000;
        }

        ul li:hover a6:before {
            background: black;
        }

        ul li:hover a6:after {
            background: #000;
        }

        ul li a61 .fa {
            padding-top: 5%;
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a61 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 20%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a61 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 180px;
            height: 30px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a61::before {
            content: '';
            position: absolute;
            top: 33%;
            left: -11%;
            height: 100%;
            width: 11%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a61::after {
            content: '';
            position: absolute;
            bottom: -65%;
            left: -5.3%;
            height: 70%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a61:hover {
            transform: rotate(72deg) skew(-20deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a61 {
            background: #000;
        }

        ul li:hover a61:before {
            background: black;
        }

        ul li:hover a61:after {
            background: #000;
        }

        ul li a7 .fa {
            padding-top: 1%;
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a7 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 10%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;


        }

        ul li a7 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 180px;
            height: 25px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a7::before {
            content: '';
            position: absolute;
            top: 33%;
            left: -11%;
            height: 100%;
            width: 11%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a7::after {
            content: '';
            position: absolute;
            bottom: -65%;
            left: -5.3%;
            height: 70%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a7:hover {
            transform: rotate(72deg) skew(-20deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a7 {
            background: #000;
        }

        ul li:hover a7:before {
            background: black;
        }

        ul li:hover a7:after {
            background: #000;
        }

        ul li a8 .fa {
            font-size: 20px;
            /*logo size*/
            color: #333;
            line-height: 22px;
            /*3d effect floating*/
            transition: 0.5s;
            padding-right: 14px;
            /*padding for logo right*/

        }

        ul li a8 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 3px;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a8 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 350px;
            height: 25px;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(72deg) skewX(-20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a8::before {
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

        ul li a8::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -10px;
            height: 20px;
            width: 100%;

            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a8:hover {
            transform: rotate(72deg) skew(-20deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a8 {
            background: #000;
        }

        ul li:hover a8:before {
            background: black;
        }

        ul li:hover a8:after {
            background: #000;
        }

        ul li a9 .fa {
            font-size: 80%;
            /*logo size*/
            color: #333;
            transition: 0.5s;
            padding-right: 5%;
            /*padding for logo right*/

        }

        ul li a9 span {
            padding: 0;
            margin: 0;
            position: absolute;
            top: 4%;
            /*padding for internal word */
            color: #333;
            letter-spacing: 4px;
            transition: 0.5s;

        }

        ul li a9 {
            text-decoration: none;
            display: absolute;
            display: block;
            width: 180px;
            height: 25px;
            max-width: 100%;
            max-height: 100%;
            background: #fff;
            text-align: left;
            padding-left: 20px;
            transform: rotate(0deg) skewX(20deg) translate(0, 0);
            transition: 0.5;
            box-shadow: -20px 20px 10px rgba(0, 0, 0, 0.5);
        }

        ul li a9::before {
            content: '';
            position: absolute;
            top: 40%;
            left: -10.7%;
            height: 100%;
            width: 10.7%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewY(-45deg);
        }

        ul li a9::after {
            content: '';
            position: absolute;
            bottom: -81%;
            left: -5.5%;
            height: 80%;
            width: 100%;
            background: #b1b1b1b1;
            transform: 0.5s;
            transform: rotate(0deg) skewX(-45deg);
        }

        ul li a9:hover {
            transform: rotate(0deg) skew(20deg) translate(20px, -15px);
            box-shadow: -50px 50px 50px rgba(0, 0, 0, 0.5);
        }

        ul li:hover a9 {
            background: #000;
        }

        ul li:hover a9:before {
            background: black;
        }

        ul li:hover a9:after {
            background: #000;
        }

        @media (min-width: 3840px) {
            ul li a1 .fa {
                font-size: 120%;
                position: absolute;
                margin: 8px -40px;
            }

            ul li a1 span {
                font-size: 32px;
            }

            ul li a1 {
                width: 600px;
                height: 40px;
                padding-left: 60px;
            }

            ul li a32 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 10px -40px;
            }

            ul li a32 span {
                font-size: 32px;
            }

            ul li a32 {
                width: 450px;
                height: 65px;
                padding-left: 60px;
            }

            ul li a31 .fa {

                font-size: 120%;
                position: absolute;
                margin: 8px -40px;
            }

            ul li a31 span {
                font-size: 32px;
            }

            ul li a31 {
                width: 450px;
                height: 40px;
                padding-left: 60px;
            }

            ul li a3 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 8px -40px;
            }

            ul li a3 span {
                font-size: 32px;
            }

            ul li a3 {

                width: 720px;
                height: 45px;
                padding-left: 60px;
            }

            ul li a41 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 18px -40px;
            }

            ul li a41 span {
                font-size: 32px;
            }

            ul li a41 {
                width: 600px;
                height: 60px;
                padding-left: 60px;
            }

            ul li a4 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 18px -40px;
            }

            ul li a4 span {
                font-size: 32px;
            }

            ul li a4 {
                width: 600px;
                height: 60px;
                padding-left: 60px;
            }

            ul li a6 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 18px -40px;
            }

            ul li a6 span {
                font-size: 32px;
            }

            ul li a6 {
                width: 390px;
                height: 50px;
                padding-left: 60px;
            }

            ul li a61 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 18px -40px;
            }

            ul li a61 span {
                font-size: 32px;
            }

            ul li a61 {
                width: 390px;
                height: 50px;
                padding-left: 60px;
            }

            ul li a7 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 18px -40px;
            }

            ul li a7 span {
                font-size: 32px;
            }

            ul li a7 {
                width: 390px;
                height: 50px;
                padding-left: 60px;
            }

            ul li a9 .fa {
                padding-top: 0%;
                font-size: 120%;
                position: absolute;
                margin: 12px -40px;
            }

            ul li a9 span {
                font-size: 32px;
            }

            ul li a9 {
                width: 360px;
                height: 50px;
                padding-left: 60px;
            }

            #alignL01 {
                top: 16.5%;
                left: 16.2%;
            }

            #alignL02 {
                top: 19%;
                left: 16.7%;
            }

            #alignL03 {
                top: 21.6%;
                left: 17.1%;
            }

            #alignL04 {
                top: 24.7%;
                left: 17.7%;
            }

            #alignL05 {
                top: 27.7%;
                left: 18.2%;
            }

            #alignL06 {
                top: 30.5%;
                left: 18.7%;
            }

            #alignL08 {
                top: 33.4%;
                left: 19.2%;
            }

            #alignL09 {
                top: 36.15%;
                left: 19.8%;
            }

            #alignL10 {
                top: 39%;
                left: 20.3%;
            }

            #alignL12 {
                top: 42%;
                left: 20.8%;
            }

            #alignL13 {
                top: 44.6%;
                left: 21.2%;
            }

            #alignL14 {
                top: 47.6%;
                left: 21.8%;
            }

            #alignL15 {
                top: 51%;
                left: 22.5%;
            }

            #alignL16 {
                top: 54%;
                left: 23%;
            }

            #alignL17 {
                top: 64%;
                left: 33.1%;
            }


            #alignL22 {
                top: 48.7%;
                left: 49.5%;
            }

            #alignL23 {
                top: 48.8%;
                left: 52.2%;
            }

            #alignL24 {
                top: 48.9%;
                left: 54.5%;
            }

            #alignL25 {
                top: 50.5%;
                left: 62.4%;
            }

            #alignL26 {
                top: 50.5%;
                left: 64.6%;
            }

            #alignL27 {
                top: 50.5%;
                left: 66.7%;
            }

            #alignL29 {
                top: 50.5%;
                left: 69.1%;
            }

            #alignL30 {
                top: 50.5%;
                left: 70.8%;
            }

            #alignL31 {
                top: 50.5%;
                left: 72.5%;
            }

            #alignL32 {
                top: 62.1%;
                left: 80.23%;
            }

            #alignL32EC {
                top: 64.5%;
                left: 69.7%;
            }

            #alignL33 {
                top: 68.5%;
                left: 70.5%;
            }

            #displaypop0 {
                left: -107%;
            }

            #displaypop1 {
                left: -107%;
            }

            #displaypop2 {
                left: -105%;
            }

            #displaypop3 {
                left: -105%;
            }

            #displaypop4 {
                left: -105%;
            }

            #displaypop5 {
                left: -105%;
            }

            #displaypop6 {
                left: -105%;
            }

            #displaypop7 {
                left: -105%;
            }

            #displaypop8 {
                left: -105%;
            }

            #displaypop9 {
                left: -107%;
            }

            #displaypop10 {
                left: -107%;
            }

            #displaypop11 {
                left: -105%;
            }

            #displaypop12 {
                left: -105%;
            }

            #displaypop13 {
                left: -107%;
            }

            #displaypop14 {
                left: -107%;
            }

            #displaypop15 {
                top: 12px;
                left: -110%;
            }

            #displaypop16 {
                top: 12px;
                left: -110%;
            }

            #displaypop17 {
                top: 12px;
                left: -110%;
            }

            #displaypop18 {
                top: 22px;
                left: -110%;
            }

            #displaypop19 {
                top: 22px;
                left: -110%;
            }

            #displaypop20 {
                top: 25px;
                left: -110%;
            }

            #displaypop21 {
                top: 22px;
                left: -110%;
            }

            #displaypop22 {
                top: 22px;
                left: -110%;
            }

            #displaypop23 {
                top: 22px;
                left: -110%;
            }

            #displaypop24 {
                left: -110%;
            }

            #displaypop25 {
                left: -110%;
            }

            #title1 {
                left: 18%;
                top: 11%;
            }

            #title1a {
                left: 20%;
                top: 14%;
            }

            #title2 {
                left: 26%;
                top: 68%;
            }

            #title2a {
                left: 28%;
                top: 71%;
            }

            #title3 {
                left: 63%;
                top: 31%;
            }

            #title3a {
                left: 65%;
                top: 34%;
            }

            .modal {
                width: 100%;
                height: 38%;
            }



        }

        @media (max-width: 2222px) {

            #alignL01 {
                top: 17%;
                left: 16.6%;
            }

            #alignL02 {
                top: 19.4%;
                left: 17.1%;
            }

            #alignL03 {
                top: 21.6%;
                left: 17.5%;
            }

            #alignL04 {
                top: 24.7%;
                left: 17.9%;
            }

            #alignL05 {
                top: 27.7%;
                left: 18.5%;
            }

            #alignL06 {
                top: 30.5%;
                left: 18.9%;
            }

            #alignL08 {
                top: 33.4%;
                left: 19.4%;
            }

            #alignL09 {
                top: 36.15%;
                left: 19.8%;
            }

            #alignL10 {
                top: 39%;
                left: 20.3%;
            }

            #alignL12 {
                top: 42%;
                left: 20.8%;
            }

            #alignL13 {
                top: 45%;
                left: 21.3%;
            }

            #alignL14 {
                top: 47.6%;
                left: 21.7%;
            }

            #alignL15 {
                top: 51%;
                left: 22.3%;
            }

            #alignL16 {
                top: 54%;
                left: 22.8%;
            }

            #alignL17 {
                top: 58%;
                left: 23.5%;
            }

            #alignL22 {
                top: 49.7%;
                left: 50.2%;
            }

            #alignL23 {
                top: 49.9%;
                left: 52.9%;
            }

            #alignL24 {
                top: 49.97%;
                left: 55.3%;
            }

            #alignL25 {
                top: 51.1%;
                left: 62.9%;
            }

            #alignL26 {
                top: 51.2%;
                left: 65%;
            }

            #alignL27 {
                top: 51.2%;
                left: 67.2%;
            }

            #alignL29 {
                top: 51.4%;
                left: 69.2%;
            }

            #alignL30 {
                top: 51.4%;
                left: 71%;
            }

            #alignL31 {
                top: 51.4%;
                left: 72.6%;
            }

            #alignL32 {
                top: 62.1%;
                left: 80.23%;
            }

            #alignL32EC {
                top: 65%;
                left: 69.2%;
            }

            #alignL33 {
                top: 69%;
                left: 70%;
            }

            #displaypop0 {
                left: -310px;
            }

            #displaypop1 {
                left: -310px;
            }

            #displaypop2 {
                left: -400px;
            }

            #displaypop3 {
                left: -400px;
            }

            #displaypop4 {
                left: -400px;
            }

            #displaypop5 {
                left: -400px;
            }

            #displaypop6 {
                left: -400px;
            }

            #displaypop7 {
                left: -400px;
            }

            #displaypop8 {
                left: -400px;
            }

            #displaypop9 {
                left: -270px;
            }

            #displaypop10 {
                left: -270px;
            }

            #displaypop11 {
                left: -400px;
            }

            #displaypop12 {
                left: -400px;
            }

            #displaypop13 {
                left: -260px;
            }

            #displaypop14 {
                left: -315px;
            }

            #displaypop15 {
                top: 10px;
                left: -315px;
            }

            #displaypop16 {
                top: 12px;
                left: -315px;
            }

            #displaypop17 {
                top: 12px;
                left: -215px;
            }

            #displaypop18 {
                top: 22px;
                left: -215px;
            }

            #displaypop19 {
                top: 22px;
                left: -215px;
            }

            #displaypop20 {
                top: 25px;
                left: -215px;
            }

            #displaypop21 {
                top: 22px;
                left: -215px;
            }

            #displaypop22 {
                top: 22px;
                left: -215px;
            }

            #displaypop23 {
                top: 22px;
                left: -385px;
            }

            #displaypop24 {
                left: -215px;
            }

            #displaypop25 {
                left: -215px;
            }

            #title1 {
                left: 16%;
                top: 3%;
            }

            #title1a {
                left: 19%;
                top: 8%;
            }

            #title2 {
                left: 22%;
                top: 67%;
            }

            #title2a {
                left: 26%;
                top: 72%;
            }

            #title3 {
                left: 59%;
                top: 28%;
            }

            #title3a {
                left: 63%;
                top: 33%;
            }

        }

        @media (max-width: 1919px) {
            #alignL01 {
                top: 16.7%;
                left: 16.2%;
            }

            #alignL02 {
                top: 19%;
                left: 16.7%;
            }

            #alignL03 {
                top: 21.3%;
                left: 17.1%;
            }

            #alignL04 {
                top: 24.6%;
                left: 17.6%;
            }

            #alignL05 {
                top: 27.1%;
                left: 18.1%;
            }

            #alignL06 {
                top: 30.2%;
                left: 18.6%;
            }

            #alignL08 {
                top: 33%;
                left: 19.2%;
            }

            #alignL09 {
                top: 36%;
                left: 19.7%;
            }

            #alignL10 {
                top: 38.8%;
                left: 20.3%;
            }

            #alignL12 {
                top: 41.8%;
                left: 20.8%;
            }

            #alignL13 {
                top: 44.5%;
                left: 21.3%;
            }

            #alignL14 {
                top: 47.6%;
                left: 21.8%;
            }

            #alignL15 {
                top: 51%;
                left: 22.4%;
            }

            #alignL16 {
                top: 54%;
                left: 23.1%;
            }

            #alignL17 {
                top: 64%;
                left: 33.1%;
            }

            #alignL22 {
                top: 47.6%;
                left: 50%;
            }

            #alignL23 {
                top: 47.6%;
                left: 52.7%;
            }

            #alignL24 {
                top: 47.6%;
                left: 55.1%;
            }

            #alignL25 {
                top: 49.4%;
                left: 62.8%;
            }

            #alignL26 {
                top: 49.4%;
                left: 65%;
            }

            #alignL27 {
                top: 49.4%;
                left: 67.0%;
            }

            #alignL29 {
                top: 49.5%;
                left: 69.0%;
            }

            #alignL30 {
                top: 49.5%;
                left: 71%;
            }

            #alignL31 {
                top: 49.5%;
                left: 72.6%;
            }

            #alignL32 {
                top: 62.1%;
                left: 80.23%;
            }

            #alignL32EC {
                top: 64%;
                left: 69.8%;
            }

            #alignL33 {
                top: 67%;
                left: 70.5%;
            }

            #displaypop0 {
                left: -310px;
            }

            #displaypop1 {
                left: -310px;
            }

            #displaypop2 {
                left: -400px;
            }

            #displaypop3 {
                left: -400px;
            }

            #displaypop4 {
                left: -400px;
            }

            #displaypop5 {
                left: -400px;
            }

            #displaypop6 {
                left: -400px;
            }

            #displaypop7 {
                left: -400px;
            }

            #displaypop8 {
                left: -400px;
            }

            #displaypop9 {
                left: -400px;
            }

            #displaypop10 {
                left: -270px;
            }

            #displaypop11 {
                left: -270px;
            }

            #displaypop12 {
                left: -400px;
            }

            #displaypop13 {
                left: -400px;
            }

            #displaypop14 {
                left: -260px;
            }

            #displaypop15 {
                top: 10px;
                left: -355px;
            }

            #displaypop16 {
                top: 12px;
                left: -355px;
            }

            #displaypop17 {
                top: 12px;
                left: -355px;
            }

            #displaypop18 {
                top: 22px;
                left: -215px;
            }

            #displaypop19 {
                top: 22px;
                left: -215px;
            }

            #displaypop20 {
                top: 25px;
                left: -215px;
            }

            #displaypop21 {
                top: 22px;
                left: -215px;
            }

            #displaypop22 {
                top: 22px;
                left: -385px;
            }

            #displaypop23 {
                top: 22px;
                left: -385px;
            }

            #displaypop24 {
                left: -215px;
            }

            #displaypop25 {
                left: -215px;
            }

            #title1 {
                left: 16%;
                top: 3%;
            }

            #title1a {
                left: 19%;
                top: 8%;
            }

            #title2 {
                left: 22%;
                top: 67%;
            }

            #title2a {
                left: 26%;
                top: 72%;
            }

            #title3 {
                left: 59%;
                top: 28%;
            }

            #title3a {
                left: 63%;
                top: 33%;
            }
        }

        @media (max-width: 1366px) {
            ul li a1 .fa {
                position: absolute;
                margin: 4px -20px;
            }

            ul li a1 span {
                font-size: 14px;
            }

            ul li a1 {
                width: 200px;
                height: 20px;
                padding-left: 30px;
            }

            ul li a32 .fa {
                position: absolute;
                margin: 4px -20px;
            }

            ul li a32 span {
                font-size: 14px;
            }

            ul li a32 {
                width: 160px;
                height: 25px;
                padding-left: 30px;
            }

            ul li a31 .fa {
                position: absolute;
                margin: 4px -20px;
            }

            ul li a31 span {
                font-size: 14px;
            }

            ul li a31 {
                width: 180px;
                height: 20px;
                padding-left: 30px;
            }

            ul li a3 .fa {
                position: absolute;
                margin: 4px -20px;
            }

            ul li a3 span {
                font-size: 14px;
            }

            ul li a3 {
                width: 250px;
                height: 20px;
                padding-left: 30px;
            }

            ul li a41 .fa {
                position: absolute;
                margin: -2px -20px;
            }

            ul li a41 span {
                font-size: 14px;
            }

            ul li a41 {
                width: 230px;
                height: 22px;
                padding-left: 30px;
            }

            ul li a4 .fa {
                position: absolute;
                margin: -2px -20px;
            }

            ul li a4 span {
                font-size: 14px;
            }

            ul li a4 {
                width: 230px;
                height: 22px;
                padding-left: 30px;
            }

            ul li a6 .fa {
                position: absolute;
                margin: -2px -20px;
            }

            ul li a6 span {
                font-size: 14px;
            }

            ul li a6 {
                width: 130px;
                height: 22px;
                padding-left: 30px;
            }

            ul li a61 .fa {
                position: absolute;
                margin: -2px -20px;
            }

            ul li a61 span {
                font-size: 14px;
            }

            ul li a61 {
                width: 130px;
                height: 22px;
                padding-left: 30px;
            }

            ul li a7 .fa {
                position: absolute;
                margin: 0px -20px;
            }

            ul li a7 span {
                font-size: 14px;
            }

            ul li a7 {
                width: 130px;
                height: 22px;
                padding-left: 30px;
            }

            ul li a9 .fa {
                position: absolute;
                margin: 2px -20px;
            }

            ul li a9 span {
                font-size: 14px;
            }

            ul li a9 {
                width: 120px;
                height: 18px;
                padding-left: 30px;
            }

            #alignL22 {
                top: 50%;
                left: 49.2%;
            }

            #alignL23 {
                top: 50%;
                left: 52%;
            }

            #alignL24 {
                top: 50%;
                left: 54.2%;
            }

            #displaypop0 {
                left: -117%;
            }

            #displaypop1 {
                left: -117%;
            }

            #displaypop2 {
                left: -115%;
            }

            #displaypop3 {
                left: -113%;
            }

            #displaypop4 {
                left: -113%;
            }

            #displaypop5 {
                left: -113%;
            }

            #displaypop6 {
                left: -113%;
            }

            #displaypop7 {
                left: -113%;
            }

            #displaypop8 {
                left: -113%;
            }

            #displaypop9 {
                left: -116%;
            }

            #displaypop10 {
                left: -116%;
            }

            #displaypop11 {
                left: -112%;
            }

            #displaypop12 {
                left: -112%;
            }

            #displaypop13 {
                left: -120%;
            }

            #displaypop14 {
                left: -120%;
            }

            #displaypop15 {
                top: 10px;
                left: -120%;
            }

            #displaypop16 {
                top: 12px;
                left: -120%;
            }

            #displaypop17 {
                top: 12px;
                left: -130%;
            }

            #displaypop18 {
                top: 22px;
                left: -130%;
            }

            #displaypop19 {
                top: 22px;
                left: -130%;
            }

            #displaypop20 {
                top: 25px;
                left: -130%;
            }

            #displaypop21 {
                top: 22px;
                left: -130%;
            }

            #displaypop22 {
                top: 22px;
                left: -130%;
            }

            #displaypop23 {
                top: 22px;
                left: -130%;
            }

            #displaypop24 {
                left: -130%;
            }

            #displaypop25 {
                left: -130%;
            }

            #title1 {
                left: 16%;
                top: 3%;
            }

            #title1a {
                left: 19%;
                top: 8%;
            }

            #title2 {
                left: 22%;
                top: 67%;
            }

            #title2a {
                left: 26%;
                top: 72%;
            }

            #title3 {
                left: 59%;
                top: 28%;
            }

            #title3a {
                left: 63%;
                top: 33%;
            }

            .modal {
                width: 100%;
                height: 80%;
            }



        }
    </style>


    <style>
        .figureframe {
            width: 100%;
            height: 450px;

            /*border: 4px solid black;*/
            border: outset silver;
            border-radius: 25px;
            background: #eee;
            margin: auto;
            padding: 10px 10px;
        }

        .displaybackground {
            width: 1450px;
            height: 500px;
            border-radius: 25px;
            background: url(media/backgroundproductionline1.jpg);
        }
    </style>
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

        .rotate1 {
            transform: rotateZ(90deg);
        }

        .outermostcontainer {
            width: 100%;
            height: 100%;
            position: fixed;

        }
    </style>
</head>

<body>

</body>

</html>