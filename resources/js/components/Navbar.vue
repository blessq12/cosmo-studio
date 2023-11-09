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

                <button class="btn btn-outline-light dropdown-toggle mx-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">Выбор студии</button>
                <ul class="dropdown-menu">
                    <li>
                        <a 
                            href="#" 
                            class="dropdown-item" 
                            :class="appStore.currentStudio.uri == studio.uri ? 'active' : ''"
                            @click.prevent="appStore.currentStudio = studio" 
                            v-for="studio in company.studios"
                            :key="studio.uri"
                            >
                            {{ studio.address }}
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a :href="appStore.currentStudio.navYandex" class="dropdown-item" target="_blank">
                            Проложить маршрут
                        </a>
                    </li>
                </ul>
                <button class="menu-toggler" >
                    <i class="fa fa-bars fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="studio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="current-studio">
                    <p class="mb-0">Выбрана студия: {{ appStore.currentStudio.address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
nav
    padding: 12px 0
    background: $color-main
    color: $color-white
    box-shadow: $nav-shadow
    position: sticky
    top: 0
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
    border: 0
    padding: 0
    margin: 0
    background: transparent
    height: 40px
    width: 40px
    display: flex
    align-items: center
    justify-content: center
    color: $color-white
.studio
    background: $color-secondary
    color: $color-white
    padding: 6px 0
</style>