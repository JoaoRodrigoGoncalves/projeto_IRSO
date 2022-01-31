function estadoSistema(debug)
{
    if(debug)
    {
        $("#estado_sistema").addClass("border-success");
        $("#icon_estado_sistema").addClass("bi bi-check-lg");
        $("#titulo_estado_sistema").text("Estado do Sistema: Tudo OK.");
        $("#descricao_estado_sistema").text("Tudo está OK.");
    }
    else
    {
        $("#icon_estado_sistema").addClass("bi bi-exclamation-triangle");
        $("#estado_sistema").addClass("border-danger");
        $("#titulo_estado_sistema").text("Estado do Sistema: Alguns Problemas.");
        $("#descricao_estado_sistema").text("Existem alguns problemas com o sistema. Confirme a ligação dos sensores.");
    }

}

$(document).ready(() => {
    estadoSistema(false);
});