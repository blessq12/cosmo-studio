<script>

export default{
    mounted(){},
    inject:['company'],
    data:()=>({
        date: new Date
    }),
    computed:{
        year(){
            return this.date.getFullYear()
        }
    }
}

</script>

<template>
    <footer>
        <div class="container">
            <div class="row g-2 justify-content-center">
                <div class="col-6 col-md-2">
                    <button type="button" class="btn btn-outline-light btn-lg w-100">
                        <i class="fa fa-vk"></i>
                        Вконтакте
                    </button>
                </div>
                <div class="col-6 col-md-2">
                    <button type="button" class="btn btn-outline-light btn-lg w-100">
                        <i class="fa fa-yahoo"></i>
                        Яндекс
                    </button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        Copyright {{ year }}. <span>{{ company.name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style lang="sass">
footer
    background: $color-main
    padding: 15px 0
    padding-bottom: 0
    .copyright
        background: $color-secondary
        margin-top: 12px
        padding: 12px
        color: $color-white
</style>