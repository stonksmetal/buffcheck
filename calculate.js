const fileURL = "buff163.json"

function getData() {



 {$.ajax({
   //url: 'https://prices.csgotrade.app/latest/buff163.json' ,
   url: fileURL,
   dataType: 'json',
   success: function(json) {
     console.log('success', json);
		 itemname = "Sticker | Vox Eminor (Foil) | Katowice 2015";
		 itemprice = json[itemname]["starting_at"]["price"];

     console.log(itemprice)



   } //success function(json) end
 			});//ajax end
 		} //ajax end
  } //function testBuffAPI() end
