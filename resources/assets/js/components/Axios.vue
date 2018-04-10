<template>
    <ul>
        <li v-for="skill in skills" v-text="skill"></li>
    </ul>
</template>
<script>
    export default {
        data() {
            return {
                skills: []
            }
        },
        
        mounted() {
            axios.get('/skills').then(response => this.skills = response.data);
        }
    }
</script>