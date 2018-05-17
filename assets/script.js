function showLoader() {
    $('#overlay').fadeIn(1);
    $('#spinner').fadeIn(300);
}

function hideLoader(){
    $('#overlay').fadeOut();
    $('#spinner').fadeOut(1000);
}


//accepts object ( errors)
function showErrors(data){
    $('.input-error').remove();
    $.each(data, function(i,item){
        elem = data[i].type+'[name='+ data[i].field+ ']';
        if(data[i].error != '' ){
            $(data[i].error).insertBefore($(elem));
            $(elem).addClass('red-border');
        }else{
            $(elem).removeClass('red-border');
        }
    });
}

$('button[type=reset]').click(function(){
    $('.input-error').remove();
    $('.red-border').removeClass('red-border');

});
$(window).load(function(){
    hideLoader();
});