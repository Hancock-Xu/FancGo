/**
 * Created by Xuhanyu on 8/3/16.
 */

$(document).ready(function() {
    var filechooser = document.getElementById('filechooser');
    var previewer = document.getElementById('previewer');
    var pdf_previewer = document.getElementById('pdf_previewer');
    var resume_chooser = document.getElementById('resume_chooser');

// 200 KB 对应的字节数
    var maxsize = 200 * 1024;

    filechooser.onchange = function() {
        var files = this.files;
        var file = files[0];

        // 接受 jpeg, jpg, png 类型的图片
        var filesize = file.size/1024;
        if (filesize > 2000){
            alert('Maximum file 2MB');
            target.value = '';
            return;
        }
        if (!/\/(?:jpeg|jpg|png)/i.test(file.type)) return;

        var reader = new FileReader();
        reader.onload = function() {
            previewer.src = this.result;
        };

        reader.readAsDataURL(file);
    };

    // resume_chooser.onchange = function () {
    //
    //         var files = this.files;
    //         var file = files[0];
    //
    //         // 接受 jpeg, jpg, png 类型的图片
    //         var filesize = file.size/1024;
    //         if (filesize > 2000){
    //             alert('Maximum file 2MB');
    //             target.value = '';
    //             return;
    //         }
    //         if (!/\/(?:pdf)/i.test(file.type)) return;
    //
    //         var reader = new FileReader();
    //         reader.onload = function() {
    //             pdf_previewer.src = this.result;
    //         };
    //
    //         reader.readAsDataURL(file);
    // };

});