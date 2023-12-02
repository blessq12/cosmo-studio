<script>
export default{
    inject:['company'],
    props:{
        studios: Object
    }
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h2>Мы близко</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div v-if="studios.length">
                <ul class="studio-list">
                    <li v-for="studio in studios" :key="studio.id">
                        <div class="studio" :ref="studio.uri" :style="'background: url('+ (studio.image !== null ? studio.image.path : '//via.placeholder.com/512x512') + ')'">
                            <div class="position-relative w-100 content">
                                <h5>Тел: {{ studio.phone }}</h5>
                                <h3>{{ studio.address }}</h3>
                                <div class="row g-2 mb-2">
                                    <div class="col-6">
                                        <a :href="'tel:'+studio.phone" class="btn btn-outline-light btn-sm w-100">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a :href="studio.navYandex !== null ? studio.navYandex : '#' " class="btn btn-outline-light btn-sm w-100">
                                            <i class="fa fa-map-marker"></i>
                                        </a>
                                    </div>
                                </div>
                                <a target="_blank" href="https://taplink.cc/cosmostudiotomsk?utm_source=2gis" class="btn btn-light btn-sm w-100">Записаться</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div v-else>
                <ul class="studio-list">
                    <li class="placeholder-glow">
                        <div class="studio placeholder"></div>
                    </li>
                    <li class="placeholder-glow">
                        <div class="studio placeholder"></div>
                    </li>
                    <li class="placeholder-glow">
                        <div class="studio placeholder"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
.studio-list
    list-style: none
    display: flex
    align-items: center
    white-space: nowrap
    padding: 0
    margin: 0
    overflow: hidden
    overflow-x: scroll
    &::-webkit-scrollbar
        display: none
    li
        margin-right: 12px
        .studio 
            background-position: center !important
            background-size: cover !important
            background-repeat: no-repeat !important
            position: relative
            height: 380px
            width: 320px
            background: $color-main
            overflow: hidden
            border-radius: $default-radius
            padding: 12px
            display: flex
            align-items: end
            justify-content: start
            &::before
              content: ''
              width: 100%
              left: 0
              top: 0
              height: 100%
              position: absolute
              background: $overlay
            .content
                color: $color-white
                h5
                    font-size: .85rem
                    margin-bottom: 0
                h3
                    @media(min-width: 1200px)
                        font-size: 1.55rem
</style>