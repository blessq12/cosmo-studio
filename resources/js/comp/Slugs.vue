<script>
export default{
    inject:['slugs'],
    data:()=>({
        current: 'nails'
    })
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h5>Качество на первом месте</h5>
                <h2>Услуги, которые мы оказываем</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 mb-4 mb-md-0">
            <ul class="list-unstyled p-0 m-0 categories-list">
                <li v-for="category in slugs" :key="category.id" class="mb-0 mb-lg-2">
                    <button type="button" class="btn btn-outline-primary" 
                        :class="current == category.uri ? 'active' : ''"
                        @click="current = category.uri"
                    >
                        {{ category.name }} <span v-if="category.masterCategory !== null " class="text-info">{{ category.masterCategory }}</span>
                    </button>
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-8">
            <div class="wrap h-100 position-relative overflow-hidden" style="min-height: 450px;">
                <transition-group
                    enter-active-class="animate__animated animate__fadeInLeft"
                    leave-active-class="animate__animated animate__fadeOutLeft"
                    tag="div"
                    class=""
                >
                    <div class="category-slugs position-absolute" v-for="category in slugs" :key="category.id" v-show="current == category.uri">
                        <h4 class="text-primary optima bold">
                            {{ category.name }}
                            <span v-if="category.masterCategory !== null"> / {{ category.masterCategory }}</span>
                        </h4>
                        <hr>
                        <ul>
                            <li v-for="slug in category.slugs" :key="slug.id" class="single-slug">
                                <h5 class="optima bold mb-0">{{ slug.name }}</h5>
                                <div class="d-flex">
                                    <span>Цена: <span class="text-primary">{{ slug.price }}</span></span>
                                    <span class="px-4">Время выполнения: <span class="text-primary">{{ slug.executeTime }}</span></span>
                                </div>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </transition-group>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
.categories-list
    display: flex
    align-items: center
    overflow: hidden
    overflow-x: scroll
    white-space: nowrap
    @media(min-width: 768px)
        display: block
    &::-webkit-scrollbar
        display: none
    li
        margin-right: 12px
        button
            @media(min-width: 768px)
                width: 100%
.category-slugs
    height: 100%
    width: 100%
    overflow-y: scroll
    ul
        list-style: none
        padding: 0
        margin: 0
        li
            margin-bottom: 12px
            border-left: 4px solid $color-main
            padding-left: 12px

</style>