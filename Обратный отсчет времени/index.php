<script type="text/javascript">
	
	var counters = {дата окончания(timestamp)};
		var counters_cur = <?=strtotime(date('d-m-Y H:i:s'));?>;

	var s = counters - counters_cur;

	var 
      
        millisecToTimeStruct = function (ms) {
            
            var seconds = Math.floor((ms / 1000) % 60);
		  var minutes = Math.floor((ms / 1000 / 60) % 60);
		  var hours = Math.floor((ms / (1000 * 60 * 60)) % 24);
		  var days = Math.floor(ms / (1000 * 60 * 60 * 24));

		  if ( seconds < 10 ) { seconds = '0' + seconds; }
		  if ( minutes < 10 ) { minutes = '0' + minutes; }
		  if ( hours < 10 ) { hours = '0' + hours; }
		  //if ( days < 10 ) { days = '0' + days; }


            return {d: days, h: hours, m: minutes, s: seconds};
        }

	$(document).ready(function() {

	

		var timeStruct = millisecToTimeStruct(s * 1000);

		// вывод:
		$('.counters').html(timeStruct.d + ' д ' + timeStruct.h + ' ч ' + timeStruct.m + ' мин ' + timeStruct.s + ' сек');

	})	

	function getTime() {

		s = s  - 1;

		var timeStruct = millisecToTimeStruct(s * 1000);

		// вывод:
		$('.counters').html(timeStruct.d + ' д ' + timeStruct.h + ' ч ' + timeStruct.m + ' мин ' + timeStruct.s + ' сек');

	}

	window.setInterval(getTime, 1000);

</script>

<span class="counters"></span>