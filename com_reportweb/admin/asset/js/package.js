jQuery(document).ready(function(e) {
	package_detail_sub();
	jQuery("#jform_package_detail_id").change(function(){
		package_detail_sub();
	})
});

function package_detail_sub(){
	var package_detail_id = jQuery("#jform_package_detail_id").val()
	jQuery.post('components/com_reportweb/asset/ajax/package.php',{package:package_detail_id})
	.done(function(msg){
		var data = jQuery.parseJSON(msg);
		jQuery("#jform_package_detail_sub_id").empty();
		jQuery("#jform_package_detail_sub_id").append('<option value="0">กรุณาเลือก</option>');
		jQuery.each(data.row,function(key, val){
			jQuery("#jform_package_detail_sub_id").append('<option value="'+val.id+'">'+val.name+'</option>');
		})
	});
}