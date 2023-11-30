<script>
export default{
    data:()=>({
        galleries: [
            {id: 1, uri: 'nails', name: 'Ногтевая студия', images:[{}, {}, {}]},
            {id: 2, uri: 'hair', name: 'Парикмахераска', images:[{}, {}, {}, {}, {}, {}, {}]},
            {id: 3, uri: 'brows', name: 'Брови', images:[{}, {}, {}, {}, {}]},
        ]
    })
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h5>Портфолио</h5>
                <h2>Галерея наших готовых работ</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="gallery" v-for="gallery in galleries">
                <h4>{{ gallery.name }}</h4>
                <div class="gallery-nav d-flex justify-content-end">
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
                
                <hr class="mt-0">
                <ul :ref="gallery.uri" :id="gallery.uri">
                    <li v-for="image in gallery.images">
                        <div class="gallery-item" style="background: url('/uploads/banner-1.jpg');"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
.gallery-nav
    .prev
        margin-right: 12px
    .next
        
.gallery
    margin-bottom: 24px
    position: relative
    h4
        margin-bottom: unset
    hr
        width: 50%
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