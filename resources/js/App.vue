<script>
import { mapStores } from 'pinia';
import { appStore } from './stores/appStore';

export default{
    props:{
        company: Object
    },
    mounted(){
        this.appStore.currentStudio = this.company.studios[0]
    },
    provide(){
        return {
            company: this.company
        }
    },
    computed:{
        ...mapStores( appStore )
    }
}
</script>

<template>
    <div class="layout"></div>
    <navbar></navbar>
    <hero-banner></hero-banner>
    <fixed-icons></fixed-icons>
</template>

<style lang="sass">

</style>