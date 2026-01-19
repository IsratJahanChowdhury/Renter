function searchItem()
{
    var q = document.getElementById("searchBox").ariaValueMax;

}
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function()
{
    if(this.readyState===4 && this.state===200)
    {
        var data= JSON.parse(this.responseText);
        var html="";
        if(data.length===0)
        {
            html="<p class'not-available'>No product found</p>";
        }
        for(var i=0;i<data.length;i++)
        {
            html+=`
            <div class="item-box">
            <img src="../images/${data[i].image}"alt="item">
            <h3>${data[i].name}</h3>
            <p>Price:Tk ${data[i].price}</p>
            <p>Available:${data[i].quantity}</p>
            
        }
    }
}