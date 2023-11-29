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
    <section>
        <about></about>
    </section>
</template>

<style lang="sass"></style>