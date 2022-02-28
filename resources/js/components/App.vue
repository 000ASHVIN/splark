<template>
    <div class="header">
        <NavBar></NavBar>
        <div class="container-fluid">
            <router-view>
            </router-view>
        </div>
    </div>
</template>

<script>
    import NavBar from './includes/NavBar.vue'
    export default {
        components: { NavBar },
        data() {
            return {
                show: true,
            }
        }
    }
</script>