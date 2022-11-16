<?php

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$path = array_pop($uriSegments);

$user_reff = htmlentities(filter_var($path, FILTER_SANITIZE_STRING), ENT_QUOTES, 'UTF-8');

switch ($user_reff) {
	case 'izham':
		$whatsapp_link = '+60196418293';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=s7CNXfTIqp5vdz3WDxkrY0GCBaIeScSzJ9gps88xWgoilLDjcMTuz%2fYXqtBP6l5K';
		break;
	case 'irwan':
		$whatsapp_link = '+60122557193';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=XKFBo6RPgTXc977Er5vaiHshSZ1OkbrdHGzIUX1k6PNfw%2fFsuOFmnNG7RbujG19x';
		break;
	case 'irwans':
		$whatsapp_link = '+60122557193';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=XKFBo6RPgTXc977Er5vaiHshSZ1OkbrdHGzIUX1k6PNfw%2fFsuOFmnNG7RbujG19x';
		header("Location: http://wa.link/xoqm38");
		break;
	case 'ami':
		$whatsapp_link = '+60176823395';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=vnjWHayrUai0vsuq3Yjf4a8LfmWHqT14GjfEza9r6%2b4U8J2ay4cdit44upJH%2blSf';
		break;
	case 'eika':
		$whatsapp_link = '+60166919782';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=%2b2UM0hyUhHLtueso%2fn9lFWNHfLXbdZadzOIZdY%2fypyoJrqEhwCarzFT9g19JaTZpMTQwYKibS6LCDf%2bYc1Ybug%3d%3d';
		break;
	case 'faridah':
		$whatsapp_link = '+60127652183';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=OyLIEQzQtFCv5nf5EPYTgJcCeck4Exk6dc5PLSzd74wce3eFAHwrr5chk1uAhuolblrzreFhThWnk0zZEZluGQ%3d%3d';
		break;
	case 'nazirul':
		$whatsapp_link = '+60167905394';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=b%2bhGk5Kpo7ovCWh2DN%2br2qZyGoHzLoQ%2fueHvPimfp%2b%2fJPqTTpE4ItPD0b0Qzqv3w';
		break;
	case 'fazli':
		$whatsapp_link = '+60139324183';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=4ghFZMPa0Ou%2fSA91WgWttSmH1p1aMYnNuMBYc4w%2bShgusg2MCJfTBy9bJjVn5AVO';
		break;
	case 'aisyah':
		$whatsapp_link = '+60189544023';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=BySuX9Er2h%2f6FqPUbF2Y8Dck25%2brJZSJ5%2f44IKBCElcNoknNoCkBSRifPaULRnr6';
		break;
	
	default:
		$whatsapp_link = '+60122557193';
		$qm_link = 'https://qms.quantummetal.com/Customer/Register?_email=XKFBo6RPgTXc977Er5vaiHshSZ1OkbrdHGzIUX1k6PNfw%2fFsuOFmnNG7RbujG19x';
		break;
}


/// ---------- TRACK VISITOR LIINK ----------------------
$stmt = $dbh->prepare("INSERT INTO mit_agg_visits (visit_link) VALUES (?) ON DUPLICATE KEY UPDATE visit_count = visit_count + 1;");
$stmt->bindParam(1, parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$stmt->execute();
