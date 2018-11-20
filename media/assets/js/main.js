//Dropdown plugin data
var locationData = [
	
    {
        text: "Badangi",
        value: 1,
        selected: false,
        imageSrc: "./images/location.png"
    },
    {
        text: "Bobbili",
        value: 2,
        selected: false,   
        imageSrc: "./images/location.png"
    },
    {
        text: "Donkinavalasa",
        value: 3,
        selected: false,  
        imageSrc: "./images/location.png"
    },
    {
        text: "Laxmipuram",
        value: 4,
        selected: false,   
        imageSrc: "./images/location.png"
    }
];
var offersData = [
    {
        text: "Crops",
        value: 1,
        selected: false,
        imageSrc: "./images/brand-s.png"
    },
    {
        text: "Vegetables",
        value: 2,
        selected: false,   
        imageSrc: "./images/store-s.png"
    },
    {
        text: "Fruits",
        value: 3,
        selected: false,  
        imageSrc: "./images/offers-s.png"
    },
    {
        text: "Dals",
        value: 4,
        selected: false,   
        imageSrc: "./images/gifts-s.png"
    }
];
// A $( document ).ready() block.
$( document ).ready(function() {
    //console.log( "ready!" );
	$('#demoBasic').ddslick({
		data: locationData,
		imagePosition: "left",
		clickOffToClose: true,
		selectText: {
						text: "Choose Location",
						imageSrc: "./images/location.png"},
		onSelected: function (data) {
			//console.log(data);
			//console.log(JSON.stringify(data));
			//console.log('slected value is:'+data['selectedData']['value']);
		}
	});
	$('#searchMM').ddslick({
		data: offersData,
		imagePosition: "left",
		clickOffToClose: true,
		showPointer: false,
		selectText: {
						text: "Crops, Vegetables, Fruits, Dals",
						imageSrc: "./images/search-s.png"},
		onSelected: function (data) {
			//console.log(data);
			//console.log(JSON.stringify(data));
			//console.log('slected value is:'+data['selectedData']['value']);
		}
	});
});
