<script>
export default{
    props:{
        slugs: Object
    },
    mounted(){
    },
    data:()=>({
    })
}
</script>

<template>
<div class="container">

    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h2>Услуги</h2>
            </div>
        </div>
    </div>


    <div class="accordion row">
        <div v-if="slugs.length">
            <div class="col-12 mb-2" v-for="category in slugs" :key="category.id">
                <div class="accordion-item">
                    <h2 class="accordion-header" :id="'heading-'+category.uri">
                    <button class="accordion-button collapsed fw-light fs-5" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapse-'+category.uri" aria-expanded="true" :aria-controls="'collapse-'+category.uri">
                        {{ category.name }}
                    </button>
                    </h2>
                    <div :id="'collapse-'+category.uri" class="accordion-collapse collapse" :aria-labelledby="'heading-'+category.uri" data-bs-parent="#accordionExample">
                        <div class="accordion-body" v-if="category.slugs.length">
                            <ul class="list-unstyled p-0 m-0">
                                <li v-for="slug in category.slugs" :key="slug.id" class="border-bottom mb-4 d-flex justify-content-between">
                                    <h6 style="padding-right: 6px;" class="mb-4">{{ slug.name }}</h6>
                                    <b class="fs-6" style="white-space: nowrap;" v-if="slug.lPrice">{{ slug.prefixFrom ? 'от' : '' }} {{ slug.lPrice }} {{ slug.hPrice ? '- ' + slug.hPrice : '' }} ₽</b>
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-body" v-else>
                            <h5>В этой категории еще нет услуг</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else class="placeholder-glow">
            <div class="col-12 placeholder rounded mb-2" style="height: 50px"></div>
            <div class="col-12 placeholder rounded mb-2" style="height: 50px"></div>
            <div class="col-12 placeholder rounded mb-2" style="height: 50px"></div>
            <div class="col-12 placeholder rounded mb-2" style="height: 50px"></div>
            <div class="col-12 placeholder rounded mb-2" style="height: 50px"></div>
        </div>
    </div>
</div>
</template>

<style lang="sass">

</style>