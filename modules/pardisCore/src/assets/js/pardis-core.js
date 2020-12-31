// start destroy a company
$(".destroy_company").on('click', function (e) {
    e.preventDefault();
    let id = $(this).data('id');
    Swal.fire({
        title: 'آیا برای حذف اطمینان دارید؟',
        icon: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'btn btn-danger mx-2',
            cancelButton: 'btn btn-light mx-2'
        },
        buttonsStyling: false,
        confirmButtonText: 'حذف',
        cancelButtonText: 'لغو',
        showClass: {
            popup: 'animated fadeInDown'
        },
        hideClass: {
            popup: 'animated fadeOutUp'
        }
    })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "delete",
                    url: baseUrl + '/panel/company/' + id,
                    dataType: 'json',
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            text: 'عملیات حذف با موفقیت انجام شد.',
                            confirmButtonText:'تایید',
                            customClass: {
                                confirmButton: 'btn btn-success',
                            },
                            buttonsStyling: false,
                            showClass: {
                                popup: 'animated fadeInDown'
                            },
                            hideClass: {
                                popup: 'animated fadeOutUp'
                            }
                        })
                            .then((response) => {
                                location.reload();
                            });
                    }
                });
            }
        });
});
// end destroy a company

// start change company approved
$('#approved_company').on('change', function () {
    let target = $(this);
    let id = $(this).data('id');
    let approved = $(this).val();

    Swal.fire({
        title: 'آیا مطمئن هستید؟',
        icon: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'btn btn-danger mx-2',
            cancelButton: 'btn btn-light mx-2'
        },
        buttonsStyling: false,
        confirmButtonText: 'بروزرسانی',
        cancelButtonText: 'لغو',
        showClass: {
            popup: 'animated fadeInDown'
        },
        hideClass: {
            popup: 'animated fadeOutUp'
        }
    })
        .then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "patch",
                    url: baseUrl + '/panel/company/approved/' + id,
                    dataType: 'json',
                    data: {
                        approved : approved
                    },
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            text: 'عملیات بروزرسانی با موفقیت انجام شد.',
                            confirmButtonText:'تایید',
                            customClass: {
                                confirmButton: 'btn btn-success',
                            },
                            buttonsStyling: false,
                            showClass: {
                                popup: 'animated fadeInDown'
                            },
                            hideClass: {
                                popup: 'animated fadeOutUp'
                            }
                        }).then((response) => {
                            switch (approved) {
                                case 'awaiting_approved':
                                    empty_confirm_icon_classes(target, 'text-warning', 'fa fa-question');
                                    break;
                                case 'confirmed':
                                    empty_confirm_icon_classes(target, 'text-success', 'fa fa-check');
                                    break;
                                case 'not_approved':
                                    empty_confirm_icon_classes(target, 'text-danger', 'fa fa-remove');
                                    break;
                            }
                            hide_error_messages();
                        });
                    },
                    error: function (response) {
                        show_error_messages(response);
                    }
                });
            }
        });

});
// end change company approved

// start show error messages for ajax requests
function show_error_messages(response) {

    $('.form-group')
        .find('.invalid-feedback')
        .addClass('d-none')
        .find('strong').text('');
    $('.form-group')
        .find('.is-invalid')
        .removeClass('is-invalid')
    if (response.status === 422) {
        for( const field_name in response.responseJSON.errors ){
            if(response.responseJSON.errors[field_name]) {
                let target = $('[name=' + field_name + ']');
                target.addClass('is-invalid');
                target.closest('.form-group')
                    .find('.invalid-feedback')
                    .removeClass('d-none')
                    .find('strong').text(response.responseJSON.errors[field_name]);
            }
        }
    }
}
// end show error messages for ajax requests

function empty_confirm_icon_classes(target, color, icon) {
    let firstSpan = target.closest('.form-group').find('span').first();
    firstSpan.attr('class', '');
    firstSpan.addClass(color);
    let iAttribute = firstSpan.find('i');
    iAttribute.attr('class', '');
    iAttribute.addClass(icon);
}

// start hide fields error messages before and after ajax submit
function hide_error_messages() {
    $('.form-group')
        .find('.invalid-feedback')
        .addClass('d-none')
        .find('strong').text('');
    $('.form-group')
        .find('.is-invalid')
        .removeClass('is-invalid')
}
// end hide fields error messages before and after ajax submit
