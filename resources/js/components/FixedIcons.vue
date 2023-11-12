<script>
export default{}
</script>

<template>
    <div class="fixed-container">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <ul>
                        <li>
                            <div class="fixed-item">
                                <i class="fa fa-whatsapp fa-2x"></i>
                            </div>
                        </li>
                        <li>
                            <div class="fixed-item">
                                <i class="fa fa-phone fa-2x" style="transform: rotate(270deg);"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.fixed-container
    position: fixed
    width: 100%
    bottom: 30px
    ul
        list-style: none
        padding: 0
        margin: 0
        li
            margin-bottom: 8px
            &:last-child
                margin-bottom: 0
            .fixed-item
                height: 45px
                width: 45px
                background: $color-secondary
                border-radius: $default-radius
                display: flex
                justify-content: center
                align-items: center
                color: $color-white
</style>