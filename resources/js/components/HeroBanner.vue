<script>
export default{

}
</script>

<template>

<div class="hero-banner overlay-hidden" style="background: url('https://ru.chado.pro/uploads/gallery_item/photo/1383/проект%20интерьер%20салона%20красоты.jpg');">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <h1 class="optima bold">
                    Студия красоты Cosmo в Томске
                </h1>
                <p class="optima">
                    Какой то текст на главной странице, который описывает кто мы и что мы
                </p>
            </div>
        </div>
    </div>
    <div class="separator"></div>
</div>

</template>

<style lang="sass">
.hero-banner
    min-height: 420px
    display: flex
    align-items: center
    background-position: center !important
    background-size: cover !important
    background-repeat: no-repeat !important
    position: relative
    color: $color-white
    overflow: hidden
    .overlay
        position: absolute
        top: 0
        left: 0
        width: 100%
        height: 100%
        background: rgba(0, 0, 0, .7)
    .separator
        position: absolute
        bottom: 0
        left: 0
        background: url('/assets/images/separator.png')
        background-position: center
        background-size: cover
        background-repeat: no-repeat
        width: 100%
        height: 80px
</style>