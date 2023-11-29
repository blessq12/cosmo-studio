<script>
export default{
    inject:['company']
}
</script>

<template>
    <div class="invisible pt-5"></div>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <a href="" class="optima logo">
                        {{ company.name }}
                    </a>
                </div>
            </div>
        </div>
    </nav>
</template>

<style lang="sass">
nav
    background: $color-secondary
    padding: 15px 0
    color: $color-white
    position: fixed
    top: 0
    width: 100%
    z-index: 10
    .logo
        text-decoration: none
        color: $color-white
        font-size: 1.5rem
        padding-top: 5px
        text-transform: uppercase
        margin-bottom: 0

            
</style>