$(document).ready(function()
{
    $('.follow').on('click', function(){
        var user_id = $(this).data('id');

        var self = $(this);
        // alert($(this).data('id'));
        $.ajax({
            method: 'POST',
            url: BASE_URL + '/follow',
            data: {
                user_id,
                _token: TOKEN
            },
            success: function(response)
            {
                if (self.hasClass('andjela'))
                {
                    self.removeClass('andjela');
                    self.addClass('andjela-no');
                }
                else
                {
                    self.removeClass('andjela-no');
                    self.addClass('andjela');
                }

                $('.followers-'+user_id).text(response);
            }
        })
    })
})