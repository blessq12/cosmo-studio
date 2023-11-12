<script>
export default{
    inject:['company']
}
</script>

<template>
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="optima bold">Наши студии</h2>
                        <hr class="w-50 mt-0">
                    </div>
                </div>
                <div class="col-12">
                    <ul class="studio-list list-unstyled">
                        <li v-for="studio in company.studios" :key="studio.id">
                            
                            <div class="studio-item px-2 py-3" :style="'background: url('+ studio.image +');'">
                                <div class="overlay"></div>
                                <div class="position-relative text-light w-100">
                                    <p class="mb-2">
                                        Адрес: <b>{{ studio.address }}</b>
                                    </p>
                                    <p>
                                        Телефон:
                                        <b><a :href="'tel:'+studio.phone">{{ studio.phone }}</a></b>
                                    </p>
                                    <button type="button" class="btn btn-success w-100" @click="$emit('toggleOverlay', studio.uri)">Записаться</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="sass">
.studio-list
    display: flex
    align-items: center
    justify-content: start
    overflow: hidden
    overflow-x: scroll
    font-family: 'Optima'
    a
        color: #fff
        text-decoration: none
    li
        padding: 6px
        &:first-child
            padding-left: 0
        &:last-child
            padding-right: 0
        .studio-item
            border-radius: $default-radius
            display: block
            min-height: 350px
            max-width: 350px
            width: 300px 
            background-size: cover !important
            background-position: center !important
            position: relative
            overflow: hidden
            color: $color-white
            display: flex
            align-items: end
            .overlay
                position: absolute
                left: 0
                top: 0
                width: 100%
                height: 100%
                background: rgba(0,0,0,.4)
</style>