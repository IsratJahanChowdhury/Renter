function searchItem()
{
    var q = document.getElementById("searchBox").value;


var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function()
{
    if(this.readyState===4 && this.status===200)
    {
        var data= JSON.parse(this.responseText);
        var html="";
        if(data.length===0)
        {
            html="<p class='not-available'>No product found</p>";
        }
        for(var i=0;i<data.length;i++)
        {
            html+=`
            <div class="item-box">
            <img src="../images/${data[i].image}" alt="item">
            <h3>${data[i].name}</h3>
            <p>Price:Tk ${data[i].price}</p>
            <p>Available:${data[i].quantity}</p>
            ${data[i].quantity>0?`
                
             <form method="post" action="../controller/book.php">
             <input type="hidden" name="item_id" value="${data[i].id}">   
             <input type="date" name="from_date" required>   
             <input type="date" name="to_date" required>   
             <button type="submit">Book Item</button>
             </form>
             `:`<p class="not-available">Not available</p>`}
             </div>`;
            }
            document.getElementById("itemResult").innerHTML=html;
        }
    };
       xhttp.open("GET","../controller/search.php?q="+q,true);
       xhttp.send();
                  
}     
                



   