<template>
    <div class="main-carousel">
        <slot></slot>
    </div>
</template>

<script>
import Flickity from 'flickity';
import 'flickity/dist/flickity.min.css';

    export default {
        props: {
            wraparound: { default: true },
            autoplay: { default: false },
            cellalign: { default: 'left' },
            contain: { default: true }
        },

        mounted() {
            new Flickity(this.$el, {
                wrapAround: this.wraparound,
                autoPlay: this.autoplay,
                cellAlign: this.cellalign,
                contain: this.contain
            });
        }
    }
</script>
