<?php
	$salconv = floatval ($_GET['salconv']); 
	$sir1 = floatval ($_GET['sir1']);
	$sir2 = floatval ($_GET['sir2']);
	$sir4 = floatval ($_GET['sir4']);
	$sir5 = floatval ($_GET['sir5']);
	$sir6 = floatval ($_GET['sir6']);
    $extra = $salconv + $sir1 + $sir2 +$sir4 + $sir5 + $sir6;
    $extra = $extra * 2;
    $extra = $extra / 12;
	$cp1 = floatval ($_GET['cp1']);
    $cp2 = floatval ($_GET['cp2']);
	$cp3 = floatval ($_GET['cp3']);
    $cp4 = floatval ($_GET['cp4']);
	$cp5 = floatval ($_GET['cp5']);
    $cp6 = floatval ($_GET['cp6']);
    $cp7 = floatval ($_GET['cp7']);
	$turno = floatval ($_GET['turno']);
	$turno2 = floatval ($_GET['turno2']);
    $nocturnidad = floatval ($_GET['nocturnidad'])*8*5;
    $reten = floatval ($_GET['reten']);
    $amct = floatval ($_GET['amct']);
    $antig = floatval ($_GET['antig']);
 	$antig2 = floatval ($_GET['antig2']);
    $edad = $_GET['edad'];
    $irpf = floatval ($_GET['irpf']);
    $fija = floatval ($_GET['fija']);
    $fija2 = floatval ($_GET['fija2']);
    $fija3 = floatval ($_GET['fija3']);
    $sing = floatval ($_GET['sing']);
    $sing1 = floatval ($_GET['sing1']);
    $salariosingular = floatval ($_GET['salariosingular']);
    $cp10 = floatval ($_GET['cp10']);
    $cp11 = floatval ($_GET['cp11']);
    $cp15 = floatval ($_GET['cp15']);
    $cp16 = floatval ($_GET['cp16']);
    $indiv = floatval ($_GET['indiv']);
    $indiv2 = floatval ($_GET['indiv2']);
    $vinc = floatval ($_GET['vinc']);
    $anig3 = floatval ($_GET['anig3']);
    $anig6 = floatval ($_GET['anig6']);
    $anig4 = floatval ($_GET['anig4']);
    $anig5 = floatval ($_GET['anig5']);
    $anigfecsa = floatval ($_GET['anigfecsa']);
	$aniguadisa = floatval ($_GET['aniguadisa']);
	$anigheasa = floatval ($_GET['anigheasa']);
	$anighedatsa = floatval ($_GET['anighedatsa']);	
	$anigpysesa = floatval ($_GET['anigpysesa']);
	$retenlab4 = floatval ($_GET['retenlab4']);
	$retenfest = floatval ($_GET['retenfest']);
	$nocturnidad2 = floatval ($_GET['nocturnidad2']);
	$geo = floatval ($_GET['geo']);
	$ofv = floatval ($_GET['ofv']);
	$auxdec = floatval ($_GET['auxdec']);
	$auxdec2 = floatval ($_GET['auxdec2']);
	$auxdis = floatval ($_GET['auxdis']);
	$comp20 = floatval ($_GET['comp20']);
	$anigviesgo = floatval ($_GET['anigviesgo']);
	$anignansa = floatval ($_GET['anignansa']);
	$anigterbesa = floatval ($_GET['anigterbesa']);
    $anigter = floatval ($_GET['anigter']);
	$anigpaga = floatval ($_GET['anigpaga']);
	$retenlab = floatval ($_GET['retenlab']);
	$retenlab2 = floatval ($_GET['retenlab2']);
	$retenfest2 = floatval ($_GET['retenfest2']);
	$turnoab = floatval ($_GET['turnoab']);
	$turnoab2 = floatval ($_GET['turnoab2']);
	$turnodis = floatval ($_GET['turnodis']);
	$turnodis2 = floatval ($_GET['turnodis2']);
	$mantaspontes = floatval ($_GET['mantaspontes']);
	$ceutamelilla = floatval ($_GET['ceutamelilla']);
	$auxdis2 = floatval ($_GET['auxdis2']);
    $pension = floatval ($_GET['pension']);
    $coefred = $_GET['coefred'];
    $pension = floatval ($_GET['pension']);
    $espvida = floatval ($_GET['espvida']);
    $br = floatval ($_GET['br']);
    $cr = floatval ($_GET['cr']);

    $soluciona = $salconv + $sir1 + $sir2 +$sir4 +$sir5 +$sir6 + $cp1+ $cp2+ $cp3+ $cp4+ $cp5 + $cp6 + $cp7 + $turno + $turno2 + $nocturnidad + $antig + $antig2  + $reten + $amct + $fija + $fija2 + $fija3 + $sing + $sing1 + $salariosingular + $cp10 + $cp11 + $cp15 + $cp16 + $indiv + 
    $indiv2 + $vinc + $anig3 + $anig6 + $anig4 + $anig5 + $anigfecsa + $aniguadisa + $anigheasa +
	$anighedatsa + $anigpysesa + $retenlab4 + $retenfest + $nocturnidad2 + $geo + $ofv + 
	$auxdec + $auxdec2 + $auxdis +	$comp20 + $anigviesgo + $anignansa + $anigterbesa + $anigter +	$anigpaga +	$retenlab + $retenlab2 + $retenfest2 + $turnoab + $turnoab2 + $turnodis + $turnodis2 + 	$mantaspontes + $ceutamelilla + $auxdis2 + $extra;

	if($edad == "tramo1"){	
		$tramo = 0.60;
		$solucionb = $soluciona * $tramo;
		$irpf = 100 - $irpf;
		$solucion = $solucionb * $irpf / 100;
	}else if($edad == "tramo2"){
		$tramo = 0.70;
		$solucionb = $soluciona * $tramo;
		$irpf = 100 - $irpf;
		$solucion = $solucionb * $irpf / 100;
	}else if($edad == "tramo3"){
		$tramo = 0.75;
		$solucionb = $soluciona * $tramo;
		$irpf = 100 - $irpf;
		$solucion = $solucionb * $irpf / 100;
	}else if($edad == "tramo4"){
		$tramo = 0.80;
		$solucionb = $soluciona * $tramo;
		$irpf = 100 - $irpf;
		$solucion = $solucionb * $irpf / 100;
	}
$pen=0;
if($coefred == "cr1"){	
		$pen=16;
	}else if($coefred == "cr2"){
        $pen=15;
	}else if($coefred == "cr3"){
        $pen=14;
	}else if($coefred == "cr4"){
        $pen=13;
	}

$irpf = 100 - $irpf;
$tramo = $tramo * 100;

function truncar($numero, $digitos)
{
    $truncar = 10**$digitos;
    return intval($numero * $truncar) / $truncar;
}

$extra = truncar($extra,2);
$soluciona = truncar($soluciona,2);
$solucionb = truncar($solucionb,2);
$solucion = truncar($solucion,2);
echo "<html>";
echo "<body background='UGT-COLOR.png'>";
echo "<div><h1>CÁLCULO ORIENTATIVO APROXIMADO AL ACOGERSE AL AL AVS 2020-2024</h1></div>";
echo "<div><h4>(En ningún caso el siguiente resultado tiene validez vinculante, sino que es un cálculo meramente orientativo)</h4></div>";
echo "<fieldset>
		<legend><h2>Resultado</h2></legend>";
echo "<ul><li>Parte proporcional de las pagas extra prorrateadas a 12 mensualidades:" .$extra."€/mes. </li>";
echo "<li>Base Total sin aplicar el ".$tramo." % de reducción:"	.$soluciona."€/mes.</li>";
echo "<li>Base bruta en AVS, sin aplicar el ".$irpf."% de IRPF:"	.$solucionb."€/mes.</li></ul>";
echo "<h1>Salario neto aproximado en prejubilación:".$solucion."€/mes. </h1>";
echo "</fieldset>";
$mermabr = $br * $pen / 100;
$penreduc = $br - $mermabr;
$branual = $br * 12;
$anos = $espvida - 63;
$pensionmes = $pension / 12;//para calcular la pensión máxima mensual sin pagas extra
$pension12 = $pension / 14;//prorrateando las pagas extra a 12 pagas
$difpenreduc = $pensionmes * $cr /100;
$penreduc2 = $pensionmes - $difpenreduc;

if ($penreduc>$penreduc2){
	$merma = $pensionmes - $penreduc2;
}else{
	$merma = $pensionmes - $penreduc;	
}

$merma1 = $merma*12;
$mermames1 = $merma / 12;
$inc = 0;
$mermainc = $merma*12;
for ($i = 1; $i <= $anos; $i++) {
    $inc = $mermainc * 0.015;
	$mermainc = $mermainc + $inc;
}

$merma1 = $merma1 * $anos + $mermainc;

$penredmes = $penreduc;
$merma1 = truncar($merma1,2);
$merma = truncar($merma,2);
$pensionmes = truncar($pensionmes,2);
$penreduc = truncar($penreduc,2);
$penreduc2 = truncar($penreduc2,2);
$mermames1 = truncar($mermames1,2);
$branual = truncar($branual,2);

echo "<fieldset>
		<legend><h2>Mermas a liquidar en el AVS 2020-2024</h2></legend>";
echo "<ul><li>Base Reguladora: ".$br."€/mes</li>";
echo "<li>Aplicamos el Coeficiente Reductor por Ley del ".$pen."% por jubilación anticipada, quedando una pensión teórica de: ".$penreduc."€/mes</li>";
echo "<li>La pensión máxima actual es de: ".$pensionmes."€/mes</li>";
echo "<li>Límite Máximo 2020 (0,5/trimestre), penaliza un ".$cr."% por 2 años sin cotizar al máximo, quedando una pensión teórica de: ".$penreduc2."€/mes</li>";
echo "<li>Por tanto existe una merma mensual de: ".$merma."€/mes</li>";
echo "<h3>La merma de pensión por jubilación anticipada es un pago único de aprox.: ".$merma1."€ (Crecimiento de un 1,5% anual)</h3>";

$pago = $soluciona * 0.80;
$solucionx = $pago * 12;
$solucionx = $solucionx - $penreduc2;

if ($penreduc>$penreduc2){
	$merma2 = $pago - $penreduc2;
}else{
	$merma2 = $pago - $penreduc;
}



$merma2 = truncar($merma2,2);

echo "<h3>La merma de compensación hasta la fecha de jubilación ordinaria es un pago mensual bruto de aprox.: ".$merma2."€</h3>";
 echo "</fieldset>";   
echo "</body>";
echo "</html>";
?>