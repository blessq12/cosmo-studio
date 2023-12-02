<script>
export default{
    props:{
        company: Object,
        slugs: Object,
        galleries: Object,
        banners: Object,
        studios: Object
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
    <hero-banner :banners="banners" duration="5000"></hero-banner>
    <section>
        <about></about>
    </section>
    <section class="pt-0">
        <slugs :slugs="slugs"></slugs>
    </section>
    <section class="pt-0">
        <studios :studios="studios"></studios>
    </section>
    <section>
        <gallery :galleries="galleries"></gallery>
    </section>
    <Footer></Footer>
</template>

<style lang="sass"></style>