// Bootstrap js
require('./bootstrap');

// Config and Headers
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Plugins
window.Swal = require('sweetalert2');

require('owl.carousel');

require('croppie/croppie');

window.select2 = require('select2/dist/js/select2');
require('select2/dist/js/i18n/fa');

window.ClassicEditor = require('@ckeditor/ckeditor5-build-classic');

let Highcharts = window.Highcharts = require('highcharts');
// Load module after Highcharts is loaded
require('highcharts/modules/exporting')(Highcharts);

$(document).ready(function(){
    $('input.number_format').each(function(){
        const price = $(this).val().replace( /[^0-9]+/g, '' );
        $(this).val( new Intl.NumberFormat().format(price));
    })
});
$(document).on('keyup','input.number_format' ,function () {
    const price = $(this).val().replace( /[^0-9]+/g, '' );
    $(this).val( new Intl.NumberFormat().format(price));
});

require('tinymce/tinymce');
require('tinymce/themes/silver');
require('tinymce/plugins/paste');
require('tinymce/plugins/advlist');
require('tinymce/plugins/autolink');
require('tinymce/plugins/lists');
require('tinymce/plugins/link');
require('tinymce/plugins/image');
require('tinymce/plugins/charmap');
require('tinymce/plugins/print');
require('tinymce/plugins/preview');
require('tinymce/plugins/anchor');
require('tinymce/plugins/textcolor');
require('tinymce/plugins/searchreplace');
require('tinymce/plugins/visualblocks');
require('tinymce/plugins/code');
require('tinymce/plugins/fullscreen');
require('tinymce/plugins/insertdatetime');
require('tinymce/plugins/media');
require('tinymce/plugins/table');
require('tinymce/plugins/contextmenu');
require('tinymce/plugins/code');
require('tinymce/plugins/help');
require('tinymce/plugins/wordcount');
require('tinymce/plugins/autoresize');
require('tinymce/plugins/directionality');

tinymce.init({
    directionality : 'rtl',
    convert_urls: false,
    selector: '.tinymce',
    images_upload_url: baseUrl + '/panel/tinymce',
    plugins: ['paste', 'link', 'image', 'lists', 'directionality', 'table'],
    branding: false,
    toolbar: [
        'alignleft aligncenter alignright alignjustify alignnone | bold italic underline strikethrough |' +
        'subscript superscript | undo redo | cut copy | anchor ltr rtl | image link unlink | table tabledelete |' +
        'bullist numlist'
    ],
});

window.alertify = require('alertifyjs/build/alertify.min');

window.counter = require('countup.js');

require('lity/dist/lity.min');
