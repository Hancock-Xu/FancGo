(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(document).ready(function () {

    $('#resume_chooser_form').submit(function (e) {
        // capture submit
        e.preventDefault();
        var fd = new FormData(this); // XXX: Neex AJAX2

        // You could show a loading image for example...

        $.ajax({
            url: $(this).attr('action'),
            xhr: function xhr() {
                // custom xhr (is the best)

                var xhr = new XMLHttpRequest();
                var total = 0;

                // Get the total size of files
                $.each(document.getElementById('files').files, function (i, file) {
                    total += file.size;
                });

                // Called when upload progress changes. xhr2
                xhr.upload.addEventListener("progress", function (evt) {
                    // show progress like example
                    var loaded = (evt.loaded / total).toFixed(2) * 100; // percent

                    $('#progress').text('Uploading... ' + loaded + '%');
                }, false);

                return xhr;
            },
            type: 'post',
            processData: false,
            contentType: false,
            data: fd,
            success: function success(data) {
                // do something...
                $('#progress').html('Upload Succeed');
            }
        });
    });
});

},{}]},{},[1]);

//# sourceMappingURL=upload_resume.js.map
