<script>
export default{
    inject:['company'],
    data:()=>({
        menu: false
    })
}
</script>

<template>
    <div class="invisible pt-5"></div>
    <nav>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-4 col-lg-4 d-flex align-items-center">
                    <a href="/" class="optima logo">
                        {{ company.name }}
                    </a>
                </div>
                <div class="col-6 col-md-8 col-lg-8 d-flex justify-content-md-start justify-content-end flex-md-row-reverse align-items-center">
                    <a href="https://taplink.cc/cosmostudiotomsk?utm_source=2gis" target="_blank" class="btn btn-outline-light mx-2">Записаться</a>
                    <button class="btn btn-outline-light d-block d-md-none" @click="menu = !menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="d-none d-md-flex list-unstyled p-0 m-0 main-nav">
                            <a href="#about">
                                <li>О нас</li>
                            </a>
                            <a href="#slugs">
                                <li>Услуги</li>
                            </a>
                            <a href="#studios">
                                <li>Студии</li>
                            </a>
                            <a href="#portfolio">
                                <li>Наши работы</li>
                            </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <transition
        enter-active-class="animate__animated animate__fadeInDown"
        leave-active-class="animate__animated animate__fadeOutUp"
    >    
        <div class="mobile-nav bg-light" v-if="menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul>
                            <a href="#about">
                                <li>О нас</li>
                            </a>
                            <a href="#slugs">
                                <li>Услуги</li>
                            </a>
                            <a href="#studios">
                                <li>Студии</li>
                            </a>
                            <a href="#portfolio">
                                <li>Наши работы</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<style lang="sass">
ul.main-nav
    a
        color: $color-white
        text-decoration: none
    li
        margin-left: 12px
        padding: 6px 8px
        border-bottom: 1px solid transparent
        transition: all .3s
        &:hover
            border-color: $color-white
nav
    background: $color-secondary
    padding: 15px 0
    color: $color-white
    position: fixed
    top: 0
    width: 100%
    z-index: 10
    height: 70px
    .logo
        text-decoration: none
        color: $color-white
        font-size: 1.5rem
        padding-top: 5px
        text-transform: uppercase
        margin-bottom: 0
.mobile-nav
    position: fixed
    top: 70px
    z-index: 9
    width: 100%
    padding: 12px 0
    ul
        list-style: none
        padding: 0
        margin: 0
        a
            text-color: $color-main
            text-decoration: none
        li
            margin-bottom: 24px
            font-size: 1.3rem
            text-align: center
            transition: all .3s
            &:last-child
                margin-bottom: 0  
            &:hover
                background: $color-main
                color: $color-white
</style>