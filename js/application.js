$(document).on('ready', function () {

    let printErrorForField = function ($field, error) {
        $field.closest('.form-group').addClass('has-error')
        $field.closest('.input-holder').append('<p class="text-danger error-message">' + error + '</p>')
    }

    let $usersTable = $('#table--users')

    $(document).on('submit', '#form--user-create', function (e) {
        e.preventDefault()

        let $form = $(this),
            $panelBody = $form.closest('.panel-body'),
            formData = $form.serialize(),
            $submitButton = $form.find('button').eq(0)

        // Remove current error messages
        $form.find('.form-group').removeClass('has-error')
        $form.find('.error-message').remove()

        $.ajax({
            url: $form.prop('action'),
            type: $form.prop('method'),
            dataType: 'json',
            data: formData,
            success: function (response) {
                if (response.success) {
                    // clear inputs
                    $form.find('input:not([type="submit"])').val('')
                    // show success message
                    toastr.success("Great! User was created")
                    // update tbody
                    $usersTable.find('tbody').html(response.tbodyHtml)
                } else {
                    toastr.error("Error while submitting form")
                }
            },
            error: function (response) {
                response = JSON.parse(response.responseText)
                $.each(response.errors, function (fieldName, fieldErrors) {
                    for (let i = 0; i < fieldErrors.length; i++) {
                        let error = fieldErrors[i]
                        console.log('[name="' + fieldName + '"]', error)
                        printErrorForField($form.find('[name="' + fieldName + '"]'), error)
                    }
                })
            },
            complete: function () {
                $submitButton.button('reset')
            }
        })

        $submitButton.button('loading')
    })

})