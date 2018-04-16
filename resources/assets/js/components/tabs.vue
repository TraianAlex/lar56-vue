<template>
    <div>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li v-for="tab in tabs" class="nav-item">
                    <a :href="tab.href" :class="{'active': tab.isActive, 'nav-link': true }" @click="selectTab(tab)">{{ tab.name }}</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <slot></slot>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return { tabs: [] };
    },
    created() {
        this.tabs = this.$children;
    },
    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.href == selectedTab.href);
            });
        }
    }
}
</script>