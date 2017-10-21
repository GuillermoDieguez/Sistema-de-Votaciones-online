$(document).on("ready", inicio);

function inicio() {
    $("#btnActualizar").click(actualizar);

    $("body").on("clic", "#listausuarios a", function(event) {
        event.preventDefault();
        idsele = $(this).attr("href");
        nombressele = $(this).parent().parent().children("td:eq(1)").text;
        alert(nombressele);
    });
}

function actualizar() {

}