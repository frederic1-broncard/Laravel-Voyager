
/*
../public/assets/js/commentaires/app.js

 */

$(function (){
    var baseUrl =$('body').attr('data-baseUrl')

    $('#older-posts').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: baseUrl +'/ajax/older-posts',
data:{
                offset: 10
},
method: 'get',
            success: function(reponsePHP) {
                $('#liste-posts').append(reponsePHP)
                    .find('.post-preview:nth-last-of-type(-n+10)')
                    .hide()
                    .fadeIn();
            },



            error: function (){
                alert("Problème durant la transaction");
            }
        });
    });
});
