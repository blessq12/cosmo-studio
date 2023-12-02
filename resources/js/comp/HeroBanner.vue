<script>
import { callWithAsyncErrorHandling } from 'vue';

export default{
    props:{
        duration: String,
        banners: Object
    },
    mounted(){
        setInterval(()=>{
            this.current++
        }, this.duration)
    },
    data:()=>({
        current: 0, 
    }),
    watch:{
        current(val,old){
            if (val == this.banners.length){
                this.current = 0
            }
            if (val < 0){
                this.current = this.banners.length - 1
            }
        }
    },
}
</script>

<template>
<div v-if="banners.length">
    <div class="hero-banner position-relative">
        <transition-group
            enter-active-class="animate__animated animate__fadeIn"
            leave-active-class="animate__animated animate__fadeOut"
        >
            <div class="image position-absolute h-100 w-100 bg-image-cover"
                v-if="banners[current] !== undefined"
                :key="current"
                :style="'background: url('+ banners[current].image.path +')'"
            ></div>
        </transition-group>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <transition-group
                    tag="div"
                    class="position-relative d-flex align-items-center justify-content-center"
                    enter-active-class="animate__animated animate__flipInX"
                    leave-active-class="animate__animated animate__flipOutX"
                >
                    <div class="col-10 col-md-8 text-center position-absolute bg-dark p-4"
                        style="--bs-bg-opacity: .5;" 
                        v-for="banner in banners" 
                        v-show="current == banners.indexOf(banner)"
                        :key="banner.id"
                    >
                        <h3>{{ banner.header }}</h3>
                        <p class="mb-0">{{ banner.subheader }}</p>
                    </div>
                </transition-group>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center position-relative">
        <div class="slider-nav">
            <button type="button" @click="current--" class="btn text-white">
                <i class="fa fa-arrow-left"></i>
            </button>
            <button type="button" @click="current++" class="btn text-white">
                <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
</div>
<div v-else>
    <div class="hero-banner placeholder-glow">
        <div class="image placeholder"></div>
        <div class="container position-relative ">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 placeholder rounded" style="height: 200px;opacity: .3;"></div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
.hero-banner 
    height: 450px
    background: $color-main
    display: flex
    align-items: center
    color: $color-white
    position: relative
    .image
        &::before
            content: ''
            position: absolute
            top: 0
            left: 0
            width: 100%
            height: 100%
            background: rgba(0, 0, 0, .5)
.slider-nav
    position: absolute
    top: -60px
</style>