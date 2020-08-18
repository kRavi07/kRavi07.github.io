function redeem()
  { alert("ok");
    var code=document.getElementById("promo").value;
    if(code=="FIRST" || "GET100")
    {
    	document.getElementById("promo_code").innerHTML=code;
    }
    
  }