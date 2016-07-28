(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

/**
 * Created by Xuhanyu on 7/28/16.
 */
$(document).ready(function () {

    $("body").click(function (event) {

        var target = event.target;
        var industrylist = $("div.industrylist");
        if (target.className === "industryInput input-large") {
            industrylist.toggle();
        } else {
            if (industrylist.show()) {
                industrylist.hide();
            }
        }
    });

    var industrylist = document.querySelector(".industrylist");
    var inputValue = document.querySelector(".industryInput");

    industrylist.addEventListener('click', getSelectIndustry, false);

    function getSelectIndustry(event) {
        var target = event.target;
        if (target.tagName === 'A') {
            inputValue.value = target.innerHTML;
        }
    }
});

},{}]},{},[1]);

//# sourceMappingURL=searchbar.js.map
