<div class = "container bloco roboto-bold" id="tabelaHorarios">
	<?php
	$tableValues = getTableValues();
	$periodos = array("MANHÃ", "TARDE", "NOITE", "EAD");
	$dias = array("", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	$i = 0;
	//linhas
	foreach ($tableValues as $row) {
		if ($row[0] === 'HORÁRIOS') {
			$color = "#0e85ad";
		} else if (in_array($row[0], $periodos)) {
			$color = "#3e9dbd";
			$i = 1;
		} else if ($i%2 === 0) {
			$color = "#6eb5cd";
			$time = explode(" - ", $row[0]);
		} else {
			$color = "#9ecede";
			$time = explode(" - ", $row[0]);
		}

		echo "<div class='row text-center align-items-center' style='background-color: $color;'>";

		//colunas
		for ($j = 0; $j < 8; $j++) {
			if (isset($row[$j])) {
				$value = $row[$j];
			} else {
				$value = "";	
			}

			if ($row[0] === 'HORÁRIOS' && $value === "") {

			} else { 
				if (date("l") === $dias[$j] && isset($time) && $time[0] != "-" && isNow($time[0], $time[1])) {
					echo "<div id='running' class='col' style='color: red'>$value</div>";
				} else {
					echo "<div class='col'>$value</div>";
				}
			}
		}
		echo "</div>";
		$i++;
	} //fim da tabela
	?>
</div>
<script type="text/javascript">
	$running = document.getElementById('running');
	twinkle($running, 0);
</script>