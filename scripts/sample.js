
// função chamada em index.php
function testForm(event) 
{
    // qual o valor existente nas caixas de texto marca e preco
    var marcaValue = document.getElementById("marca").value;
    var precoValue = document.getElementById("preco").value;

    // estão vazias?
    if (marcaValue == "" || precoValue =="") {
        // sim => não permite o submit e dá um alert
        alert("Necessita de um valor nos dois campos")
        return false;
    }
    // tudo bem => permite o submit
    return true;
}