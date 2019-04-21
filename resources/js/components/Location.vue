<template>
    <div class="row form-group">
        <div class="col-md-8">
            <label for="location">Location</label>
            <input v-if="!selected" type="text" name="location" class="form-control" required>
            <input v-if="selected" type="text" name="location" class="form-control" v-model="remote" readonly required>
        </div>
        <div class="col-md-4">
            <label for="remote">
                Remote
                <input type="checkbox" name="remote" id="remote" @click="isChecked">
            </label>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                selected: null,
                remote: 'Remote'
            }
        },
        methods: {
                isChecked(e) {
                    if(this.rolesSelected != "") {
                        if(this.selected == null) {
                            this.selected = true;
                        } else {
                            this.selected = null;
                        }
                    }
                }
            },
    }
</script>
<style>

</style>
