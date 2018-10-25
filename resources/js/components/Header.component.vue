<template>
    <div>
        <header v-if="this.pUserInfo">
            {{this.pUserInfo.w3.ig}}
        </header>
    </div>
</template>

<script>
    import DataUsers from './Data/Users.data'

    export default {
        name: 'Header-component',
        props: ['pUserInfo'],

        data () {
            return {

            }
        },
        methods: {}
    }

</script>

<style scoped>

</style>
