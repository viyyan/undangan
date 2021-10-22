/**
 * scripts for data / API related
 */

 function replaceUrlParam(url, paramName, paramValue)
 {
     if (paramValue == null) {
         paramValue = '';
     }
     var pattern = new RegExp('\\b('+paramName+'=).*?(&|#|$)');
     if (url.search(pattern)>=0) {
         return url.replace(pattern,'$1' + paramValue + '$2');
     }
     url = url.replace(/[?#]$/,'');
     return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
 }

 $(document).ready(function () {
    $(".dropdown_filter").change(function (evt) {
        if (evt.target.checked) {
            var param = $(evt.target).data('param');
            var dataVal = $(evt.target).val();
            var url = replaceUrlParam(window.location.href, param, dataVal);
            window.location.href = url;
        }
    });

    $(".select_lang").change(function (evt) {
        var url = $(evt.target).val();
        if (url) {
            window.location.href = url;
        }
    });
 });
