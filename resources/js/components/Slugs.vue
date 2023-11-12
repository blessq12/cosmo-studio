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
                    <h2 class="optima bold">Услуги</h2>
                    <hr class="w-50 mt-0">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item" v-for="category in slugs" :key="category.uri">
                        <h2 class="accordion-header" :id="'heading_' + category.uri ">
                        <button class="accordion-button collapsed optima bold" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapse_'+category.uri" aria-expanded="false" :aria-controls="'collapse_' + category.uri">
                            {{ category.name }} <span class="text-info mx-2">{{ category.masterCategory !== null ? category.masterCategory : '' }}</span>
                        </button>
                        </h2>
                        <div :id="'collapse_' + category.uri" class="accordion-collapse collapse" :aria-labelledby="'heading_' + category.uri" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-unstyled">
                                <li v-for="slug in category.slugs" :key="slug.id">
                                    <p class="optima border-bottom mb-2 pb-2">{{ slug.name }}</p>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
</template>

<style lang="sass" scoped>
</style>