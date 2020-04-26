


tab="";


  $("#state").change(function()

{
 states=($(this).find("option:selected").text());

console.log(states);

      let dropdown = document.getElementById('locality-dropdown');
      dropdown.length = 0;


        let defaultOption = document.createElement('option');
      defaultOption.text = 'ALL City';

         dropdown.add(defaultOption);
        dropdown.selectedIndex = 0;




          const ag=[];
           const cat=[];
           temp="";

         const url = 'https://api.covid19india.org/resources/resources.json';

fetch(url)  
  .then(  
    function(response) {  
      if (response.status !== 200) {  
        console.warn('Looks like there was a problem. Status Code: ' + 
          response.status);  
        return;  
      }

      // Examine the text in the response  
      response.json().then(function(data) {  
        let option;
        console.log(data);
    
      for (let i = 0; i < data.resources.length; i++) {

        if(data.resources[i].state===states)

          {  
          ag.push(data.resources[i].city);
          cat.push(data.resources[i].category);
        
        }
      }
      //console.log(ag);
      //console.log(cat);

               //unique city 
         const uniqueAges = ag.filter((x, i, a) => a.indexOf(x) == i);
         //console.log(uniqueAges);

            for(var i=0;i<uniqueAges.length;i++)
          {
         option = document.createElement('option');
          option.text = uniqueAges[i];
          option.value = uniqueAges[i];
          dropdown.add(option);
          }
          //end of unique city


              /*  const uniqueCat = cat.filter((x, i, a) => a.indexOf(x) == i);
                //console.log(uniqueCat);

           for(var i=0;i<uniqueCat.length;i++)
          {
  
          temp+="<option value="+uniqueCat[i]+">"+uniqueCat[i]+"</option>";
         // console.log(uniqueCat[i]);
          } 

          document.getElementById("cat_drop").innerHTML=temp;

          */



      });  
    }  
  )  
  .catch(function(err) {  
    console.error('Fetch Error -', err);  
  });

});

 

    var states="";
     var city="";
     var cat="";

    /* $("#state").change(function() {
    
}); */

          $("#locality-dropdown").change(function() {
    city=($(this).find("option:selected").text());
    //alert(city);
});

/*               $("#cat_drop").change(function() {
    cat=($(this).find("option:selected").text());
    alert(cat);
}); */
 

$("#all").click(function()
{  
         tab+= "<thead class='thead-light'>";
         tab+= "<tr>";
         tab+="<th>City</th>";
         tab+="<th>Cateogry</th>";
         tab+="<th>Description</th>";
         tab+="<th>Organisation</th>";
         tab+="<th>Contact</th>";
         tab+="</tr>";
         tab+="</thead>";

         tab+="<tbody>";

     
     fetch('https://api.covid19india.org/resources/resources.json').then((response) => {
    response.json().then((data) => {

     for(var i=0;i<data.resources.length;i++)
     {
      if(data.resources[i].city===city)
      {
        //console.log(data.resources[i].nameoftheorganisation);

       //console.log(data.resources[i].nameoftheorganisation);
         
         

         tab+="<tr>";
         tab+="<td>"+city+"</td>";
         tab+="<td>"+data.resources[i].category+"</td>";
         tab+="<td>"+data.resources[i].descriptionandorserviceprovided+"</td>";
         tab+="<td> <a href="+data.resources[i].contact+">"+data.resources[i]. nameoftheorganisation+
         "</a> </td>";
        
        tab+="<td>"+data.resources[i]. phonenumber+"</td>";
        tab+="</tr>"; 
        tab+="</tbody>";
      }
       if(data.resources[i].state===states&&city==="")
      {
       console.log(data.resources[i].nameoftheorganisation);
         
        

         tab+="<tr>";
         tab+="<td>"+city+"</td>";
         tab+="<td>"+data.resources[i].category+"</td>";
         tab+="<td>"+data.resources[i].descriptionandorserviceprovided+"</td>";
         tab+="<td> <a href="+data.resources[i].contact+">"+data.resources[i]. nameoftheorganisation+
         "</a> </td>";
        
        tab+="<td>"+data.resources[i]. phonenumber+"</td>";
        tab+="</tr>"; 
        tab+="</tbody>";
      }

       if(data.resources[i].state===states&&city==="ALL City")
      {
        console.log(data.resources[i].nameoftheorganisation);
         

         tab+="<tr>";
         tab+="<td>"+city+"</td>";
         tab+="<td>"+data.resources[i].category+"</td>";
         tab+="<td>"+data.resources[i].descriptionandorserviceprovided+"</td>";
         tab+="<td> <a href="+data.resources[i].contact+">"+data.resources[i]. nameoftheorganisation+
         "</a> </td>";
        
        tab+="<td>"+data.resources[i]. phonenumber+"</td>";
        tab+="</tr>"; 
        tab+="</tbody>";
      }
      
      }
      document.getElementById("tab_").innerHTML=tab; 
      
    })
});//End of fetch()

});//end of all search click functiom


