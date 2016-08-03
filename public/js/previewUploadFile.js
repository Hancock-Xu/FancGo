(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

/**
 * Created by Xuhanyu on 8/3/16.
 */

$(document).ready(function () {
    var filechooser = document.getElementById('filechooser');
    var previewer = document.getElementById('previewer');

    // 200 KB 对应的字节数
    var maxsize = 200 * 1024;

    filechooser.onchange = function () {
        var files = this.files;
        var file = files[0];

        // 接受 jpeg, jpg, png 类型的图片
        if (!/\/(?:jpeg|jpg|png)/i.test(file.type)) return;

        var reader = new FileReader();
        reader.onload = function () {
            var result = this.result;
            var img = new Image();

            // 如果图片小于 200kb，不压缩
            if (result.length <= maxsize) {
                toPreviewer(result);
                return;
            }

            img.onload = function () {
                var compressedDataUrl = compress(img, file.type);
                toPreviewer(compressedDataUrl);
                img = null;
            };

            img.src = result;
        };

        reader.readAsDataURL(file);
    };

    function toPreviewer(dataUrl) {
        previewer.src = dataUrl;
        filechooser.value = '';
    }

    function compress(img, fileType) {
        var canvas = document.createElement("canvas");
        var ctx = canvas.getContext('2d');

        var width = img.width;
        var height = img.height;

        canvas.width = width;
        canvas.height = height;

        ctx.fillStyle = "#fff";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0, width, height);

        // 压缩
        var base64data = canvas.toDataURL(fileType, 0.75);
        canvas = ctx = null;

        return base64data;
    }
});

},{}]},{},[1]);

//# sourceMappingURL=previewUploadFile.js.map
