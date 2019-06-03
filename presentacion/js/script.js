//Validacion de un usario
function myfunction()
{
	var user = document.getElementById('user').value;
	var user_input = document.getElementById('user').value;

	var pass = document.getElementById('pass').value;
	var pass_input = document.getElementById('pass').value;

	if (user_input == '') 
	{ alert("fill user input :(");}

	else
	{
		if (pass_input == '')
		{ alert("fill password input :(");}
		else
		{
			//Si los datos en el imput coiciden::
			if ((user == 'root' && pass == "root_101001"))
			{ window.location.href="loader.html";}

			//O si los datos son incorrectos
			else
			{	document.getElementById('err_no').style.display = "block";
				setTimeout( function() {window.location.href='index.html'},800);}
		}
	}
}


//funcion del texto dinamico
var br = "<br><br>";
var msg = "When your dreams come out alive you're unstoppable";

var body = document.getElementById('bdy');
setInterval(add,40);
var i = 0;

function add()
{
	if(msg[i] == "Z"){
		bod.innerHTML += br + "....";
		i++;
	}

	if(i < msg.length){
		bdy.innerHTML+=msg[i];
		i++
	}
}

