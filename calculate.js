const fileURL = "buff163.json";
var count = 0;
// var d = new Date();
// var month = d.getMonth()+1;
// var date = d.getFullYear()+"-"+month+"-"+d.getDate();
var date = "2021-6-6";

function getData() {
 {$.ajax({
   //url: 'https://prices.csgotrade.app/latest/buff163.json' ,
   url: fileURL,
   dataType: 'json',
   success: function(json) {
     const jsonKeys = Object.keys(json);
     const jsonValues = Object.values(json);
     const jsonEntries= Object.entries(json);
     // console.log(jsonKeys)
     // console.log(jsonValues)
     // console.log(jsonEntries)
     // console.log(jsonEntries[0])
     // console.log(jsonEntries[0][0])
     // console.log(jsonEntries[0][1])
     // console.log(jsonEntries[0][1]["starting_at"]["price"])
     // console.log(jsonEntries[0][1]["highest_order"]["price"])
     const saveThese = [];
     jsonEntries.forEach(eachEntry);

     function eachEntry(item,index){
       if( jsonEntries[index][1]["starting_at"]["price"]>10){
      saveThese[index] = new Array()
      var fullName = item[0];
      var weapon = fullName.split(" | ")[0];
      var skin = fullName.split(" (")[0]; var skin = skin.split("| ")[1];
      var condition = fullName.split(" (")[1];
      if(typeof condition == "string"){
          var condition = condition.split(")")[0];
          count++;
        }
        saveThese[count]
        =new Array(weapon, skin, condition, jsonEntries[index][1]["starting_at"]["price"], jsonEntries[0][1]["highest_order"]["price"], date );
        }
     }//eachentry finished
      sendit(saveThese);
  }//success function finished
 			});//ajax end
 		} //ajax end

  } //function testBuffAPI() end


  function sendit(save){

    const xhr = new XMLHttpRequest();

    xhr.onload = function(){
      const serverResponse = document.getElementById("serverResponse");
        serverResponse.innerHTML = this.responseText;
      console.log(this.responseText);
    };

    xhr.open("POST","test.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


  var data = JSON.stringify(save);
  xhr.send("data="+data);
  }
