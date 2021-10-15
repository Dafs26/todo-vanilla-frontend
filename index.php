<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frontend</title>
</head>
<body>
	<button onclick=retrieve()>press</button>
	<ul id='list'></ul>
</body>
</html>

<script>
	async function retrieve(){
		const response = await fetch('https://to-do-back-end.herokuapp.com/api/todos/') 
		const data = await response.json();
		const list = document.getElementById('list');
		for (let todo in data){
			for(let i in data[todo]){
				const li = document.createElement('li');
				li.innerHTML = i+': '+data[todo][i];
				list.appendChild(li);
			}
		}
	}
</script>