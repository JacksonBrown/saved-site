<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>I am SavedIn1080p</title>

	<!-- Load fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Load jQuery -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/unslider.js"></script>
	
	<!-- Set Title Logo -->
	<link rel="shortcut icon" href="css/img/diamond.png" />

	<!-- CSS Additions -->
	<style type="text/css">
		html {
			overflow: -moz-scrollbars-none; 
			 height: 100%;
		}

		.container {
  			display: block;
  			-webkit-box-sizing: border-box;
 			-moz-box-sizing: border-box;
  			box-sizing: border-box;
  			text-shadow: 0 0 5px #666;
  			-webkit-animation: glow-anim 12s infinite;
  			-moz-animation: glow-anim 12s infinite;
  			animation: glow-anim 12s infinite;
		}

		.container-two {
			margin-bottom: 5%;
			font-family: 'Roboto Slab', serif;
		}

		#wss{
			opacity: 0;
			-webkit-transition: opacity 1.0s linear 0s;
			transition: opacity 1.0s linear 0s;
		}

		@-webkit-keyframes glow-anim {
  			25% {
    				text-shadow: 0 0 25px #FF3E34;
    				color: #FF3E34;
  			}
  			50% {
    				text-shadow: 0 0 25px #60FF67;
    				color: #60FF67;
  			}
  			75% {
    				text-shadow: 0 0 25px #4C79FF;
    				color: #4C79FF;
  			}
		}
		@-moz-keyframes glow-anim {
  			25% {
    				text-shadow: 0 0 25px #FF3E34;
   	 			color: #FF3E34;
  			}
  			50% {
    				text-shadow: 0 0 25px #60FF67;
    				color: #60FF67;
  			}
  			75% {
    				text-shadow: 0 0 25px #4C79FF;
    				color: #4C79FF;
  			}
		}
		@keyframes glow-anim {
  			25% {
    				text-shadow: 0 0 25px #FF3E34;
    				color: #FF3E34;
  			}
  			50% {
    				text-shadow: 0 0 25px #60FF67;
    				color: #60FF67;
  			}
  			75% {
    				text-shadow: 0 0 25px #4C79FF;
   	 			color: #4C79FF;
  			}
		}

		.btn-two{
			background: none;
			border: 3px solid #fff;
			font-family: 'Montserrat', sans-serif;
			color: #fff;
		}

		.btn-two:hover{
			background: #fff;
			color: #000;
			transition: 0.6s;
		}

		.btn-two:visited{
			
		}

		.btn-three{
			background: none;
			border: 3px solid #000;
			color: #000;
			font-family: 'Montserrat', sans-serif;
		}

		.btn-three:hover{
			background: #000;
			color: #fff;
			transition: 0.6s;
			border-color: #000;
		}

		.upper-bg{
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.contestant{
			font-family: 'Montserrat', sans-serif;
			padding: 20px;
			font-size: 15px;
			-webkit-transition: opacity 1.0s linear 0s;
			transition: opacity 1.0s linear 0s;
		}

		::webkit-scrollbar{
			display: none;
		}

	</style>

	<!-- Custom JS -->
	<script type="text/javascript">
		$(function() {

			$("#slideshow > div:gt(0)").hide();

			setInterval(function() {
				$('#slideshow > div:first')
			    		.fadeOut(1000)
			    		.next()
			    		.fadeIn(1000)
			    		.end()
			    		.appendTo('#slideshow');
				},  5000);

		});

		var wss_i = 0;
		var wss_array = ["\"Username1\"","\"Username2\"" ,"\"Username3\"","\"Username4\""];
		var wss_elem;
		function wssNext(){
			wss_i++;
			wss_elem.style.opacity = 0;
			if(wss_i > (wss_array.length - 1)){
				wss_i = 0;
			}
			setTimeout('wssSlide()', 2000);
		}

		function wssSlide(){
			wss_elem.innerHTML = wss_array[wss_i];
			wss_elem.style.opacity = 1;
			setTimeout('wssNext()', 4000);
		}


	</script>


</head>
<body style="background: #333;">


	<!-- BEGIN UPPER BG -->
	<div class="upper-bg home home-fullscreen home" id="home" style="background: #000;">
		<!-- BEGIN UPPER BG LANDING HEADER -->
		<div class="container" style="overflow: hidden;">
			<div class="header-info" style="">
				<h1 class="header-info" style="margin-top: 10%; color: #fff;">Show The Participants!</h1>
				<a data-scroll class="btn btn-two" href="#partic" >Reveal</a>
			</div>
		</div>
		<!-- END UPPER BG LANDING HEADER -->
	</div>
	<!-- END UPPER BG -->

	<!-- BEGIN UPPER BG -->
	<div class="upper-bg partic" id="partic" style="background: #000;">
		<div class="container">
			<div class="header-info" style="">
				<h1 class="header-info" style="margin-top: 10%; color: #fff;">The Winner Is</h1>
				<script>wss_elem = document.getElementById("wss"); wssSlide();</script>
			</div>

			<button class="btn btn-two" onclick="fadeOut()">Show The Winner</button>

			<br />
			<br />
			<br />

			<!-- FIRST ROW -->
			<div class="container-two" id="frow">
				<div class="col-md-12" id="frow">

					<div class="col-md-2" id="cond">
						<p id="con" class="contestant">! JaЗне - СРБ !</p>
					</div>

					<div class="col-md-2" id="cond6">
						<p id="con6" class="contestant">ABAYD ANSARI</p>
					</div>

					<div class="col-md-2" id="cond4">
						<p id="con4" class="contestant">AKSQUARE GAMING</p>
					</div>

					<div class="col-md-2" id="cond5">
						<p id="con5" class="contestant">Alek Milovanovic</p>
					</div>

					<div class="col-md-2" id="cond2">
						<p id="con2" class="contestant">alissa hughart</p>
					</div>

					<div class="col-md-2" id="cond3">
						<p id="con3" class="contestant">Alucard X</p>
					</div>

				</div>
			</div>

			<!-- FOURTH ROW -->
			<div class="container-two" id="ftrow">
				<div class="col-md-12" id="ftrow">

					<div class="col-md-2" id="cond20">
						<p id="con20" class="contestant">Goofy Guy19</p>
					</div>

					<div class="col-md-2" id="cond19">
						<p id="con19" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond22">
						<p id="con22" class="contestant">HERPxDERPIN</p>
					</div>

					<div class="col-md-2" id="cond21">
						<p id="con21" class="contestant">HeyThereVader</p>
					</div>

					<div class="col-md-2" id="cond24">
						<p id="con24" class="contestant">ifitworks</p>
					</div>

					<div class="col-md-2" id="cond23">
						<p id="con23" class="contestant">iRyluh</p>
					</div>

				</div>
			</div>
			
			<!-- SECOND ROW -->
			<div class="container-two" id="srow">
				<div class="col-md-12" id="srow">

					<div class="col-md-2" id="cond7">
						<p id="con7" class="contestant">Andrija Vujović</p>
					</div>

					<div class="col-md-2" id="cond9">
						<p id="con9" class="contestant">BlueBunnyGamer</p>
					</div>

					<div class="col-md-2" id="cond8">
						<p id="con8" class="contestant">Bob #Whaaat?!</p>
					</div>

					<div class="col-md-2" id="cond45">
						<p id="con45" class="contestant">MrWapk</p>
					</div>

					<div class="col-md-2" id="cond48">
						<p id="con48" class="contestant">mumzel99</p>
					</div>

					<div class="col-md-2" id="cond47">
						<p id="con47" class="contestant">Nils Meyerhoff</p>
					</div>

				</div>
			</div>


			<!-- EIGTH ROW -->
			<div class="container-two" id="egrow">
				<div class="col-md-12" id="egrow">

					<div class="col-md-2" id="cond44">
						<p id="con44" class="contestant">Mavis Odrade</p>
					</div>

					<div class="col-md-2" id="cond43">
						<p id="con43" class="contestant">MegaGamer</p>
					</div>

					<div class="col-md-2" id="cond46">
						<p id="con46" class="contestant">Mostafa El Azizy</p>
					</div>

					<div class="col-md-2" id="cond10">
						<p id="con10" class="contestant">Candiedbrush89</p>
					</div>

					<div class="col-md-2" id="cond12">
						<p id="con12" class="contestant">Cute Kitty</p>
					</div>

					<div class="col-md-2" id="cond11">
						<p id="con11" class="contestant">Dalton Kee (MonoCom)</p>
					</div>

				</div>
			</div>

			<!-- FIFTH ROW -->
			<div class="container-two" id="ffrow">
				<div class="col-md-12" id="ffrow">

					<div class="col-md-2" id="cond14">
						<p id="con14" class="contestant">Doge Piesek</p>
					</div>

					<div class="col-md-2" id="cond13">
						<p id="con13" class="contestant">Ender Pearl</p>
					</div>

					<div class="col-md-2" id="cond17">
						<p id="con17" class="contestant">Furno Lt</p>
					</div>

					<div class="col-md-2" id="cond27">
						<p id="con27" class="contestant">Jarrow</p>
					</div>

					<div class="col-md-2" id="cond30">
						<p id="con30" class="contestant">Jo E</p>
					</div>

					<div class="col-md-2" id="cond29">
						<p id="con29" class="contestant">Joe Jay</p>
					</div>

				</div>
			</div>

			<!-- THIRD ROW -->
			<div class="container-two" id="throw">
				<div class="col-md-12" id="throw">

					<div class="col-md-2" id="cond15">
						<p id="con15" class="contestant">GamingWithVengeance | Clash Royale</p>
					</div>

					<div class="col-md-2" id="cond18">
						<p id="con18" class="contestant">Gary Wilfong</p>
					</div>

					<div class="col-md-2" id="cond16">
						<p id="con16" class="contestant">Ghost._.Pyro</p>
					</div>

					<div class="col-md-2" id="cond26">
						<p id="con26" class="contestant">Isaiah Martinez</p>
					</div>

					<div class="col-md-2" id="cond25">
						<p id="con25" class="contestant">Its Fishee</p>
					</div>

					<div class="col-md-2" id="cond28">
						<p id="con28" class="contestant">Jackson Brown</p>
					</div>

				</div>
			</div>


			<!-- SIXTH ROW -->
			<div class="container-two" id="sxrow">
				<div class="col-md-12" id="sxrow">

					<div class="col-md-2" id="cond32">
						<p id="con32" class="contestant">john dunn</p>
					</div>

					<div class="col-md-2" id="cond31">
						<p id="con31" class="contestant">John-Marc Gebara</p>
					</div>

					<div class="col-md-2" id="cond34">
						<p id="con34" class="contestant">joseph lamb</p>
					</div>

					<div class="col-md-2" id="cond60">
						<p id="con60" class="contestant">Rudolf Scharm</p>
					</div>

					<div class="col-md-2" id="cond59">
						<p id="con59" class="contestant">Ryan “R2A” Quinn</p>
					</div>

					<div class="col-md-2" id="cond33">
						<p id="con33" class="contestant">kyle ulrich</p>
					</div>

				</div>
			</div>

			<!-- TENTH ROW -->
			<div class="container-two" id="tnhrow">
				<div class="col-md-12" id="tnhrow">

					<div class="col-md-2" id="cond56">
						<p id="con56" class="contestant">ReNuaR 1</p>
					</div>

					<div class="col-md-2" id="cond55">
						<p id="con55" class="contestant">REUBEN THE PIG</p>
					</div>

					<div class="col-md-2" id="cond58">
						<p id="con58" class="contestant">RicTV</p>
					</div>

					<div class="col-md-2" id="cond57">
						<p id="con57" class="contestant">Royal</p>
					</div>

					<div class="col-md-2" id="cond36">
						<p id="con36" class="contestant">lanny toof</p>
					</div>

					<div class="col-md-2" id="cond35">
						<p id="con35" class="contestant">Last WarLorD</p>
					</div>


				</div>
			</div>



			<!-- SEVENTH ROW -->
			<div class="container-two" id="svtrow">
				<div class="col-md-12" id="svtrow">

					<div class="col-md-2" id="cond78">
						<p id="con78" class="contestant">Vanz Aromo</p>
					</div>

					<div class="col-md-2" id="cond77">
						<p id="con77" class="contestant">xTrixB</p>
					</div>

					<div class="col-md-2" id="cond40">
						<p id="con40" class="contestant">Linda Davis</p>
					</div>

					<div class="col-md-2" id="cond39">
						<p id="con39" class="contestant">LittleAsianBoy</p>
					</div>

					<div class="col-md-2" id="cond42">
						<p id="con42" class="contestant">Lucky Shamrock</p>
					</div>

					<div class="col-md-2" id="cond41">
						<p id="con41" class="contestant">Madden mobile boys</p>
					</div>

				</div>
			</div>

			<!-- NINTH ROW -->
			<div class="container-two" id="nnrow">
				<div class="col-md-12" id="nnrow">

					<div class="col-md-2" id="cond74">
						<p id="con74" class="contestant">YezaAoi</p>
					</div>

					<div class="col-md-2" id="cond73">
						<p id="con73" class="contestant">TheDBZSquirrel</p>
					</div>

					<div class="col-md-2" id="cond64">
						<p id="con64" class="contestant">SkiddMark</p>
					</div>

					<div class="col-md-2" id="cond50">
						<p id="con50" class="contestant">papacreeperBOOM</p>
					</div>

					<div class="col-md-2" id="cond49">
						<p id="con49" class="contestant">Pathrazer (Pathrazer)</p>
					</div>

					<div class="col-md-2" id="cond52">
						<p id="con52" class="contestant">Puremix</p>
					</div>

				</div>
			</div>

			<!-- THIRTEENTH ROW -->
			<div class="container-two" id="thrtrow">
				<div class="col-md-12" id="thrtrow">

					<div class="col-md-2" id="cond62">
						<p id="con62" class="contestant">Self Generator HD</p>
					</div>

					<div class="col-md-2" id="cond61">
						<p id="con61" class="contestant">serena is kawaii</p>
					</div>

					<div class="col-md-2" id="cond76">
						<p id="con76" class="contestant">ZeniGaming</p>
					</div>

					<div class="col-md-2" id="cond75">
						<p id="con75" class="contestant">Utsav Joshi</p>
					</div>

					<div class="col-md-2" id="cond38">
						<p id="con38" class="contestant">Legit Shawn</p>
					</div>

					<div class="col-md-2" id="cond37">
						<p id="con37" class="contestant">lethalcookie</p>
					</div>

				</div>
			</div>


			<!-- ELEVENTH ROW -->
			<div class="container-two" id="elthrow">
				<div class="col-md-12" id="elthrow">

					<div class="col-md-2" id="cond63">
						<p id="con63" class="contestant">SmellyBrick</p>
					</div>

					<div class="col-md-2" id="cond66">
						<p id="con66" class="contestant">Snapdebap</p>
					</div>

					<div class="col-md-2" id="cond65">
						<p id="con65" class="contestant">Sven je moedr</p>
					</div>

					<div class="col-md-2" id="cond92">
						<p id="con92" class="contestant">Jarrow Sparrow</p>
					</div>

					<div class="col-md-2" id="cond91">
						<p id="con91" class="contestant">Jessica Rowe</p>
					</div>

					<div class="col-md-2" id="cond94">
						<p id="con94" class="contestant">João Pedro Machado</p>
					</div>


				</div>
			</div>

			<!-- FOURTEENTH ROW -->
			<div class="container-two" id="fourtrow">
				<div class="col-md-12" id="fourtrow">

					<div class="col-md-2" id="cond80">
						<p id="con80" class="contestant">Bo Mcafee</p>
					</div>

					<div class="col-md-2" id="cond79">
						<p id="con79" class="contestant">Devon Riner</p>
					</div>

					<div class="col-md-2" id="cond82">
						<p id="con82" class="contestant">Etai Oscar</p>
					</div>

					<div class="col-md-2" id="cond69">
						<p id="con69" class="contestant">Utsav Joshi</p>
					</div>

					<div class="col-md-2" id="cond72">
						<p id="con72" class="contestant">Vanz Aromo</p>
					</div>

					<div class="col-md-2" id="cond71">
						<p id="con71" class="contestant">xTrixB</p>
					</div>

				</div>
			</div>

			<!-- TWELTH ROW -->
			<div class="container-two" id="twlthrow">
				<div class="col-md-12" id="twlthrow">

					<div class="col-md-2" id="cond68">
						<p id="con68" class="contestant">ThatPuppyLover</p>
					</div>

					<div class="col-md-2" id="cond83">
						<p id="con83" class="contestant">James Feltner</p>
					</div>

					<div class="col-md-2" id="cond95">
						<p id="con95" class="contestant">Kyle Ulrich</p>
					</div>

					<div class="col-md-2" id="cond99">
						<p id="con99" class="contestant">Tara Mingus</p>
					</div>

					<div class="col-md-2" id="cond102">
						<p id="con102" class="contestant">Yassin Tahri</p>
					</div>

					<div class="col-md-2" id="cond101">
						<p id="con101" class="contestant">James Feltner</p>
					</div>

				</div>
			</div>

		<!-- FIFTEENTH ROW -->
			<div class="container-two" id="fiftrow">
				<div class="col-md-12" id="fiftrow">

					<div class="col-md-2" id="cond86">
						<p id="con86" class="contestant">Bo Mcafee</p>
					</div>

					<div class="col-md-2" id="cond85">
						<p id="con85" class="contestant">Devon Riner</p>
					</div>

					<div class="col-md-2" id="cond88">
						<p id="con88" class="contestant">Etai Oscar</p>
					</div>

					<div class="col-md-2" id="cond87">
						<p id="con87" class="contestant">Hedi Mohammed</p>
					</div>

					<div class="col-md-2" id="cond90">
						<p id="con90" class="contestant">Jake Jones</p>
					</div>

					<div class="col-md-2" id="cond89">
						<p id="con89" class="contestant">James Feltner</p>
					</div>

				</div>
			</div>

		<!-- SEVENTEENTH ROW -->
			<div class="container-two" id="sixtrow">
				<div class="col-md-12" id="sixtrow">

					<div class="col-md-2" id="cond93">
						<p id="con93" class="contestant">João Pedro Machado</p>
					</div>

					<div class="col-md-2" id="cond96">
						<p id="con96" class="contestant">Josh Campbell</p>
					</div>


					<div class="col-md-2" id="cond67">
						<p id="con67" class="contestant">TheDBZSquirrel</p>
					</div>

					<div class="col-md-2" id="cond70">
						<p id="con70" class="contestant">Upam Sakib</p>
					</div>

					<div class="col-md-2" id="cond81">
						<p id="con81" class="contestant">Hedi Mohammed</p>
					</div>

					<div class="col-md-2" id="cond84">
						<p id="con84" class="contestant">Jake Jones</p>
					</div>

				</div>
			</div>


		<!-- SIXTEENTH ROW -->
			<div class="container-two" id="sixtrow">
				<div class="col-md-12" id="sixtrow">

					<div class="col-md-2" id="cond98">
						<p id="con98" class="contestant">Mostafa Elazizy</p>
					</div>

					<div class="col-md-2" id="cond97">
						<p id="con97" class="contestant">Sakib Intisar Hossain Upam</p>
					</div>

					<div class="col-md-2" id="cond100">
						<p id="con100" class="contestant">Shawn Lovejoy</p>
					</div>

					<div class="col-md-2" id="cond51">
						<p id="con51" class="contestant">Rafael Kovač</p>
					</div>

					<div class="col-md-2" id="cond54">
						<p id="con54" class="contestant">Raiken</p>
					</div>

					<div class="col-md-2" id="cond53">
						<p id="con53" class="contestant">RedWolf Gaming</p>
					</div>

				</div>
			</div>



		</div>

	</div>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script src="js/app.js"></script>

	<script src="contest-exp.js"></script>
	
</body>
</html>
