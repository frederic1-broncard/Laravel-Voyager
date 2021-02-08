/*
../public/assets/js/commentaires/app.js

 */

$(function (){
$('#form_commentaires').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('data-url'),
        data:{
            pseudo: $('#pseudo').val(),
            text:  $('#commentaire').val(),
        },
        method:'get',
        success: function(reponsePHP){


        },
        error: function (){
            alert("Problème durant la transaction")
        }
    });
});
});
