<div class="row">
    <div class="col-md-12">
        
        <div style="text-align:center;margin:20px;">
            <span class="title-form">Lapor - <strong class="report-status"><?php echo ucwords(implode(" ",explode("-", $status))); ?></strong></span>
        </div>

        <form action="<?php echo site_url("report/send_report"); ?>" method="post" class="form-horizontal white-label">
            <input type="hidden" name="kategori_report" value="<?php echo $status; ?>">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="" class="col-md-3 control-label">Lokasi/Daerah Terdekat</label>
                    <div class="col-md-9">
                        <select name="daerah" class="form-control">
                            <?php foreach($districts as $district): ?>
                                <option value="<?php echo $district->ID; ?>"><?php echo $district->lokasi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-md-3 control-label">Jam</label>
                    <div class="col-md-9">
                        <div class='input-group date' id='report-hour-picker-js'>
                            <input type='text' name="jam_report" class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-md-3 control-label">Deskripsi</label>
                    <div class="col-md-9">
                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-default">Kirim!</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>