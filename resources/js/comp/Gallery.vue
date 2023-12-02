<script>
export default{
    props:{
        galleries: Object
    },
    data:()=>({})
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h2>Наши работы</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div v-if="galleries.length">
                <div class="gallery" v-for="gallery in galleries">
                    <h3>{{ gallery.name }}</h3>
                    <div class="gallery-nav d-flex justify-content-end" v-if="gallery.images.length">
                        <div class="prev" @click="()=>{
                            $refs[gallery.uri][0].scrollLeft -= 312
                        }">
                            <i class="fa fa-arrow-left">
                            </i>
                        </div>
                        <div class="next" @click="()=>{
                            $refs[gallery.uri][0].scrollLeft += 312
                        }">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                <hr>
                <div v-if="gallery.images.length">
                    <ul :ref="gallery.uri" :id="gallery.uri">
                        <li v-for="image in gallery.images">    
                            <div class="gallery-item" :style="'background: url(' + image.path + ')'"></div>
                        </li>
                    </ul>
                </div>
                <div v-else>
                    <ul>
                        <li class="placeholder-glow"><div class="gallery-item placeholder"></div></li>
                        <li class="placeholder-glow"><div class="gallery-item placeholder"></div></li>
                        <li class="placeholder-glow"><div class="gallery-item placeholder"></div></li>
                        <li class="placeholder-glow"><div class="gallery-item placeholder"></div></li>
                    </ul>
                </div>
                </div>
            </div>
            <div v-else>
                <div class="gallery placeholder-glow">
                    <h4 class="placeholder col-4 rounded">
                    </h4>
                    <div class="gallery-nav d-flex justify-content-end">
                        <div class="prev placeholder col-1"></div>
                        <div class="next placeholder col-1"></div>
                    </div>  
                
                    <hr class="mt-0">
                    <ul>
                        <li><div class="gallery-item placeholder"></div></li>
                        <li><div class="gallery-item placeholder"></div></li>
                        <li><div class="gallery-item placeholder"></div></li>
                        <li><div class="gallery-item placeholder"></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
.gallery-nav
    .prev
        margin-right: 18px
        cursor: pointer
        font-size: 1.5rem
    .next
        cursor: pointer
        font-size: 1.5rem
.gallery
    margin-bottom: 24px
    position: relative
    h4
        margin-bottom: unset
    hr
        width: 50%
        border-top-color: $color-main
        opacity: 1
        border-width: 3px
    ul
        list-style: none
        display: flex
        align-items: center
        padding: 0
        margin: 0
        overflow: hidden
        overflow-x: scroll
        scroll-behavior: smooth
        &::-webkit-scrollbar
            display: none
        li
            margin-right: 12px
            .gallery-item
                background-position: center !important
                background-size: cover !important
                background-repeat: no-repeat !important
                width: 300px
                height: 300px
                background: $color-main
                border-radius: $default-radius
</style>