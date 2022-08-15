<style>

#blink 
{
	 /* display: inline-block; */
    /* text-decoration: none; */
    color: #fff;
	/* display: flex; */
	align-items: center;
	justify-content: center;
    font-weight: bold;
    color: white;
    /* background-color: #cc0000; */
    /* padding: 10px 50px; */
    /* font-size: 18px; */
    /* border: 1px solid #2d6898; */
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.5, #9B0000),
        color-stop(1, #cc0000)
    );
	-webkit-border-radius: 3px;
    -moz-border-radius: 3px;
     border-radius: 3px;
	 text-shadow: 0px  -1px 0px rgba(0,0,0,.5);


	 
	-webkit-animation: blink .99s linear infinite;
	-moz-animation: blink .99s linear infinite;
	-ms-animation: blink .99s linear infinite;
	-o-animation: blink .99s linear infinite;
	animation: blink .99s linear infinite;
	 background-color:#9B0000;
}

#blink1 
{
    display: inline-block;
    text-decoration: none;
    color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
    font-weight: bold;
    background-color: #cc0000;
    padding: 10px 50px;
    font-size: 18px;
    border: 1px solid #2d6898;
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0, #FDC168),
        color-stop(1, #ff9933)
    );

}
#blink2 
{
	display: inline-block;
    text-decoration: none;
    color: #0000;
	display: flex;
	align-items: center;
	justify-content: center;
    font-weight: bold;
    background-color: #cc0000;
    /* padding: 10px 50px; */
    /* font-size: 18px; */
    border: 1px solid #2d6898;
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0, #E1ECF9),
        color-stop(1, #DBE5FF)
    );
	-webkit-border-radius: 3px;
    -moz-border-radius: 3px;
     border-radius: 3px;
	 text-shadow: 0px  -1px 0px rgba(0,0,0,.5);
}
 
@-webkit-keyframes blink {
	0% { opacity: 0; }
	50% { opacity: 0; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-moz-keyframes blink {
	0% { opacity:0; }
	50% { opacity: 0; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes blink {
	0% { opacity: 0; }
	50% { opacity: 0; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-o-keyframes blink {
	0% { opacity: 0; }
	50% { opacity: 0; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50% { opacity:1; }
	70% { opacity: 0; }
}
</style>