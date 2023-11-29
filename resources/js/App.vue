<script>
export default{
    props:{
        company: Object
    },
    provide(){
        return{
            company: this.company
        }
    }
}
</script>

<template>
    <navbar></navbar>
    <hero-banner></hero-banner>
</template>

<style lang="sass"></style>