<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default" v-for="status in statuses">
                    <div class="card-header">
                        <p>{{ status.user.name }} said...
                            <span style="float:right;">
                                <!-- {{ postedOn(status) }} -->
                                {{ status.created_at | ago | capitalize }}
                            </span>
                        </p>
                    </div>
                    <div class="card-body" v-text="status.body"></div>
                </div>
                <add-to-stream @completed="addStatus"></add-to-stream>
            </div>
        </div>
    </div>

</template>

<script>
import Status from '../models/Status';
import AddToStream from '../components/AddToStream.vue';

    export default {
        components: { AddToStream },

        data(){
          return {
              statuses: []
          }
        },

        filters: {
            ago(date){
                return moment(date).fromNow();
            },
            capitalize(value){
                return value.toUpperCase();
            }
        },

        created() {
            //axios.get('/statuses')
            //    .then(({data}) => this.statuses = data);
            Status.all(statuses => this.statuses = statuses);
        },

        methods: {
            // postedOn(status) {
            //     return moment(status.created_at).fromNow();
            // },
            addStatus(status){
                this.statuses.unshift(status);
                toastr.success('Your status has been added to the stream.');
                window.scrollTo(0, 0);
            }
        }
    }
</script>
