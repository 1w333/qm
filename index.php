<?php
//If the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}

include "incl/conndb.php";
include "mit-referal.php";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="MIT Quantum Metal Malaysia Agent Dealer ">

	<meta name="author" content="MIT">

	<title>MIT | Maximum Impact Team Quantum Metal Malaysia QM Agent Dealer</title>

	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="plugins/theme-font/style.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="plugins/animate-css/animate.css">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		.floating{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
       font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.float-button{
	margin-top:16px;
}
	</style>

	<script type="text/javascript">
		window.onload=function(){
		//Calculate Sub Total


		function calculateSubTotal() {

			var SubNilai = +Math.round(document.getElementById("modal").value * 6.66 * 100) / 100;
		    var SubTotal = SubNilai - document.getElementById("modal").value;

		    document.getElementById("nilai").value = isNaN(SubNilai) ? 0 : SubNilai;
		    document.getElementById("penjimatan").value = isNaN(SubTotal) ? 0 : SubTotal;
		}

		document.getElementById("modal").onchange = calculateSubTotal;
		document.getElementById("modal").onkeyup = calculateSubTotal;

		}
	</script>



</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!--
	    Start Preloader
	    ==================================== -->
	<div class="preloader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- End Preloader
        ==================================== -->

 <!--
Welcome Slider
==================================== -->

<section class="hero-area overlay" style="background-image: url('images/backgrounds/mit-banner.jpeg');">
	<!-- <video autoplay muted loop class="hero-video">
		<source src="images/banner/hero-video.mp4" type="video/mp4">
	</video> -->
	<div class="block">
		<div class="video-button">
			<a class="popup-video" href="https://www.youtube.com/watch?v=u4AvM63vCpI">
				<i class="tf-ion-play"></i>
		</a>
		</div>
		<h1>Era Baru Emas</h1>
		<p>"Saya nak simpan emas", "Saya nak berdagang emas" Pilihan di tangan anda, yang pasti anda sudah temui TEAM yang mempunyai matlamat sama seperti ANDA<br>Hati-hati dengan SCAMMER diluar sana, sekali terkena hidup merana.</p>
		<a data-scroll href="#about" class="btn btn-transparent">Kenali Kami</a>
	</div>
</section>

 <!-- 
  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
              <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
    
                <!-- logo -->
                <a class="navbar-brand logo" href="#body">
                    <img src="images/mit-logo.png" alt="Website Logo" />
                    <!-- <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#FFD700" stroke-width="3">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                            </g>
                        </g>
                    </svg> -->
                </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="#body">Utama</a></li>
                <li><a data-scroll href="#about">Siapa Kami</a></li>
                <li><a data-scroll href="#emas">Kenapa Emas</a></li>
                <li><a data-scroll href="#qm">Kenapa QM</a></li>
                <li><a data-scroll href="#dagang">Dagang Emas</a></li>
                <li><a data-scroll href="#simpan">Simpan Emas</a></li>
            </ul>
        </nav>
        <!-- /main nav -->
  
      </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->

<!--
		Start About Section
		==================================== -->
		<section class="bg-one about section" id="about">
			<a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link; ?>&text=Saya berminat QM." class="floating" target="_blank"><i class="fa fa-whatsapp float-button"></i></a>
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>Siapa <span class="color">Kami</span> </h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="block">							
							<div class="icon-box">
								<i class="tf-bargraph"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>Pedagang Emas</h3>								
								<p>Ada dikalangan ahli berdagang untuk mencari duit poket harian &amp; mingguan, bayar loan rumah &amp; kereta atau kumpul harta. Minat berdagang, kami akan kongsikan cara.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="block">
							<div class="icon-box">
								<i class="tf-wallet"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>Penyimpan Emas</h3>
								<p>"Sikit-sikit lama-lama jadi bukit", ramai yang sebut tapi jarang yang buat, akan tetapi sudah ada dikalangan kami yang sudah memiliki bukit, kami beli emas dengan harga diskaun.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="block kill-margin-bottom">
							<div class="icon-box">
								<i class="tf-profile-male"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>QM Gold Agent</h3>
								<p>Emas adalah asset berharga, perlukan "Platform" yang dipercayai dan kukuh, kami pilih Quantum Metal (QM) salah satu pengedar jongkong emas dan pembekal sistem emas terbesar di Malaysia.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm bg-1 overly" id="emas">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="color: #FFF !important;">Kenapa EMAS?</h2>
				<p style="color: #FFF !important;">Emas berharga dan akan releven sampai bila-bila, sehingga diceritakan dalam AL-QURAN di SYURGA juga ada emas. Abu Bakar Ibn Abi Maryam melaporkan bahawa beliau mendengar Rasulullah  telah bersabda "Akan tiba suatu zaman di mana tiada apa yang bernilai dan boleh digunakan oleh umat manusia. Maka simpanlah dinar dan dirham (untuk digunakan). (Musnad Imam Ahmad Ibn Hanbal).</p>
				<a href="<?php echo $qm_link; ?>" target="_blank" class="btn btn-main">Buka Akaun QM</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Services Section
==================================== -->

<section class="bg-one section" id="qm">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Kenapa Pilih <span class="color">Quantum Metal</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-filing"></i>
					</div>
					<h3>Pembekal Emas Bank Malaysia</h3>
					<p>QM merupakan pembekal Emas untuk 4 Bank di Malaysia. Bank Muamalat, Affin Bank, Alliance Bank & Al - Rajhi Bank</p>
				</div>
			</article>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-compass"></i>
					</div>
					<h3>Pengedar Ekslusif Emas ICBC Bank</h3>
					<p>QM dilantik menjadi Pengedar Ekslusif oleh ICBC Bank China (Bank Terbesar Dunia). Bank besar dunia tidak akan berkerjasama dengan scammer.</p>
				</div>
			</article>
            <!-- End Single Service Item -->
            
            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-clipboard"></i>
					</div>
					<h3>Pengedar Ekslusif Perth Mint Australia</h3>
					<p>QM juga dilantik sebagai Pengedar Ekslusif bagi brand terkenal iaitu Perth Mint Australia (LBMA). Reputasi kukuh diiktiraf dunia </p>
				</div>
			</article>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-lifesaver"></i>
					</div>
					<h3>Peti Besi Keselamatan bertaraf Dunia</h3>
					<p>QM bekerjasama dengan BRINKS sebagai penyimpanan simpanan emas rasmi Gold Storage System di BRINKS SINGAPURA.</p>
				</div>
			</article>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-code-working"></i>
					</div>
					<h3>Setiap Gram Emas Diinsurankan</h3>
					<p>100% Emas yang dibeli melaui QM diinsurankan oleh Lloyd's of London. Tiada syarikat insurans bertaraf dunia akan bersetuju menginsurankan benda yang tidak wujud.</p>
				</div>
			</article>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="service-block text-center kill-margin-bottom">
					<div class="service-icon text-center">
						<i class="tf-globe"></i>
					</div>
					<h3>Bisnes di 10 Negara ASEAN dan Berkembang</h3>
					<p>Berkembang ke 10 negara ASEAN iaitu Vietnam, Myanmar, Brunei, Cambodia, Thailand, Singapore, Indonesia, Laos dan MALAYSIA.</p>
				</div>
			</article>
			<!-- End Single Service Item -->
				
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- 
Start QM Product
=========================================== -->

<section class="section">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
				<h2>Produk Ditawarkan Oleh <span class="color">QM</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			
			<!-- product item -->
			<div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- product photo -->
						<img class="img-responsive" src="images/product/p-1.jpg" alt="Meghna">
						<!-- /product photo -->
					</div>
					
					<!-- product description -->
					<div class="member-meta">
						<h4>EMAS FIZIKAL</h4>
						<p>- Emas 999 atau dikenali sebagai Emas 24 Karat</p>
						<p>- Belian online & ambil di cawangan Ar Rahnu TEKUN terpilih / Cawangan BRINKS seluruh dunia</p>
						<p>- Penghantaran ke seluruh dunia</p>
						<p>- Jaminan belian semula</p>
						<p>- 100% kelulusan dari LBMA</p>
					</div>
					<!-- /product description -->
				   
               </div>
            </div>
			<!-- end product -->
			
			<!-- product item -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- product photo -->
						<img class="img-responsive" src="images/product/p-2.jpg" alt="Meghna">
						<!-- /product photo -->
					</div>
					
					<!-- product description -->
					<div class="member-meta">
						<h4>GOLD STORAGE ACCOUNT (GSA)</h4>
						<p>- GSA adalah Akaun Simpanan Emas peribadi sama seperti akaun bank</p>
						<p>- Modal serendah RM 10</p>
						<p>- Transaksi menggunakan App QMGold @ Web QM</p>
						<p>- Boleh ditukar kepada tunai @ Emas Fizikal pada bila-bila masa</p>
						<p>- Tiada upah simpan</p>
						<p>- Spread 7%</p>
					</div>
					<!-- /product description -->
				</div>
            </div>
			<!-- end product -->
			
			<!-- product item -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- product photo -->
						<img class="img-responsive" src="images/product/p-3.jpg" alt="Meghna">
						<!-- /product photo -->
					</div>
					
					<!-- product description -->
					<div class="member-meta">
						<h4>GOLD CONVERT ACCOUNT (GCA)</h4>
						<p>- Akaun pajakan digital Ar-rahnu</p>
						<p>- Boleh pajak maksima 85% daripada emas GSA</p>
						<p>- Pajakan anda dapat tunai terus ke akaun bank dan gram emas asal anda tetap ada di GSA.</p>
						<p>- Transaksi menggunakan App QMGold @ Web QM</p>
						<p>- Kelulusan segera</p>
						<p>- Upah simpan 3.5% setahun.</p>
						<p>- Tiada tempoh maksima untuk pajakan</p>
					</div>
					<!-- /product description -->
               </div>
            </div>
			<!-- end product -->
			
			<!-- product item -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- product photo -->
						<img class="img-responsive" src="images/product/p-4.jpg" alt="Meghna">
						<!-- /product photo -->
					</div>
					
					<!-- product description -->
					<div class="member-meta">
						<h4>GOLD ASSET ENHANCE (GAE)</h4>
						<p>- Terdapat 2 pakej iaitu GAE10X & GAE5X</p>
						<p>- Pembiayaan Tawarruq 9x atau 4x dari QM mengikut pakej</p>
						<p>- Modal USD 250 (1 unit GAE10X) atau USD 25 (1 unit GAE5X)</p>
						<p>- Hanya ditawrkan oleh QM dan tiada di syarikat lain</p>
						<p>- Keuntungan daripada KENAIKAN HARGA EMAS DUNIA</p>
						<p>- 1% kenaikan memberi pulangan 10% (GAE10X) atau 5% (GAE5X)</p>
					</div>
					<!-- /product description -->
               </div>
            </div>
			<!-- end product -->
			
		</div>  	<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Testimonial
		=========================================== -->

<section id="testimonial" class="testimonial overly section bg-2">
	<div class="container">
		<div class="row">				
			<div class="col-lg-12">
				<!-- testimonial wrapper -->
				<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/bank/bank-muamalat.png" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Bank Muamalat</h3>
								<span>12 Julai 2017</span>
							</div>
							<div class="client-comment">
								<p>The Bank is an agent via The Perth Mint Australia’s authorized distributor, Quantum Metal Sdn Bhd for the supply of the fineness (99.99%) London Bullion Market Association (LBMA) accredited Gold bar. <br><br><a href="https://www.muamalat.com.my/wp-content/uploads/2019/02/170712-Muamalat_GOLD-i.pdf" target="_blank">Press Release Bank Muamalat</a>, Mukasurat 2</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/bank/affin.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Affin Bank</h3>
								<span>04 Mei 2020</span>
							</div>
							<div class="client-comment">
								<p>“Gold Supplier” means Quantum Metal Sdn. Bhd. or a reputable, certified and authorised gold supplier which shall be determined and notified by the Bank from time to time. <br><br><a href="http://58.26.229.150/getattachment/Investment/Affin-Emas-i/Affin-Emas-i_TnC_ENG_v2-(040520).pdf.aspx" target="_blank">AFFIN EMAS-i Terms &amp; Condition</a>, Mukasurat 1</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/bank/alliance.png" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Alliance Bank</h3>
								<span>7 Julai 2020</span>
							</div>
							<div class="client-comment">
								<p>e-Gold refers to the cash value in Malaysia Ringgit credited to the Gold Storage Account (“GSA”) by the appointed vendor Quantum Metal Sdn Bhd (“e-Gold Supplier”). <br><br><a href="https://www.alliancebank.com.my/Alliance/media/Documents/Promotion/Alliance-Bank-Gold-Everywhere-Campaign-TC.pdf" target="_blank">Alliance Bank Gold Everywhere Campaign</a>, Mukasurat 11</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
				
					<!-- testimonial single -->
					<div class="item text-center">
						
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/bank/al-rajhi.png" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->
						
						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Al - Rajhi Bank</h3>
								<span>13 April 2018</span>
							</div>
							<div class="client-comment">
								<p>“Congratulations to our new Business Partner Al Rajhi Bank Product Launching: Gold-i @ JW Marriott, Kuala Lumpur <br><br><a href="https://fb.watch/cwM4vI8f-R/" target="_blank">Al - Rajhi Bank Gold-i Launching</a></p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->
					
				</div>		<!-- end testimonial wrapper -->
			</div> 		<!-- end col lg 12 -->
		</div>	    <!-- End row -->
	</div>       <!-- End container -->
</section>    <!-- End Section -->

<section class="section about-2 padding-0 bg-dark" id="dagang">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 padding-0 ">
				<img class="img-responsive" src="images/backgrounds/trade.jpeg" alt="">
			</div>
			<div class="col-md-6">
				<div class="content-block">
					<h2>Peluang Berdagang Emas Menerusi QM.</h2>
					<p>Gandakan pelaburan atau berdagang emas melalui Quantum Metal. Harga emas akan ada naik dan turun dan bergerak setiap saat. Ahli TEAM kami menggunakan ilmu perdagangan komoditi atau "COMODITY TRADING" manerusi QM Platform.</p>
					<p>QM satu-satunya platform yang menyediakan produk bagi anda menggandakan emas sehingga 10x menerusi Gold Asset Enhance (GAE). GAE merupakan Produk Terbaik QM yang Menggunakan instrumen kewangan, konsep Tawarruq. Modal hanya 1 gram tetapi anda mendapat nilai 10 gram. Keuntungan emas dikira dari nilai X10 dari modal emas anda.</p>
					<p>Mengikut kemampuan anda, QM menyediakan 2 jenis produk dibawah Gold Asset Enhance (GAE) iaitu GAE5X dan GAE10X.</p>
					<div class="row">
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-ion-ios-bolt-outline"></i>	
								</div>
								<div class="media-body">
									<h4 class="media-heading">GAE5X </h4>
									<p>Menerusi GAE5X, anda dapat menggandakan modal menjadi 5 kali ganda, dengan modal 10 gram anda dapat pembiayaan 50 gram</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-ion-ios-bolt"></i>	
								</div>
								<div class="media-body">
									<h4 class="media-heading">GAE10X</h4>
									<p>Menerusi GAE10X, anda dapat menggandakan modal menjadi 10 kali ganda, dengan modal 10 gram anda dapat pembiayaan 100 gram</p>
								</div>
							</div>
						</div>
					</div>
						<p><br><br></p>
						<a href="<?php echo $qm_link; ?>" target="_blank" class="btn btn-main">Buka akaun QM</a>
				</div>
			</div>
		</div>
	</div>
</section>
	

<!-- Start Team Skills
		=========================================== -->
		
		<section class="parallax-section section section-bg overly" id="simpan">
			<div class="container">
				<div class="row" >
					<!-- section title -->
					<div class="col-md-12">
						<div class="title text-center">
							<h2>Simpanan <span class="color">Emas</span></h2>
							<div class="border"></div>
						</div>
					</div>
					<!-- /section title -->
				</div>  		<!-- End row -->
				<div class="row">
					<div class="col-md-6">
						<h2>Beli dan simpan emas dengan harga modal 6X lebih murah melalui QM.</h2>
							<p>Nampak macam mustahil, tapi itulah yang kami praktikkan. Memiliki 10 Kilogram emas dalam masa 10 tahun bukan lagi perkara mustahil jika anda menggunakan modal 6X lebih rendah dari sekarang.</p>
							<img class="img-responsive" src="images/myr-gold-price.png" alt="">
					</div>
					<div class="col-md-6">
						<ul class="skill-bar">
							<li>
								<p><span>2001 - </span> RM 30 / per gram</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:20%">
									</div>
								</div>
							</li>
							<li>
								<p><span>2011-</span> RM 160 / per gram</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:40%">
									</div>
								</div>
							</li>
							<li>
								<p><span>2021-</span> RM 230 / per gram</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:60%">
									</div>
								</div>
							</li>
							<li>
								<p><span>2031-</span> Anda rasa?</p>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70"
									aria-valuemin="0" aria-valuemax="100" style="width:85%">
									</div>
								</div>
							</li>
							<br>
							<div class="form-group">
								<label>Modal (RM) </label>
								<input type="text" placeholder="Masukkan Modal Anda" class="form-control" name="modal" id="modal">
							</div>
							<div class="form-group">
								<label>Nilai Emas (RM) </label>
								<input type="text" placeholder="Jumlah Nilai Semasa Emas Anda" class="form-control" name="nilai" id="nilai">
							</div>
							<div class="form-group">
								<label>Penjimatan (RM) </label>
								<input type="text" placeholder="Penjimatan" class="form-control" name="penjimatan" id="penjimatan">
							</div>
							<li>
								<p>&nbsp;</p>
								<a href="<?php echo $qm_link; ?>" target="_blank" class="btn btn-main">Buka akaun QM</a>
							</li>
						</ul>
					</div>
				</div>
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!--
Start Counter Section
==================================== -->
		
<section id="counter" class="parallax-section bg-1 section overly">
	<div class="container">
		<div class="row">
		
			<!-- first count item -->
			<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
				<div class="counters-item">
					<img width="85%" src="images/logo-isra.png">
					<h3>PERUNDING SYARI'AH UNTUK PRODUK QUANTUM METAL</h3>
				</div>
			</div>
			<!-- end first count item -->
		
			<!-- second count item -->
			<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="counters-item">
					<img width="85%" src="images/logo-aaoifi.png">
					<h3><br>PIAWAI SYARIAH UNTUK QUANTUM METAL</h3>
				</div>
			</div>
			<!-- end second count item -->
		
			<!-- third count item -->
			<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="counters-item">
					<img width="85%" src="images/logo-suq.jpg">
					<h3>PENGURUSAN KECAIRAN DAN PEMBIAYAAN ISLAM OLEH INSTITUSI-INSTITUSI KEWANGAN ISLAM</h3>
					
				</div>
			</div>
			<!-- end third count item -->
			
			<!-- fourth count item -->
			<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="counters-item">
					<img width="85%" height="100%" src="images/logo-wgc.png">
					<h3>QM BERDAFTAR DENGAN MAJLIS EMAS DUNIA</h3>
				</div>
			</div>
			<!-- end fourth count item -->
			
			<!-- fifth count item -->
			<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
				<div class="counters-item kill-margin-bottom">
					<img width="85%" height="100%" src="images/logo-arrahnu.png">
					<h3><br>EMAS FIZIKAL YANG DIBELI MELALUI QM BOLEH DIAMBIL DI CAWANGAN AR RAHNU TEKUN TERPILIH SELURUH MALAYSIA ATAU DIHANTAR TERUS KE RUMAH ANDA</h3>
				</div>
			</div>
			<!-- end fifth count item -->
			
		</div> 		<!-- end row -->
	</div>   	<!-- end container -->
</section>   <!-- end section -->

<!-- Start Benefit Section =========================================== -->
		
<section id="benefit" class="section">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="title text-center wow fadeInDown">
				<h2>Kelebihan Bersama <span class="color">MIT Team</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->
			<div class="clearfix">
				<div class="col-md-12 text-center">
					<h3>MIT TEAM adalah kumpulan dibawah rangkaian #CFGOLD yang dibimbing oleh Coach Fadzil, Pengasas Brainy Bunch dan Malakat Mall, satu rangkain terbesar yang bersama Quantum Metal. Matlamat kumpulan adalah untuk membimbing, mendidik dan membantu masyarakat menyimpan Emas.</h3>
					<p>&nbsp;</p>
				</div>
				<!-- single benefit post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="images/team/mit-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						<div class="content">
							<h3><a href="">Support WhatsApp / Telegram</a></h3>
							<p style="color: #FFF;">Kami menyediakan group support menggunakan platform WhatsApp & Telegram bagi semua ahli yang berdaftar dibawah kumpulan. Group ini adalah bagi ahli membantu sesama sendiri dibawah bimbingan mereka yang sudah berjaya.</p>
						</div>
					</div>						
				</article>
				<!-- /single benefit post -->
				
				<!-- single benefit post -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
					<div class="post-block">
						<div id="gallery-post" class="media-wrapper">
							<div class="item">
								<img src="images/team/mit-2.jpg" alt="benefit post" class="img-responsive">
							</div>
							<!-- <div class="item">
								<img src="images/blog/blog-post-3.jpg" alt="blog post" class="img-responsive">
							</div>
							<div class="item">
								<img src="images/blog/blog-post-2.jpg" alt="blog post | Meghna" class="img-responsive">
							</div> -->
						</div>
						
						<div class="content">
							<h3><a href="">Personal / Group Coaching</a></h3>
							<p style="color: #FFF;">Personal / group coaching disediakan bagi mereka yang memerlukan bimbingan, tiada ahli yang akan ditinggalkan dan akan dibimbing oleh mereka yang bergelar "Merchant", "Dealer Developer" dan "Dealer" dibawah Quantum Metal.</p>
						</div>
					</div>						
				</article>
				<!-- end single benefit post -->
				
				<!-- single benefit post -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="images/team/mit-4.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="">Formula Terbukti Berjaya</a></h3>
							<p style="color: #FFF;">Apa jua matlamat anda, kami kongsikan formula terbaik untuk berjaya dengan QM. Berminat untuk tahu Formula "Magic 6.67", "Trader Rule5", "Beku sebelum Hangus" dan "Dealer in 5 days, DD in 50 days" akan kami kongsikan.</p>
						</div>
					</div>						
				</article>
				<!-- end single benefit post -->
				<div class="col-md-12 text-center">
				</div>
			</div>
			<div class="all-post text-center">
					<h4>Setiap ahli yang mendaftar QM dibawah MIT Team akan mendapat page ini dengan link sendiri seperti www.mitgold.com/[NAMA ANDA] bagi membantu anda dalam promosi dan berkongsi kebaikan QM dengan hanya 2 langkah mudah.</h4>
					<h4>&nbsp;</h4>
				<a href="<?php echo $qm_link; ?>" target="_blank" class="btn btn-main">(1) Buka akaun QM</a>
				<a style="background-color: #4FCE5D" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link; ?>&text=Saya berminat QM." target="_blank" class="btn btn-main">(2) WhatsApp Promoter Anda</a>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->
	

<!-- end Contact Area
		========================================== -->

<footer id="footer" class="bg-one">
	<div class="container">
		<div class="row wow fadeInUp" data-wow-duration="500ms">
			<div class="col-lg-12">
				<div class="border"></div>

				<!-- Footer Social Links 
				<div class="social-icon">
					<ul class="list-inline">
						<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
					</ul>
				</div>
				/. End Footer Social Links -->

				<!-- copyright -->
				<div class="copyright text-center">
					<a href="index.html">
						<img width="60%" src="images/mit-logo.png" alt="MIT" />
					</a>
					<br />

					<p>Maximum Impact Team - MIT . Copyright
						&copy; <script>
							document.write(new Date().getFullYear())
						</script>. All Rights Reserved.</p>
				</div>
				<!-- /copyright -->

			</div> <!-- end col lg 12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</footer> <!-- end footer -->
	    
		
		
		
		
		
		
		


		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="plugins/filterzr/jquery.filterizr.min.js"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<!-- Google Map API -->
		<!-- <script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> -->
		<!-- Sticky Nav -->
		<script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="js/script.js"></script>
		
    </body>
</html>