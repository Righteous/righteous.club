$(document).ready(function() {
    $('.textarea').summernote();
    $('#create_blog_form').bootstrapValidator({
        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    }
                }
            },
            content: {
                validators: {
                    notEmpty: {
                        message: 'The content is required and cannot be empty'
                    }
                }
            },
            tags: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a tags'
                    }
                }
            },
            blog_category_id: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a blog category'
                    }
                }
            }
        }
    });
});

//iCheck for checkbox and radio inputs
$('input[type="checkbox"].square-blue').iCheck({
    checkboxClass: 'icheckbox_square-blue'
});