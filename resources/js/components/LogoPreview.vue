<template>
    <div class="row form-group">
        <div class="col-md-6">
            <img :src="url" alt="Image preview" class="img-thumbnail">
        </div>
        <div class="col-md-6">
            <label for="logo">Upload logo</label>
            <input type="file" name="logo" class="form-control" @change="onFileChange" required>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                url: null
            }
        },
        methods: {
            onFileChange(e) {
                const img = e.target.files[0];
                this.url = URL.createObjectURL(img);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
