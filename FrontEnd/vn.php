<html>
<body>

<div id=searchTrainBetweenStation class="train-search-tab-pane active">
<form id=frmTrainsBetweenStation class="form form-default" method=post action="/travel/indian-railway/search.php" target=_top>
<div class=row>
<div class="form-group col-tablet-4 col-phablet-6">
<label class=control-label for=fin_generate_type>Origin Station</label>
<div class=controls>
<div class="input-group "><div class=input-group-prepend><span class=input-group-text> <i aria-hidden=true class="icon icon-train">&nbsp;</i></span></div><input type=text name=origin id=txtSrcStation class="form-control ac-station" data-suggest="{&quot;url&quot;:&quot;\/travel\/indian-railway\/search.json?mode=stations&amp;query=&quot;,&quot;template&quot;:&quot;tpl-station-search&quot;,&quot;station_code&quot;:&quot;&quot;,&quot;id&quot;:&quot;station_origin&quot;}" placeholder="From Station" value="">
</div>
<input type=hidden id=station_origin_pathname name=station_origin_pathname value="">
</div>
</div>
<div class="form-group col-tablet-4 col-phablet-6">
<label class=control-label for=fin_generate_type>Destination Station</label>
<div class=controls>
<div class="input-group "><div class=input-group-prepend><span class=input-group-text> <i aria-hidden=true class="icon icon-train">&nbsp;</i></span></div><input type=text name=destination id=txtDestStation class="form-control ac-station" data-suggest="{&quot;url&quot;:&quot;\/travel\/indian-railway\/search.json?mode=stations&amp;query=&quot;,&quot;template&quot;:&quot;tpl-station-search&quot;,&quot;station_code&quot;:&quot;&quot;,&quot;id&quot;:&quot;station_destination&quot;}" placeholder="To Station" value="">
</div>
<input type=hidden id=station_destination_pathname name=station_destination_pathname value="">
</div>
</div>
<div class="form-group col-tablet-4 col-phablet-12">
<label class="control-label dummy-label">&nbsp;</label>
<div class=controls>
<input type=hidden name=mode value=trains_between_stations>
<button class="btn btn-theme btn-block">Find Trains &rarr;</button>
</div>
</div>
</div>
</form>
</body>
</html>