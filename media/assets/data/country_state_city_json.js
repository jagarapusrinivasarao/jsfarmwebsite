//JavaScript Document
var contctinfo ='{"country":[{"name":"United States", "id":"usa", "states":[{"name":"Newyark", "id":"ny"},{"name":"California", "id":"ca"},{"name":"North Carolina", "id":"nc"}]},{"name":"united kingdom", "id":"uk", "states":[{"name":"Belfast", "id":"ie"},{"name":"Berkshire", "id":"IF"},{"name":"BFPO", "id":"ih"}]},{"name":"india", "id":"ind", "states":[{"name":"Telangana", "id":"tg"},{"name":"Andhrapradesh", "id":"ap"},{"name":"Karnataka", "id":"bg"}]}]}';

var countryList=JSON.parse(contactinfo);
     alert('countryList.country');
for(var i=0; i<countryList.country.length; i++){
	alert('countryList.country[i].name');
	alert('countryList.states[i].name');
	}