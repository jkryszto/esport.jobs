<template>
    <ckeditor :editor="editor" v-model="editorData" name="description" tag-name="textarea" :config="editorConfig"></ckeditor>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: 'app',
        data() {
            return {
                editor: ClassicEditor,
                editorData: '',
                editorConfig: {
                    // The configuration of the editor.
                    toolbar: {
                        items: [
                            'bold', 'italic', '|', 'numberedList', 'bulletedList', 'link', '|', 'undo', 'redo'
                        ]
                    }
                }
            };
        }
    }
</script>