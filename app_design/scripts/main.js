console.log('\'Allo \'Allo!');

$("#require-topbar").append(templates['topbar'].render());
$("#require-sidebar").replaceWith(templates['sidebar'].render());
$(".require-form-box").replaceWith(templates['form-box'].render());
$(".require-form-body-box").replaceWith(templates['form-body-box'].render());
$(".require-form-publish-box").replaceWith(templates['form-publish-box'].render());
$(".require-form-title-box").replaceWith(templates['form-title-box'].render());
