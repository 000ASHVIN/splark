<template>
    <div class="header">
        <NavBar></NavBar>
        <div class="container-fluid">
            <div class="row justify-content-center">
                
                <div class="col-md-6">
                    <div class="banner-content animate__animated animate__fadeInLeft">
                        <h2 class="text-white">Simple Video Curation</h2>

                        <p class="text-white">Finally a tool that allows you to set up a website in minutes for your videos. Your videos deserve a home for themselves. Oh and did we say you can embed from YouTube, TikTok, Twitch, and Vimeo.</p>

                        <a href="#"> Get Started </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-img w-100 animate__animated animate__fadeInRight">
                        <img src="https://splark.com/assets/img/home-img/splark-hero.svg" alt="">
                    </div>
                    <!-- <transition 
                        enter-active-class="animate__animated animate__fadeInDown"
                        leave-active-class="animate__animated animate__fadeOutUp"
                    >
                        <img v-if="show" class="w-100" src="http://ttf.anasource.com/assets/themes/taxfaculty/img/logos/New%20SAIT%20(1).jpg" alt="">
                    </transition> -->
                </div>
            </div>
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