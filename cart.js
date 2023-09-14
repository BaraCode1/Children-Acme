

function myFunction()
{
    
    var text="Mot croise";
    var prix1=4.99;
    let tax= 0.15;
    let prixafterTax=4.99*.35;
    let totalAfterTax=prix1+(prixafterTax);
    var produit1=document.getElementById("produit1").innerHTML=text;
    var prixProduit1=document.getElementById("p1").innerHTML=prix1.toString();
    var totalSub=document.getElementById("sub").innerHTML=prix1.toString();
    var Tax=document.getElementById("tax").innerHTML=prixafterTax.toString();
    var total=document.getElementById("total").innerHTML=totalAfterTax.toString();
}

function myFunction2()
{ 
   alert('not available yet');
}

function myFunction3()
{ 
   alert('not available yet');
}
