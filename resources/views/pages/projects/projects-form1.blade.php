@extends('layouts.app')
@section('content')
<div id="root" class="container">
    <div class="row">
        @foreach($projects as $project)
            <a href="#">{{ $project->name }}</a><br>
        @endforeach
    </div>
    <hr>
    <form-x></form-x>
</div><!--@keydown="errors.clear('name')"--><!--  @keydown="errors.clear('description')" -->
@endsection
@section('script')
<script>
class Errors {
    
    constructor(){
        this.errors = {};
    }
    
    get(field){
        if(this.errors[field]){
            return this.errors[field][0];
        }
    }
    
    record(errors){
        this.errors = errors;
    }
    
    has(field){
        return this.errors.hasOwnProperty(field);
    }
    
    any(){
        return Object.keys(this.errors).length > 0;
    }
    
    clear(field){
        delete this.errors[field];
    }
}

Vue.component('form-x', {
    template: `<div class="row">
        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
          <div class="form-group">
            <label for="name">Project1 Name</label>
            <input type="text" class="form-control" id="name" name="name" v-model="name">
            <div class="alert alert-info" role="alert" v-if="errors.has('name')" v-text="errors.get('name')"></div>
          </div>
          <div class="form-group">
            <label for="description">Project1 Description</label>
            <input type="text" class="form-control" id="description" name="description" v-model="description">
            <div class="alert alert-info" role="alert" v-if="errors.has('description')" v-text="errors.get('description')"></div>
          </div>
          <button type="submit" class="btn btn-primary" :disabled="errors.any()">Create</button>
        </form>
    </div>`,

    data() {
        return {
            name: '',
            description: '',
            errors: new Errors() // {}
        };
    },
    
    methods: {
        onSubmit(){
            axios.post('/projects', this.$data)
            .then(this.onSuccess)
            .catch(error => this.errors.record(error.response.data.errors));//this.errors = error.response.data.errors
        },
        onSuccess(response){
            alert('Success');
            this.name = '';
            this.description = '';
        }
    }
});

new Vue({
    el: '#root'
});
</script>
@endsection