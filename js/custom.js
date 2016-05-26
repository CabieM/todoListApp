$(document).ready(function(){

	$(#taskInput).focus();
	//READY!
	console.log("Ready!");

	var task = "";

	$("#actionBtn").click(function(){
		console.log( "Click test : Success" );

		task = $("#taskInput").val();
		//pre clean up
		alert(task);
		//Test CLEAN with <script>alert()</script>
		task = cleanUp(task);
		//post clean up
		alert(task);

		//When the data is validated and ready to be sent
		$("#todoForm").submit();


	});
});