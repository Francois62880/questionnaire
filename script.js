$(".btn_rajout").click(function() {
    $(".btn_rajout").hide();
    $(".rajout").show();
    $(".btn_rajout1").show();
    $(".btn_retirer").show();
    $("#name2").prop('required', true);
    $("#prenom2").prop('required', true);
    $("#classe2").prop('required', true);
    $("#question2").prop('required', true);

});

$(".btn_retirer").click(function() {
    $(".btn_retirer").hide();
    $(".rajout").hide();
    $(".btn_rajout").show();
    $(".btn_rajout1").hide();
    $(".cantine2").hide();
    $("#question2 option:selected").remove();
    $("#cantine2").prop("checked", false);
    $("#garderiematin2").prop("checked", false);
    $("#garderiesoir2").prop("checked", false);
    $("#name2").prop('required', false);
    $("#prenom2").prop('required', false);
    $("#classe2").prop('required', false);
    $("#question2").prop('required', false);
});

$(".btn_rajout1").click(function() {
    $(".btn_rajout1").hide();
    $(".rajout1").show();
    $(".btn_retirer").hide();
    $(".btn_retirer1").show();
    $("#name3").prop('required', true);
    $("#prenom3").prop('required', true);
    $("#classe3").prop('required', true);
    $("#question3").prop('required', true);
});

$(".btn_retirer1").click(function() {
    $(".btn_retirer1").hide();
    $(".rajout1").hide();
    $(".btn_rajout1").show();
    $(".btn_retirer").show();
    $(".cantine3").hide();
    $("#question3 option:selected").remove();
    $("#cantine3").prop("checked", false);
    $("#garderiematin3").prop("checked", false);
    $("#garderiesoir3").prop("checked", false);
    $("#name3").prop('required', false);
    $("#prenom3").prop('required', false);
    $("#classe3").prop('required', false);
    $("#question3").prop('required', false);
});

$("#question1").change(function() {
    var reponse = $("#question1 option:selected").val();
    if (reponse === 'oui') {
        $(".cantine").show();
    }
    if (reponse === 'non' || reponse === '') {
        $(".cantine").hide();
        $("#cantine1").prop("checked", false);
        $("#garderiematin1").prop("checked", false);
        $("#garderiesoir1").prop("checked", false);
    }
});

$("#question2").change(function() {
    var reponse = $("#question2 option:selected").val();
    if (reponse === 'oui') {
        $(".cantine2").show();
    }
    if (reponse === 'non' || reponse === '') {
        $(".cantine2").hide();
        $("#cantine2").prop("checked", false);
        $("#garderiematin2").prop("checked", false);
        $("#garderiesoir2").prop("checked", false);
    }
});

$("#question3").change(function() {
    var reponse = $("#question3 option:selected").val();
    if (reponse === 'oui') {
        $(".cantine3").show();
    }
    if (reponse === 'non' || reponse === '') {
        $(".cantine3").hide();
        $("#cantine3").prop("checked", false);
        $("#garderiematin3").prop("checked", false);
        $("#garderiesoir3").prop("checked", false);
    }
});