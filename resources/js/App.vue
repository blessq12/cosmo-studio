<script>
export default{
    props:{
        company: Object,
        slugs: Object
    },
    provide(){
        return{
            company: this.company,
            slugs: this.slugs
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
    <section>
        <slugs></slugs>
    </section>
</template>

<style lang="sass"></style>