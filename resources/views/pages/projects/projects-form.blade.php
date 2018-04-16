@extends('layouts.app')
@section('content')
<div id="root" class="container">
    <div class="row">
        @foreach($projects as $project)
            {{ $project->name }} 
            <!--<button class="btn btn-danger btn-xs" @click="deletePro({{ $project->id }})"><i class="fa fa-trash-o" aria-hidden="true"></i></button>-->
        @endforeach
    </div>
    <hr>
    <formx-x></formx-x>
</div>
@endsection
@section('script')
<script>
class Errors {
     /**
     * Create a new Errors instance.
     */
    constructor(){
        this.errors = {};
    }
    /**
     * Retrieve the error message for a field.
     *
     * @param {string} field
     */
    get(field){
        if(this.errors[field]){
            return this.errors[field][0];
        }
    }
    /**
     * Record the new errors.
     *
     * @param {object} errors
     */
    record(errors){
        this.errors = errors;
    }
    /**
     * Determine if an errors exists for the given field.
     *
     * @param {string} field
     */
    has(field){
        return this.errors.hasOwnProperty(field);
    }
    /**
     * Determine if we have any errors.
     */
    any(){
        return Object.keys(this.errors).length > 0;
    }
    /**
     * Clear one or all error fields.
     *
     * @param {string|null} field
     */
    clear(field){
        if(field){
            delete this.errors[field];
            return;
        }
        this.errors = {};
    }
}

class Form {
    /**
     * Create a new Form instance.
     *
     * @param {object} data
     */
    constructor(data){
        this.originalData = data;
        for(let field in data){
            this[field] = data[field];
        }
        this.errors = new Errors();
    }
    /**
     * Fetch all relevant data for the form.
     */
    data(){
        //let data = Object.assign({}, this);
        //delete data.originalData;
        //delete data.errors;
        let data = {};
        for (let property in this.originalData) {
            data[property] = this[property];
        }
        return data;
    }
    /**
     * Reset the form fields.
     */
    reset(){
        for(let field in this.originalData){
            this[field] = '';
        }
        this.errors.clear();
    }
    /**
     * Send a POST request to the given URL.
     * .
     * @param {string} url
     */
    post(url) {
        return this.submit('post', url);
    }
    /**
     * Send a PUT request to the given URL.
     * .
     * @param {string} url
     */
    put(url) {
        return this.submit('put', url);
    }
    /**
     * Send a PATCH request to the given URL.
     * .
     * @param {string} url
     */
    patch(url) {
        return this.submit('patch', url);
    }
    /**
     * Send a DELETE request to the given URL.
     * .
     * @param {string} url
     */
    delete(url) {
        return this.submit('delete', url);
    }
    /**
     * Submit the form.
     *
     * @param {string} requestType
     * @param {string} url
     */
    submit(requestType, url){
        // axios[requestType](url, this.data())
        //     .then(this.onSuccess.bind(this))
        //     .catch(this.onFail.bind(this));
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);
                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data.errors);
                    reject(error.response.data.errors);
                });
        });
    }
    /**
     * Handle a successful form submission.
     *
     * @param {object} data
     */
    onSuccess(response){
        //alert(response.data.message);
        alert(response.message); // temporary
        //this.errors.clear();
        this.reset();
    }
    /**
     * Handle a failed form submission.
     *
     * @param {object} errors
     */
    onFail(errors){
        //this.errors.record(error.response.data.errors);
        this.errors.record(errors);
    }
}

Vue.component('formx-x', {
    template: `<div class="row">
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
    </div>`,

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
            //this.form.submit('post', '/projects');
            this.form.post('/projects')
                .then(response => alert('Wahoo!'))
                .catch(error => alert('something went wrong!'));
        }
    }
});

new Vue({
    el: '#root'
});
</script>
@endsection