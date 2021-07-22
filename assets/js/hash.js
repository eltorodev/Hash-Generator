$(function () {
  $('#hash').hide()
  $('form').submit(function(event) {
    event.preventDefault()

    
    const form = this

    const password = $('input[name=password]')

    if (!password.val()) {
      $('#hash').hide('slow')
      password.removeClass('is-valid').addClass('is-invalid')
      return
    }

    password.removeClass('is-invalid').addClass('is-valid')

    $.post('php/hash.php', $(form).serialize(),
      function (data) {
        if (data.status) {
          $('#hash').removeClass('d-none').show('slow')
          $('#hash input').val(data.hash)
        } else {
          swal('Nada feito', data.message, 'warning')
        }
      },
      'json'
    )
  })
})