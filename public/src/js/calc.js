/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the size of the cake
 //The values represent the cost of the cake i.e A 10" cake cost's $35
 var cake_prices = new Array();
 cake_prices["28"]=28;
 cake_prices["50"]=50;
 cake_prices["63"]=63;
 cake_prices["90"]=90;
 cake_prices["140"]=140;
 cake_prices["162"]=162;
 cake_prices["180"]=180;
 cake_prices["324"]=324;
 cake_prices["450"]=450;

 //Set up an associative array
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Afbeelding"]=1;
 filling_prices["Text"]=1;

  //Set up an associative array
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var material_prices= new Array();
 material_prices["MDF 3mm"]=0.01;
 material_prices["MDF 4mm"]=0.015;
 material_prices["MDF 6mm"]=0.025;
 material_prices["Mulitplex 3mm"]=0.01;
 material_prices["Mulitplex 4mm"]=0.015;
 material_prices["Mulitplex 6mm"]=0.025;
 material_prices["RVS standaard 1mm"]=0.03;
 material_prices["RVS standaard 1.5mm"]=0.04;
 material_prices["RVS standaard 2mm"]=0.05;
 material_prices["RVS geslepen 1mm"]=0.03;
 material_prices["RVS geslepen 1.5mm"]=0.04;
 material_prices["RVS geslepen 2mm"]=0.05;
 material_prices["Plexiglas"]=0.025;


// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
function getCakeSizePrice()
{
    var cakeSizePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the cake the user Chooses name=selectedCake":
    var selectedCake = theForm.elements["selectedcake"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedCake.length; i++)
    {
        //if the radio button is checked
        if(selectedCake[i].checked)
        {
            //we set cakeSizePrice to the value of the selected radio button
            //i.e. if the user choose the 8" cake we set it to 25
            //by using the cake_prices array
            //We get the selected Items value
            //For example cake_prices["Round8".value]"
            cakeSizePrice = cake_prices[selectedCake[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the cakeSizePrice
    return cakeSizePrice;
}

//This function finds the filling price based on the
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];

    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

function getMaterialPrice()
{
    var cakeMaterialPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="materiaal"
     var selectedFilling = theForm.elements["materiaal"];

    //set cakeFilling Price equal to value user chose
    //For example material_prices["Lemon".value] would be equal to 5
    cakeMaterialPrice = material_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeMaterialPrice;
}

//candlesPrice() finds the candles price based on a check box selection
function candlesPrice()
{
    var candlePrice=1.5;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["noai"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=1.55;
    }
    //finally we return the candlePrice
    return candlePrice;
}


function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getCakeSizePrice() * getFillingPrice() * getMaterialPrice() * candlesPrice();

    var total = cakePrice.toFixed(2);

    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.innerHTML = "Uw prijs is <br/> <span class='item_price'>€"+total+"</span>";

    document.getElementById('price').innerHTML = "&euro;"+total;

}
