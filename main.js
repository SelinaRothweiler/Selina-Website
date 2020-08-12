console.log()

$(document).ready(function () {
    $('.submit').click(function (event) {
        event.preventDefault ()
        console.log('Clicked button')

        var email = $('.email').val()
        var subject = $('.subject').val()
        var message = $('.message').val()
        var statusElm = $('.status')
        statusElm.empty()

        if(email.length > 5 && email.includes('@') && email.includes('.'))
        {
            console.log('Email is valid')
        }
        
        else
        {
            console.log('Email is not valid')
        }
        
        
    })
})