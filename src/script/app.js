const endpoint = "./php/action.php";
let list;

/**
 * @param settings
 * Reusable Async AJAX
 * eg: let a = doAjax({
        url: ajaxurl,
        type: 'POST',
        data: args
    })
    Callback : a.then(data => {
        console.log(data)
    })
*/
function doAjax(settings) {
    settings.data = JSON.stringify(settings.data);
    return new Promise((res, rej) => $.ajax(settings).done(a => res(a)));
}

let data = {
    action: "Get Template"
};

let template = doAjax({
    url: endpoint,
    type: 'POST',
    data: data
});
template.then(function(i) {
    let obj = JSON.parse(i);
    createDOM(obj);
});


function createDOM(obj) {
    let output = "";
    obj.slice(0, 4).forEach((i) => {
        output += `<div class="content">
            <div class="image-container">
                <img src="${i.thumbnail_url}" width="100%" height="auto">
            </div>
            <div class="title-container">
                <a class="c-link" href="${i.preview_url}" target="_blank"></a>
                <h3>${i.template_name}</h3>
            </div>
        </div>`;
    });

    $(".container").append(`${output}`);
}


function getURLParameter(key) {
    let sPageURL = window.location.search.substring(1),
        sURLletiables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLletiables.length; i++) {
        sParameterName = sURLletiables[i].split('=');

        if (sParameterName[0] === key) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
}