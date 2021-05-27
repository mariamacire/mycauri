
$(document).ready(function () {
    $('#pays').change(function () {
      var id = $(this).val();

      $('#partenaires').find('option').not(':first').remove();

      $.ajax({
         url:'partenaires/'+id,
         type:'get',
         dataType:'json',
         success:function (response) {
             var len = 0;
             if (response.data != null) {
                 len = response.data.length;
             }                

            if (len>0) {
            for (var i = 0; i<len; i++) {
            //  console.log(response.data);
                var id = response.data[i].AD_Org_ID;
                var name = response.data[i].Name;
                var option = "<option value='"+id+"'>"+name+"</option>"; 

                $("#partenaires").append(option);
                }
            }
         } 
      })
    });

    $('#partenaires').change(function () {
        var id     = $(this).val();
        var paysID = $('#pays').val();

        $('#agences').find('option').not(':first').remove();
  
        $.ajax({
           url:'agences/'+paysID+'/'+id,
           type:'get',
           dataType:'json',
           success:function (response) {
            var len = 0;
            if (response.data != null) {
                len = response.data.length;
            }


            //console.log(response.data);
            delete map;
            console.log(response)
            let agenciesCoordinatesRaw = response.data;
            let agenciesCoordinates = []
                
                
            agenciesCoordinatesRaw.forEach(element =>{
                agenciesCoordinates.push({ attitude:element.Coordinates,longitude: element.Coordinates });
            })  
                   
            // console.log(agenciesCoordinates)
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom:5,
                center: new google.maps.LatLng(9.601861,-13.64611),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var marker, i;
           
            for(i = 0; i < agenciesCoordinates.length; i++) {  
                marker = new google.maps.Marker({
                position: new google.maps.LatLng(agenciesCoordinates[i].Coordinates, agenciesCoordinates[i].Coordinates),
                map: map
                })

                var infowindow = new google.maps.InfoWindow({
                    content: ' <b>Nom:</b> '+ agenciesCoordinatesRaw[i].name+
                    '<br><b>Adresse:</b> '+agenciesCoordinatesRaw[i].adresse
                  });

                let infos =' <b>Nom:</b> ' + agenciesCoordinatesRaw[i].name+
                    '<br><b>Adresse:</b> '+agenciesCoordinatesRaw[i].adresse

                google.maps.event.addListener(marker, 'click', (function(marker, i){
                return function(){
                    //infowindow.setContent(allCoordinatesRaw[i][1]);
                    infowindow.setContent(infos);
                    infowindow.open(map, marker);
                }
                })(marker, i));
            }

            

            if (len>0) {
                for (var i = 0; i<len; i++) {
                //  console.log(response.data);
                    var id = response.data[i].AD_Org_ID;
                    var name = response.data[i].Name;
                    var option = "<option value='"+id+"'>"+name+"</option>"; 
    
                    $("#agences").append(option);
                    }
                }
             console.log(response);  


           } 

           
        })
      });
 });
  
  
  