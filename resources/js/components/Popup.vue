<script>
export default{
    props:{
        studio: String
    }
}
</script>

<template>
<div class="popup-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="popup">
                    <div class="header">
                        <h5 class="mb-0">popup header {{ studio }}</h5>
                        <button type="button" class="btn btn-close" style="color: #fff;" @click="$emit('popupToggle')"></button>
                    </div>
                    <div class="content">
                        form part
                    </div>
                    <div class="footer">
                        footer section
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass">
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
        visibility: visible
        z-index: 18
        min-height: 350px
        overflow: hidden
        border-radius: $default-radius
        .header
            background: $color-main
            color: $color-white
            display: flex
            align-items: center
            justify-content: space-between
            font-family: 'optima'
            text-transform: capitalize
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