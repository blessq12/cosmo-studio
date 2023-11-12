<script>
export default{
    data:()=>({
        banners:[
            {
                id: 1,
                background: 'https://www.shutterstock.com/image-photo/female-beauty-salon-owner-working-600nw-2198624369.jpg',
                header: 'Студия красоты Cosmo',
                sub: 'Много видов услуг по доступным ценам в нашем городе'
            },
            {
                id: 2,
                background: 'https://watermark.lovepik.com/photo/20211208/large/lovepik-nail-salon-scene-nail-studio-picture_501680461.jpg',
                header: 'Ногтевая студия Cosmo',
                sub: 'Подбор ииндивидуальных решений для вас'
            },
            {
                id: 3,
                background: 'https://images.squarespace-cdn.com/content/v1/6230a11474b83231a7f54f4f/7586631f-f1b0-4ea0-b4a6-c920a98e6906/Below+Hair+Studio.jpg',
                header: 'Парикмахерские услуги в салоне красоты Cosmo',
                sub: 'Все виды парикмахерских услуг, от стрижек до сложных окрашиваний в одной студии'
            }
        ],
        currentBanner: 1
    }),
    computed:{
        bannerQty(){
            return this.banners.length
        },
        bannerBackground(){
            return this.banners[this.currentBanner - 1].background
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
<div class="hero-banner" :style="'background: url(' + bannerBackground + ');'">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <transition-group
                    enter-active-class="animate__animated animate__flipInX"
                    leave-active-class="animate__animated animate__flipOutX"
                    tag="div"
                    class="position-relative d-flex justify-content-center align-items-center"
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
        <button type="button" class="btn btn-outline-light btn-sm" @click="currentBanner--">←</button>
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
    font-family: 'optima'
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
        justify-content: center
        bottom: 30px
        button
            max-width: 70px
</style>