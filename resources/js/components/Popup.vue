<script>
export default{
    props:{
        currStudio: String
    },
    data:()=>({
        submitAccess: false,
        sendSuccess: false,
        formData:{
            name: '',
            phone: '',
            email: ''
        }
    }),
    inject:['company'],
    methods:{
        validate(){
            this.formData.studio = this.currStudio
            axios.post('/api/send', this.formData)
            .then(res => {
                if (res.data.status){
                    this.sendSuccess = !this.sendSuccess
                    setTimeout(()=>{
                        this.sendSuccess = !this.sendSuccess
                        this.$emit('popupToggle')
                    },3000)
                }
            })
            .catch(err => {
                console.log(err)
            })
        },
        resetForm(){
            this.formData = {
                name: '',
                phone: '',
                email: ''
            }
        }
    },
    watch:{
        formData:{
            handler(val){
                console.log(val)
                if (val.name !== '' && val.name.length >= 3){
                    if (val.phone !== '' && val.phone.length === 18){
                        if (val.email !== '' && val.email.length > 5){
                            console.log('final step')
                            this.submitAccess = true
                            return
                        }
                    }
                }
                this.submitAccess = false
            },
            deep: true
        }
    }
}
</script>

<template>
<div class="popup-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 visible">
                <div class="popup">
                    <div class="header">
                        <h5 class="mb-0">
                            Запись в студию
                        </h5>
                        <button type="button" class="btn btn-close" style="color: #fff;" @click="$emit('popupToggle')"></button>
                    </div>
                    <div class="content">
                        <transition
                            enter-active-class="animate__animated animate__fadeIn"
                            leave-active-class="animate__animated animate__fadeOut"
                            mode="out-in"
                        >
                            <div v-if="!sendSuccess">
                                <form ref="form">
                                <div class="form-group">
                                    <label for="studio">Выбор студии</label>
                                    <div class="row g-2">
                                        <div class="col-6"
                                            v-for="studio in company.studios"
                                            :key="studio.id"
                                        >
                                            <button type="button" 
                                                @click="currStudio = studio.uri"
                                                class="btn w-100"
                                                :class="currStudio === studio.uri ? 'btn-primary' : 'btn-outline-primary'"
                                            >{{ studio.address }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Введите Имя:</label>
                                    <input type="text" name="name" id="name" class="form-control" autocomplete="name" autofocus required v-model="formData.name">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Номер телефона:</label>
                                    <input type="text" name="tel" id="tel" v-maska data-maska="+7 (###) ###-##-##" class="form-control" autocomplete="tel" required v-model="formData.phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email адрес</label>
                                    <input type="email" name="email" id="email" class="form-control" autocomplete="email" required v-model="formData.email">
                                </div>
                                </form>
                            </div>
                            <div v-else>
                                <div class="d-flex align-items-center justify-content-center p-3">
                                    <div class="text-center">
                                        <img src="/assets/images/success_send.png" alt="alt" class="img-fluid">
                                        <h5 class="optima mt-3">Спасибо, что выбрали нас</h5>
                                    </div>
                                </div>
                            </div>
                        </transition>
                    </div>
                    <div class="footer">
                        <button type="button" :disabled="submitAccess ? false : true " class="btn btn-light" @click="validate()">Отправить </button>
                        <button type="button" class="btn btn-outline-light mx-2" @click="resetForm">Очистить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass" scoped>
form
    label
        margin-bottom: 6px
    button
        font-size: 0.7em !important
    .form-group
        margin-bottom: 6px


.popup-wrap
    position: fixed
    top: 0
    left: 0
    width: 100%
    height: 100%
    visibility: hidden
    z-index: 15
    display: flex
    align-items: center
    .popup
        z-index: 18
        min-height: 250px
        overflow: hidden
        border-radius: $default-radius
        .header
            background: $color-main
            color: $color-white
            display: flex
            align-items: center
            justify-content: space-between
            font-family: 'optima'
            padding: 16px 12px
        .content
            min-height: 200px
            background: $color-white
            padding: 12px
        .footer
            background: $color-main
            color: $color-white
            padding: 16px 12px
            font-family: 'optima'
            text-transform: capitalize
</style>