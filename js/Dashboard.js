$(window).bind("load", function() {
	for(i = 0; i < 5; i++) {
		let Name = userData.subjects[i].name;
		let IsertDate = userData.subjects[i].name;
		let time = userData.subjects[i].time;
		if(time == null) time = 0;
		let htmlCard = ' <div class="col-md-3 statsCard mb-5">' +
							'<div class="statsInside">' +
								'<h3 id="title">' + Name + '</h3>' +
								'<span class="startDate d-block">' +
									'Start: ' + IsertDate +
								'</span>' +
								'<span class="currentTimeSpent d-block">' +
									'August: ' + time + ' ' +
									'<span>hours/week</span>' +
								'</span>' +
								'<span class="currentTimeSpent d-block">' +
									'Average: 1 ' +
									'<span>hours/week</span>' +
								'</span>' +
								'<span class="currentTimeSpent d-block">' +
									'Total: 10 ' +
									'<span>hours</span>' +
								'</span>' +
								'<div class="text-center">' +
									'<span class="d-block" id="countBtn" onclick="startCounting()">' +
										'Start Counting' +
									'</span>' +
								'</div>' +
							'</div>' +
						'</div>';
		$('#cards').append(htmlCard);
	}
});