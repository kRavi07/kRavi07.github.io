


fetch('https://inshortsv2.vercel.app/topic/education/40')
            .then(function(res)
               {
                return (res.json());
               }
                )
            .then(function(data)
                {
                    console.log(data);
                  //console.log(data.data[1]);
                  console.log(data.articles.length);
                  var len =data.articles.length;
                  temp ="";
                  for(var i=0; i<len;i++)
                  {
                    var title = data.articles[i].title;
                    var img =data.articles[i].image_url;
                    var desc =data.articles[i].description;
                    var link =data.articles[i].source_url;
                      temp += "   <article id='featured'>";
          
          temp +="<a href='#'><img src="+img+" class='con_img' alt=''/></a>";
          
          temp +="<h1>"+title+"</h1>";
          temp +="<p>"+desc+"</p>";
          temp +="<a href="+link+" class='readmore' target='blank'>Read more</a>";
          temp +="</article>";
                  }
                  document.getElementById("contn").innerHTML=temp;
                }
              );
