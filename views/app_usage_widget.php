<div class="col-md-4">
		<div class="card"  id="appusage-widget">
            <div class="card-header" data-container="body" data-i18n="[title]appusage.tooltip">
                <i class="fa fa-rocket"></i>
                <span data-i18n="appusage.title"></span>
                <a href="/show/listing/appusage/appusage/" class="pull-right"><i class="fa fa-list"></i></a>
            </div>
    <div class="list-group scroll-box"></div>
	</div><!-- /panel -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

	var box = $('#appusage-widget div.scroll-box');

	$.getJSON( appUrl + '/module/appusage/get_applaunch', function( data ) {

		box.empty();
		if(data.length){
			$.each(data, function(i,d){
				var badge = '<span class="badge pull-right">'+d.count+'</span>';
                box.append('<a href="'+appUrl+'/show/listing/appusage/appusage/#'+d.app_name+'" class="list-group-item">'+d.app_name+badge+'</a>')
			});
		}
		else{
			box.append('<span class="list-group-item">'+i18n.t('no_data')+'</span>');
		}
	});
});
</script>
