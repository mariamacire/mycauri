
$(document).ready(function(){
  
  // let allCoordinatesRaw; 
  // let allCoordinates = []; 

  // const xhttp = new XMLHttpRequest();
  // xhttp.onreadystatechange = function() {
  //   if (this.readyState == 4 && this.status == 200) {

  //      let result = (xhttp.responseText)
  //      allCoordinatesRaw = JSON.parse(result);
       

  //      console.log(allCoordinatesRaw)     
      
  //  allCoordinatesRaw.forEach(element =>{
  //        allCoordinates.push({ attitude:element[2],longitude: element[3] });
  //    })  
        

   var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: new google.maps.LatLng(9.601861,-13.64611),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  
   //console.log(allCoordinatesRaw);
   
  // var marker, i;

  // for (i = 0; i < allCoordinatesRaw.length; i++) {  
  //   marker = new google.maps.Marker({
  //     position: new google.maps.LatLng(allCoordinatesRaw[i][2], allCoordinatesRaw[i][3]),
  //     map: map
  //   });

  //   var infowindow = new google.maps.InfoWindow({
  //     content: ' <b>Nom:</b> '+ allCoordinatesRaw[i][1]+
  //     '<br><b>Adresse:</b> '+allCoordinatesRaw[i][4]
  //   });

  //   let infos =' <b>Nom:</b> '+ allCoordinatesRaw[i][1]+
  //   '<br><b>Adresse:</b> '+allCoordinatesRaw[i][4]

  //   google.maps.event.addListener(marker, 'click', (function(marker, i){
  //     return function(){
  //       //infowindow.setContent(allCoordinatesRaw[i][1]);
  //       infowindow.setContent(infos);
  //       infowindow.open(map, marker);
  //     }
  //   })(marker, i));
  // }
  //   }
  // };
  // xhttp.open("GET", "/js/getCoord.php", true);
  // xhttp.send();





  // function _getCoordFromDatabase()
  // {
  
  //   $.ajax({    //create an ajax request to display.php
  //     type: "POST",
  //     url: "getCoord.php",             
  //     dataType: "json",   //expect html to be returned                
  //     success: function(response){                    
  //         console.log(response);
  //         //alert(response);
  //     }
  //   })
  // }



});




