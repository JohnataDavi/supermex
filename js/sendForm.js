function sendEmail() {
    var contato = "mailto:contato@supermex.com.br?";
    var array = new Array();
    var content = "";
    var nome = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;


    var checkedBoxes = document.querySelectorAll('input[type=checkbox]:checked');
    for (var i = 0; i < checkedBoxes.length; i++) {
        array.push(checkedBoxes[i].value)
    }


    for (var i = 0; i < array.length; i++) {
        console.log(array[i]);

        var label = "label[for='" + array[i] + "']";
        var labels = $(label);
        var produto = labels[0].children[0].innerHTML;
        content += produto + ": ";
        //alert(produto);
        var checkId = "customRadio" + array[i] + "-2";
        console.log("checkID = " + checkId);
        var isChecked = document.getElementById(checkId).checked;
        if (isChecked) {
            var marca = "#marcas" + array[i] + " :selected";
            var selectedValues = [];
            console.log(marca);
            $(marca).each(function () {
                selectedValues.push($(this).val());
                content += $(this).val() + " ";
            });

        } else {
            content += "Marca mais barata ";
        }
        content += "\n";
    }
    for(var i=2; i<=5; i++){
        var myQuery = "#outros" + i;
        content += " Outros("+(i-1)+"): " + $(myQuery).val() + "\n";
    }



    //document.location.href = "mailto:mailto:contato@supermex.com.br";

    var subject = "subject=Lista de compras - " + nome + "&";
    var body = "body=Nome: " + nome + " Telefone: \r\n " + telefone + " Email: \r\n " + email + " Lista de compras: \r\n " + content;
    var email = contato + subject + body;
    window.open(email);
    //window.location.reload()
    //document.getElementById("nextBtn").setAttribute("onclick", "nextPrev(1);");
    $('html,body').scrollTop(0);

}

function ativarCmb(name) {
    var radioId = "customRadio" + name;
    var radio2Id = "customRadio" + name + "-2";
    var queryCard = "div[name=" + name + "]";
    var query = "input[id=" + name + "]";
    var check = $(query);
    var x = document.getElementById("myDIV" + name);
    if (check.is(':checked')) {
        check.prop('checked', false);
        x.style.display = "none";
        document.getElementById(radio2Id).checked = false;
        document.getElementById(radioId).checked = false;

    } else {
        check.prop('checked', true);
        x.style.display = "block";
        document.getElementById(radio2Id).checked = true;
    }
}

function showSelect(flag, name) {
    var queryCard = "div[name=" + name + "]";
    var query = "input[id=" + name + "]";
    var check = $(query);

    check.prop('checked', true);


    var x = document.getElementById("myDIV" + name);
    if (flag)
        x.style.display = "block";
    else
        x.style.display = "none";
}

