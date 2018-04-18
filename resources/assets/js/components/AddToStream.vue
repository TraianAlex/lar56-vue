<template>
    <div>
        <div class="card-header">
            Push to the Stream...
        </div>
        <div class="card-body">
            <form @submit.prevent="onSubmit"  @keydown="form.errors.clear()">
              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="I have somethig to say..." v-model="form.body"></textarea>
                <div class="alert alert-info" role="alert" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></div>
              </div>
              <button type="submit" class="btn btn-primary mb-2" :disabled="form.errors.any()">Submit</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                form: new Form({ body: ''})
            }
        },

        methods: {
            onSubmit(){
                this.form
                    .post('/statuses')
                    .then(status => this.$emit('completed', status));
            }
        }
    }
</script>
