<script>
export default{
    inject:['company']
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h5>Мы близко</h5>
                <h2>Контактная информация наших студий</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="studio-list">
                <li v-for="studio in company.studios" :key="studio.id">
                    <div class="studio" :ref="studio.uri" :style="'background: url('+ studio.image +')'">
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
                                    <a :href="studio.navYandex" class="btn btn-outline-light btn-sm w-100">
                                        <i class="fa fa-map-marker"></i>
                                    </a>
                                </div>
                            </div>
                            <button class="btn btn-outline-light btn-sm w-100">Записаться</button>
                        </div>
                    </div>
                </li>
            </ul>
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
        margin-right: 16px
        .studio 
            background-position: center !important
            background-size: cover !important
            background-repeat: no-repeat !important
            position: relative
            height: 320px
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
              background: rgba(0, 0, 0, .6)
            .content
                color: $color-white
                h5
                    font-size: .85rem
                    margin-bottom: 0
</style>