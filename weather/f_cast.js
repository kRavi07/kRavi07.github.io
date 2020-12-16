const proxyurl = "https://cors-anywhere.herokuapp.com/";
fetch("http://ipwhois.app/json/" )
.then(res=>res.json())
.then(function(data){
	console.log(data)
  var lat=data.latitude;
  var lon=data.longitude;
  console.log(lat+" "+lon);
  fetch("https://api.openweathermap.org/data/2.5/onecall?lat="+lat+"&lon="+lon+"&units=metric&exclude=hourly,minutely&appid=00169fed074b498a38c648db4138195c")
.then(res =>res.json())
.then(function(data)
	{
		console.log(data);
		console.log(data.daily[1].dt);
		
		
		console.log(data.daily.length);
		var img="";

		console.log(data.daily[1].weather[0].icon);
		temp="";
		for(var i=1;i<5;i++)
		{
			if(data.daily[i].weather[0].description=="clear sky")
		{
			img="animated/day.svg";
		}
		else if(data.daily[i].weather[0].icon=="few clouds")
		{
			img="animated/cloud-day-1.svg";
		}
		else if(data.daily[i].weather[0].icon=="scattered clouds")
		{
			img="animated/cloud-day-2.svg";
		}
		else if(data.daily[i].weather[0].icon=="broken clouds")
		{
			img="http://openweathermap.org/img/wn/04d@2x.png";
		}
		else if(data.daily[i].weather[0].icon=="shower rain")
		{
			img="animated/rainy-6.svg";
		}
		else if(data.daily[i].weather[0].icon=="rain")
		{
			img="animated/rainy-7.svg";
		}
		else if(data.daily[i].weather[0].icon=="thunderstorm")
		{
			img="animated/thunder.svg";
		}
		else if(data.daily[i].weather[0].icon=="snow")
		{
			img="animated/snowy-6.svg";
		}
		else if(data.daily[i].weather[0].icon=="mist")
		{
			img="http://openweathermap.org/img/wn/50d@2x.png";
		}
		else
		{
			img="animated/weather.svg";
		}


		    function timeConverter(UNIX_timestamp){
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  
  var time = date + ' ' + month  ;
  return time;
}
var dat=timeConverter(data.daily[i].dt);




			var cond=data.daily[i].weather[0].main;
			var temp_max=data.daily[i].temp.max;
			var hum=data.daily[i].humidity;
			var temp_min=data.daily[i].temp.min;
			temp+="<div class=card c_card>";
			temp+="<div class='card-body'>";
			temp+="<h5 class='text-center' >"+dat+"</h5>"
			temp+="<p class='text-center'><img src="+img+"></p>";
			temp+="<h5 class='text-center'>"+cond+"</h5>";
			temp+="<h6 class='text-center'>Humidity : "+hum+"</h6>"
			temp+="<h6 class='text-center'>Min/Max(&degC):  "+temp_min+"/"+temp_max+"</h6>";
			temp+="</div>";
			temp+="</div>";
		}
		document.getElementById("root").innerHTML=temp;

	});

});


