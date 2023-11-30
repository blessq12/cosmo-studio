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
    <hero-banner duration="3000"></hero-banner>
    <section>
        <about></about>
    </section>
    <section class="pt-0">
        <slugs></slugs>
    </section>
    <section class="pt-0">
        <studios></studios>
    </section>
    <section>
        <gallery></gallery>
    </section>
</template>

<style lang="sass"></style>