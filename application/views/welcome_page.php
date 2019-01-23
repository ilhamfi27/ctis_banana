<div class="row">
	<?php foreach($kecamatan as $kec): ?>
		<div class="col-md-3">
			<a href="<?php echo site_url("districts/detail"); ?>">
			<div class="top-viewed-district">
				<div class="city-temperature-box">
				<span class="city"><?php echo $kec->name; ?></span>
					<span class="city-temperature">21<sup>&deg;</sup> C</span>
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
	<?php endforeach; ?>
</div>
