	$.ajax({    //แสดงชื่อจังหวัดใน DB
		
		url:"data/province_ch_data.php",
		dataType: "json",
		data:{show_province:'show_province'}, 
		success:function(data){
		//	console.log(data);
			$.each(data, function( index, value ) {
				  $("#province_id").append("<option value='"+ value.id +"'> " + value.name + "</option>");
			});
		}
	});
	
	$.ajax({
	   url:"data/province_ch_data.php",
	   dataType: "json",
	   data:{person_id:person_id}, 
	   success:function(data){
		   console.log(data);
			 //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
		//	 $("#amphur_id").text("");
		//	 console.log(data);
		   $.each(data, function( index, value ) {
				 $("#amphur_id").append("<option value='"+ value.id +"'> " + value.name + "</option>");
		   });
	   }
   });

   
	$.ajax({
	   url:"data/province_ch_data.php",
	   dataType: "json",
	   data:{person_id_tumbon:person_id_tumbon}, 
	   success:function(data){
		 //  console.log(data);
			 //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
			// $("#tumbon_id").text("");
		//	 console.log(data);
		   $.each(data, function( index, value ) {
				 $("#tumbon_id").append("<option value='"+ value.id +"'> " + value.name + "</option>");
		   });
	   }
   });
//สิ้นสุด document ready
				 //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
				 $("#province_id").change(function(){
					
					$("#tumbon_id").val("");
					$("#amphur_id").val("");
				//กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
			var province_id = $(this).val();
  
				$.ajax({
				   url:"data/province_ch_data.php",
				   dataType: "json",
				   data:{province_id:province_id}, 
				   success:function(data){
						 //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
						 $("#amphur_id").text("");
						
					//	 console.log(data);
					   $.each(data, function( index, value ) {
							 $("#amphur_id").append("<option value='"+ value.id +"'> " + value.name + "</option>");
					   });
				   }
			   });
			});
		   $("#amphur_id").change(function(){
var amphur_id = $(this).val();

				$.ajax({
				   url:"data/province_ch_data.php",
				   dataType: "json",
				   data:{amphur_id:amphur_id}, 
				   success:function(data){
						 //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
						 $("#tumbon_id").text("");													
					   $.each(data, function( index, value ) {
							 $("#tumbon_id").append("<option value='"+ value.id +"'> " + value.name + "</option>");
					   });
				   }
			   });
});