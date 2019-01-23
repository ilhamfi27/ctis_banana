<div class="row">
	<?php 
	$row_data = 1;
	foreach($daerah as $d):
		if ($row_data > 4 ) { break; }
	?>
	<div class="col-md-3">
		<a href="<?php echo site_url("districts/detail"); ?>">
			<div class="top-viewed-district">
				<div class="city-temperature-box">
				<span class="city"><?php echo $d['lokasi']; ?></span>
					<span class="city-temperature"><?php echo $d['temp']; ?><sup>&deg;</sup> C</span>
				</div>
				<div class="weather-condition-box">
					<span class="wi wi-day-sunny weather-flaticon region-icon"></span>
					<span class="weather-status">Sunny</span>
				</div>
				<div class="flood-status-box">
					<span class="flood-title">Banjir</span>
					<span class="flood-status">5%</span>
				</div>
			</div>
		</a>
	</div>
	<?php
		$row_data++;
	endforeach;
	?>
</div>
