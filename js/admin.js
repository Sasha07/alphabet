CKEDITOR.disableAutoInline = true;

$(function() {

    var editor = CKEDITOR.inline(document.getElementById('editable'),{
        extraPlugins: 'sourcedialog',
        removePlugins: 'sourcearea',
        language : 'ru',
        filebrowserBrowseUrl : '/components/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl : '/components/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl : '/components/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl : '/components/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl : '/components/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl : '/components/kcfinder/upload.php?type=flash'
    });

    CKEDITOR.plugins.registered['save'] = {
        init: function (editor) {
            var command = editor.addCommand('save', {
                modes: { wysiwyg: 1, source: 1 },
                exec: function (editor) {
                    $.post('save', {
                        page: adminData.currentPage,
                        content: CKEDITOR.instances.editable.getData()}, function(r) {
                        bootbox.alert(r);
                    }
                )}
            });

            editor.ui.addButton('Save', { label: 'Сохранить', command: 'save', toolbar: 'document'});
        }
    }

});