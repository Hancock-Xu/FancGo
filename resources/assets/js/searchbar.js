/**
 * Created by Xuhanyu on 7/28/16.
 */
$(document).ready(function() {

    $("body").click(function(event) {

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