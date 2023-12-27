function suggest(){
    var term = document.getElementById('searchbar').value;
    const endpoint = "/search/"+term;
    const productsList = document.getElementById('gridContainer');
    //console.log(endpoint);

fetch(endpoint).then(response=>{
    if(!response.ok){
        throw new Error("HTTP Error");
    }
     return response.json();
})
.then( data => {
    console.log("jere");
    productsList.innerHTML = '';
     data.forEach(product => {
        var item = '<div class=\"card\">        <img src=\" '+ product.thumbnail+' \" alt=\"Card image\">        <div class=\"card-body\">            <h2 class=\"card-title\">'+product.title+'</h2>            <p class=\"card-text\">'+product.description+'</p>            <p class=\"card-text\">Price: <price>$'+product.price+'</price></p>            <a href=\"/product/'+product.product_id+'\" class=\"btn\">VIEW</a>        </div>    </div>';
         productsList.innerHTML+=item;
    });
})
.catch(
    error =>{ console.error("Error", error)}
);


}
