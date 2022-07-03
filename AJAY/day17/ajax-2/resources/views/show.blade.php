<h1>
	AJAX
</h1>
<p id= "data"></p>
<button onclick="ajaxCall()"> click to ajax call</button>
<script>
	function ajaxCall() {
		alert(111);
		var req = new XMLHttpRequest();
		req.open("GET","/ajax-Call",true);
		req.send();
		req.onreadystatechange = function(){
			if (req.onreadystatechange = 4 && req.status ==200 ) {
				var data = JSON.parse(req.responseText);
				console.log(data);
			}
		}
	}
</script>