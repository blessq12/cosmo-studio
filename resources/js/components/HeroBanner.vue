<script>
export default{
    data:()=>({
        banners:[
            {
                id: 1,
                background: '//via.placeholder.com/1920x1080',
                header: 'Some Heaxder 1',
                sub: 'subheader under header 1'
            },
            {
                id: 2,
                background: '//via.placeholder.com/1979x1079',
                header: 'Some Heaxder 2',
                sub: 'subheader under header 2'
            },
            {
                id: 3,
                background: '//via.placeholder.com/1979x1079',
                header: 'Some Heaxder 3',
                sub: 'subheader under header 3'
            }
        ],
        currentBanner: 1
    }),
    computed:{
        bannerQty(){
            return this.banners.length
        }
    },
    watch:{
        currentBanner(val){
            if (val > this.bannerQty){
                this.currentBanner = 1;
            } else if (val <= 0) {
                this.currentBanner = this.bannerQty;
            }
        }
    },
    methods:{}
}
</script>

<template>
<div class="hero-banner" style="background: url('//via.placeholder.com/1920x1080');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <transition-group
                    enter-active-class="animate__animated animate__flipInX"
                    leave-active-class="animate__animated animate__flipOutX"
                    tag="div"
                    class="position-relative d-flex w-100 justify-content-center align-items-center"
                >
                    <div class="banner-item text-center position-absolute text-white" v-for="banner in banners" :key="banner.id" v-show="banner.id === currentBanner">
                        <h2>{{ banner.header }}</h2>
                        <p>{{ banner.sub }}</p>
                    </div>
                </transition-group>
            </div>
        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-outline-light btn-sm" @click="currentBanner--" style="transform: rotate(180deg);">→</button>
        <button type="button" class="btn btn-outline-light btn-sm" @click="currentBanner++">→</button>
    </div>
</div>
</template>

<style lang="sass">
.hero-banner    
    width: 100%
    min-height: 450px
    display: flex
    align-items: center
    background-position: center !important
    background-size: cover !important
    background-repeat: no-repeat !important
    position: relative
    .overlay
        position: absolute
        top: 0
        left: 0
        width: 100%
        height: 100%
        background: rgba(0,0,0,.6)
    .btn-group
        position: absolute
        width: 100%
        left: calc(50% - 70px)
        bottom: 10px
        button
            max-width: 70px
</style>