

fetch( "https://api.opencagedata.com/geocode/v1/json?q=RANCHI&key=6d0e711d72d74daeb2b0bfd2a5cdfdba")
.then(res=>res.json())
.then(function(data){
	console.log(data);
  var lat=data.results[0].annotations.DMS.lat;
  var lon=data.results[0].annotations.DMS.lng;
});