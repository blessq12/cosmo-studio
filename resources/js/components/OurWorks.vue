<script>
export default{

}
</script>

<template>
<section class="pt-0 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="optima bold">Наши работы</h2>
                    <hr class="mt-0 w-50">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="optima">Ногтевая студия</h4>
            </div>
            <div class="col-12">
                <ul class="gallery list-unstyled">
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="optima">Визажисты</h4>
            </div>
            <div class="col-12">
                <ul class="gallery list-unstyled">
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="optima">Массаж</h4>
            </div>
            <div class="col-12">
                <ul class="gallery list-unstyled">
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                    <li>
                        <div class="gallery-item"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</template>

<style lang="sass" scoped>
.gallery
    display: flex
    align-items: center
    overflow: hidden
    overflow-x: scroll
    &::-webkit-scrollbar
        display: none
    li
        margin-right: 12px
        .gallery-item   
            width: 250px
            height: 250px
            background: $color-main
            border-radius: $default-radius
</style>
