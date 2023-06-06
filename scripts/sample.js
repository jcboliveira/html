
function testForm(event) 
{
    var marcaValue = document.getElementById("marca").value;
    var precoValue = document.getElementById("preco").value;
    if (marcaValue == "" || precoValue =="") {
        alert("Necessita de um valor nos dois campos")
        return false;
    }
    return true;
}