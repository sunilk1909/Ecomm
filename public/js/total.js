

function total($price, $name){

  
    // logic for multiplying quantity and price for each product 
    var quantity= document.getElementById($price).value; 
    
    var productprice = $price*quantity; 
    document.getElementById($name.id).innerHTML ="$"+ productprice;
    console.log("productprise" +productprice);
    // logic for subtotal 
    var b = document.getElementById('subtotal').innerHTML;
    $total = parseInt(b) +$price; 
    document.getElementById('subtotal').innerHTML = $total + ".00";
    document.getElementById('total').innerHTML ="$"+ $total + ".00";
  }
