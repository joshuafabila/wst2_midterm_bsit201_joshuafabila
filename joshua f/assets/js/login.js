$('button').click(function(){
    $.ajax({
        url:'router/router.php?ind=login',
        data:$('form').serialize(),
        type:'POST',
        success: function(){

        }
    })
    $.ajax({
        url:'router/router.php?ind=register',
        type:'get',
        success:function(){

        }
    })
})