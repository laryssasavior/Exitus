function addMultipleParts(form, route) {

    let formData = new FormData(this)

    $.ajax({
        url: route,
        dataType: 'html',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: data => console.log('Tudo ok'),
        error: error => console.log(error)

    })
}


function addSinglePart(form, route, toastDescription, clean = true) {

    let $formData = $(form).serialize()

    if ($(`${form} .form-control`).val() != '') {

        $.ajax({
            url: route,
            dataType: 'html',
            type: 'POST',
            data: $formData,
            success: data => {

                clean ? $(`${form} input`).val('') : ''

                showToast(toastDescription, 'bg-success')

            },

            error: error => console.log(error)

        })

    } else {

        showToast('Preencha todos os campos', 'bg-danger')
    }

}


function deleteElement(form, route, dataToast) {

    let $formData = $(`${form}`).serialize()

    $.ajax({
        url: route,
        type: 'POST',
        dataType: 'html',
        data: $formData,
        success: data => showToast(dataToast, 'bg-danger'),
        error: erro => showToast('Houve um erro na requisição', 'bg-info')
    })
}


function loadOptions(elements) {

    $.each(elements, i => {

        let form = elements[i][3] == '' ? 'form' : elements[i][3];

        let $selectSituation = $(`${form} select[name="${elements[i][0]}"]`)

        elements[i][2] == 'clean' ? $selectSituation.empty() : ''

        $.ajax({
            url: elements[i][1],
            dataType: 'json',
            type: 'GET',
            success: data => {

                $.each(data, i => $selectSituation.append(`<option value="${data[i].option_value}">${data[i].option_text}</option>`))

            },

            error: erro => console.log(erro.responseText)

        })

    })

}


function updateElement(form, route, dataToast) {

    let $formData = $(`${form}`).serialize()

    console.log($formData)

    $.ajax({
        url: route,
        type: 'POST',
        dataType: 'html',
        data: $formData,
        success: data => {

            showToast(dataToast, 'bg-primary')

        },
        error: erro => showToast('Houve um erro na requisição', 'bg-info')

    })
}


function editElement(activeForm, formGroup) {

    $(`[${formGroup}] .form-control`).prop('disabled', true)
    $(`${activeForm} .form-control`).prop('disabled', false)

    $('.update-data-icon, .delete-data-icon').css("pointer-events", "none")
    $(`${activeForm} .update-data-icon, ${activeForm} .delete-data-icon`).css("pointer-events", "auto")

}


function loadListElements(container, route, form = '') {

    let $container = $(`[${container}]`)

    let $formData = $(`${form}`).serialize()

    let loading = '<div class="d-flex justify-content-center loading"><div class="spinner-grow text-primary" role="status"></div></div>'

    $container.text('').append(loading)

    $.ajax({
        url: route,
        type: 'GET',
        data: $formData,
        success: data => {

            $('.loading').remove()
            $container.append(data)

        },
        error: erro => $container.append('<h5 class="mt-3">Houve um erro na requisição, tente novamente mais tarde</h5>')
    })
}


function seekElement(form, container, route) {

    let formData = $(form).serialize()

    let $container = $(`[${container}]`)

    $container.text('')

    $.ajax({
        url: route,
        type: 'GET',
        data: formData,
        success: data => $container.append(data),
        error: erro => $container.append('<h5 class="mt-3">Houve um erro na requisição, tente novamente mais tarde</h5>')
    })
}


function showModal(formId, route, container, modal, type = 'normal') {

    let id = formId.replace(/[^0-9]/g, '')

    let $container = $(`[${container}]`)

    $container.text('')

    $.ajax({
        url: route,
        type: 'GET',
        data: {
            id: id
        },
        success: data => {

            $container.append(data)

            $(modal).modal("show")

        },

        error: erro => $container.append('<h5 class="mt-3">Houve um erro na requisição, tente novamente mais tarde</h5>')

    })

}


function checkClass() {

    let dados = $('#addClass')

    $.ajax({
        url: '/admin/gestao/turma/verificar-dados',
        data: dados.serialize(),
        type: 'GET',
        success: data => {

            let situation = data.replace(/[^\d]+/g, '')

            situation == 00 ? [$('#buttonAddClass').removeClass('disabled'),
                $('#addClass #classRoom , #addClass #shift ').removeClass('is-invalid'),
                $('#addClass #ballot , #addClass #series ').removeClass('is-invalid')
            ] : ''

            situation >= 10 ? [
                $('#buttonAddClass').addClass('disabled'),
                showToast('Sala e turno já adicionados', 'bg-info'),
                $('#addClass #classRoom , #addClass #shift ').addClass('is-invalid'),
                $('#addClass #ballot , #addClass #series ').removeClass('is-invalid')
            ] : ''

            situation == 01 ? [
                $('#buttonAddClass').addClass('disabled'),
                showToast('Série e cédula já adicionadas', 'bg-info'),
                $('#addClass #ballot , #addClass #series ').addClass('is-invalid'),
                $('#addClass #classRoom , #addClass #shift ').removeClass('is-invalid')
            ] : ''

        },
        error: erro => console.log(erro)
    })
}


function getSumNote(form , event){

        let $form = $(`${form}`).serialize()
    
        $.ajax({
            type: "GET",
            url: "/admin/gestao/turma/perfil-turma/avaliacoes/soma-notas-unidade",
            data: $form,
            dataType: 'json',
            success: response => {

    
                let sumNote = response[0].sum_notes || 0
    
                sumNote = (10 - validation.round(sumNote, 1))
    
                var code = (event.keyCode || event.which)
    
                if (code == 37 || code == 38 || code == 39 || code == 40 || code == 8) return
    
                var num = Number(event.val().replace(".", "."))
    
                if (event.val().replace(".", "").length > 2) num = num * 100
    
                var value = (num <= sumNote ? num : sumNote)
    
                event.value = value.toFixed(1).replace(".", ".")
    
            },
    
            error: erro => console.log(erro)
    
        })
    
}