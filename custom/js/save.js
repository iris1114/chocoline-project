var saveButton = document.getElementById('save');

saveButton.addEventListener('click', saveImage);

function saveImage(){
	var data = x.toDataURL();
	
	var request = new XMLHttpRequest();
	
	request.onreadystatechange=function(){
		if(request.readyState == 4 && request.status == 200){
			//do our stuff
			var response = request.responseText;
			//console.log(response);
			//window.open('download.php?file='+response, '_blank','location=0,menubar=0');
			document.getElementById('downloadframe').src = 'download.php?file='+response;
		}
	}
	request.open('POST', 'save.php', true);
	request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	//www.example.com/file.php?name=john
	request.sent('img='+ data);
	
	//window.open(data, '_blank', 'location=0, menubar=0');
}