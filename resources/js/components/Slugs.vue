<script>
export default{
    props:{
        slugs: Object
    },
    data:()=>({
        currentCategory: 'nails'
    })
}
</script>

<template>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="optima bold mb-2">Услуги</h2>
                    <hr class="w-50 mb-4 mt-0">
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <ul class="slug-category-list">
                    <li v-for="category in slugs">
                        <button 
                            type="button" 
                            class="btn btn-outline-primary" 
                            :class="category.uri == currentCategory ? 'active' : ''"
                            @click="currentCategory = category.uri"
                        >
                            <b>{{ category.masterCategory !== null ? '( '+ category.masterCategory+' )' : '' }}</b>
                            {{ category.name }} 
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <transition-group
                    tag="div"
                    class="position-relative slug-wrap"
                    enter-active-class="animate__animated animate__fadeIn"
                    leave-active-class="animate__animated animate__fadeOut"
                >
                    <ul v-for="category in slugs" :key="category.uri" v-show="category.uri == currentCategory" class="slug-category position-absolute">
                        <li v-for="slug in category.slugs" :key="slug.id">
                            <div class="slug-item d-flex align-items-start">
                                <div class="image">
                                    <img :src="slug.image" class="img-fluid rounded" :alt="slug.name">
                                </div>
                                <div class="content">
                                    <div>
                                        <h4>{{ slug.name }}</h4>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="btn btn-outline-dark">
                                            {{ slug.price }} руб.
                                        </span>
                                        <span class="btn btn-outline-dark mx-2">
                                            {{ slug.executeTime }}
                                        </span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary btn-sm">Записаться</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </transition-group>
            </div>
        </div>
    </div>
</section>
</template>

<style lang="sass" scoped>
.slug-wrap
    min-height: 450px
    overflow: hidden
    overflow-y: scroll
.slug-category-list
    list-style: none
    padding: 0
    margin: 0
    display: flex
    align-items: center
    justify-content: start
    white-space: nowrap
    overflow: hidden
    overflow-x: scroll
    &::-webkit-scrollbar
        display: none
    li
        margin-right: 12px
        &:last-child
            margin-right: 0
.slug-category
    padding: 0
    margin: 0
    list-style: none
    li
        margin-bottom: 16px
        .slug-item

            .image
                min-width: 80px
                min-height: 70px
                width: 80px
                height: 80px
                margin-right: 6px
            .content
                display: block
                width: 100%
                h4
                    font-size: 12px
                    margin-bottom: 6px
                span
                    font-size: 10px
                    padding: 3px 6px
                button[type=button]
                    font-size: 10px
</style>