console.log('\'Allo \'Allo!');

$("#require-topbar").replaceWith(templates['topbar'].render());
$("#require-sidebar").replaceWith(templates['sidebar'].render());
$(".require-form-box").replaceWith(templates['form-box'].render());
$(".require-form-publish-box").replaceWith(templates['form-publish-box'].render());
$(".require-form-title-box").replaceWith(templates['form-title-box'].render());
$(".require-form-body-box-add-post").replaceWith(templates['form-body-box-add-post'].render());
