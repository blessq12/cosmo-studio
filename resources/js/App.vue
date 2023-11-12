<script>
import { mapStores } from 'pinia';
import { appStore } from './stores/appStore';

export default{
    props:{
        company: Object,
        slugs: Object
    },
    mounted(){
        this.appStore.currentStudio = this.company.studios[0]
    },
    data:()=>({
        overlay: false,
        popup: false,
        currStudio: null
    }),
    provide(){
        return {
            company: this.company
        }
    },
    computed:{
        ...mapStores( appStore )
    },
    watch:{
        overlay(val){
            if (val){
                if (!document.body.classList.contains('overflow-hidden')){
                    document.body.classList.add('overflow-hidden')
                }
            } else {
                this.popup = false
                this.currStudio = null
                if (document.body.classList.contains('overflow-hidden')){
                    document.body.classList.remove('overflow-hidden')
                }
            }
        },
        popup(val){
            if (val) {
                this.overlay = true
            } else {
                this.overlay = false,
                this.currStudio = null
            }
        }
    }
}
</script>

<template>
    <transition
        enter-active-class="animate__animated animate__fadeIn"
        leave-active-class="animate__animated animate__fadeOut"
    >
        <div class="overlay" v-if="overlay" @click="overlay = !overlay"></div>
    </transition>
    <transition
        enter-active-class="animate__animated animate__fadeInDown"
        leave-active-class="animate__animated animate__fadeOutUp"
    >
        <popup 
            v-if="popup" 
            :studio="currStudio" 
            @popupToggle="()=>{ popup = !popup }"
        ></popup>
    </transition>
    <navbar></navbar>
    <hero-banner></hero-banner>
    <slugs :slugs="slugs"></slugs>
    <studios @toggleOverlay="(studio)=>{ popup = !popup, currStudio = studio }"></studios>
    <our-works></our-works>
    <Footer></Footer>
    <fixed-icons></fixed-icons>
</template>

<style lang="sass" scoped>
.overlay
    position: fixed
    top: 0
    left: 0
    width: 100%
    height: 100%
    background: rgba(0, 0, 0, .8)
    z-index: 11
</style>