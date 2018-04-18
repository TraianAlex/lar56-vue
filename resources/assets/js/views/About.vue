<template>
    <div class="container">
        <carousel :autoplay="true">
            <img src="http://placeimg.com/640/480/any">
            <img src="http://placeimg.com/640/480/any?1">
            <img src="http://placeimg.com/640/480/any?2">
            <img src="http://placeimg.com/640/480/any?3">
            <img src="http://placeimg.com/640/480/any?4">
        </carousel>

        <scoped-slot :items="['one','two','three']">
            <template slot="slot1" slot-scope="props">
                <h5 v-text="props.item"></h5>
                <em v-text="props.thing"></em>
                <h5 v-text="props.bar"></h5>
            </template>
        </scoped-slot>

        <div style="width: 300px; height: 150px;">
            <carousel>
                <img style="height: 150px" src="http://placeimg.com/640/480/any">
                <img style="height: 150px" src="http://placeimg.com/640/480/any?1">
                <img style="height: 150px" src="http://placeimg.com/640/480/any?2">
                <img style="height: 150px" src="http://placeimg.com/640/480/any?3">
                <img style="height: 150px" src="http://placeimg.com/640/480/any?4">
            </carousel>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
