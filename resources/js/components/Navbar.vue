<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore'
export default{
    inject:['company'],
    computed:{
        ...mapStores( appStore )
    }
}
</script>

<template>

<nav>
    <div class="container">
        <div class="row align-items-center g-1">
            <div class="col-6">
                <a href="/">
                    <div class="nav-logo">
                        <h2 class="optima mb-0">{{ company.name }}
                            <span>{{ company.nameAdd }}</span>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex align-itemc-center justify-content-end">
                <button class="menu-toggler" >
                    <i class="fa fa-bars fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
</template>

<style lang="sass">
nav
    padding: 12px 0
    background: $color-main
    color: $color-white
    box-shadow: $nav-shadow
    position: sticky
    top: 0
    z-index: 10
    a
        text-decoration: none
        color: $color-white
.nav-logo
    display: flex
    flex-direction: column
    h2
        text-align: start
        width: fit-content
        font-size: 2rem
        text-transform: uppercase
    span
        display: block
        margin-top: -8px
        font-size: 0.6rem
        text-transform: capitalize
.menu-toggler
    padding: 0
    margin: 0
    border: none
    background: transparent
    color: $color-white
</style>