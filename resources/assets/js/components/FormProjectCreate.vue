<template>
    <div class="row">
        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
          <div class="form-group">
            <label for="name">Project Name</label>
            <input type="text" class="form-control" id="name" name="name" v-model="form.name">
            <div class="alert alert-info" role="alert" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></div>
          </div>
          <div class="form-group">
            <label for="description">Project Description</label>
            <input type="text" class="form-control" id="description" name="description" v-model="form.description">
            <div class="alert alert-info" role="alert" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></div>
          </div>
          <button type="submit" class="btn btn-primary" :disabled="form.errors.any()">Create</button>
        </form>
    </div>
</template>
<script>
    import Form from './../form.es6.js';
    
    export default {
    
    data() {
        return {
            form: new Form({
                name: '',
                description: ''
            })
        };
    },
    
    methods: {
        onSubmit(){
            this.form.post('/projects')
                .then(response => alert('Wahoo!'))
                .catch(error => alert('something went wrong!'));
        }
    }
}
</script>