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


        <div class="accordion row" id="accordionExample">
            <div class="col-12 mb-2" v-for="category in slugs" :key="category.id">
                <div class="accordion-item">
                    <h2 class="accordion-header" :id="'heading-'+category.uri">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapse-'+category.uri" aria-expanded="true" :aria-controls="'collapse-'+category.uri">
                        {{ category.name }}
                    </button>
                    </h2>
                    <div :id="'collapse-'+category.uri" class="accordion-collapse collapse" :aria-labelledby="'heading-'+category.uri" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled p-0 m-0">
                            <li v-for="slug in category.slugs" :key="slug.id">
                                {{ slug.name }}
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</template>

<style lang="sass">

</style>