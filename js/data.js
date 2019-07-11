
function getData(){

	var dropdown_data =  $('#data_dropdown option:selected');
	var dropdown_data_chart = $('#data_dropdown_chart option:selected');
	// console.log(dropdown_data_chart[0].value);



	// console.log('h')
	var xhr;
	if(xhr!=undefined && xhr){
		xhr.abort();
	}

	xhr = $.ajax({
		url: "http://localhost/Coba/data.php",
		type:"POST",
		data:{
			type_dataset:dropdown_data[0].value
		},
		beforeSend: function(){
			console.log('loading')
		},
		error:function(){
			console.log('error')

		},
		complete: function(){
			console.log('complete')

		},
		success: function(res){ 

			var data =  JSON.parse(res)
			console.log(data)

			var canvas = "<canvas id='myChart'></canvas>"
			
			

			$("#myChart").remove()
			$("#container_canvas").append(canvas)

			var title = "Jumlah siswa per Fakultas"

			// console.log(data.teknik.length)

			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: dropdown_data_chart[0].value,
				data: {
					labels: data.label,
					datasets: [{
						label: "",
						data: data.data,
						backgroundColor: [
						'rgba(255, 99, 132)',
						'rgba(54, 162, 235)',
						'rgba(255, 206, 86)',
						'rgba(75, 192, 192)'
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)'
						],
						borderWidth: 0
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					},
					title : {
						text: title,
						display: true
					}
				}
			});

		}})
}


$(function(){
	console.log("akslj")

	// getChart()
	getData()
	// handleDropdown()
	// getPie()
	console.log('end')
})