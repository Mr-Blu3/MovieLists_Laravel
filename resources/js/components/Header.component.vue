<template>
    <div>
        <header v-if="this.pbAuth">

            <p>{{this.$session.get("Name")}}</p>
            <img :src="this.$session.get('NameImage')">
            <button v-on:click="_DataAuth">Logga ut</button>
        </header>
    </div>
</template>

<script>

    export default {
        name: 'Header-component',
        props: ['pbAuth'],

        data () {
            return {
                sbAuth: null
            }
        },
        methods: {
            _DataAuth(){
                this.sbAuth = false;
                this.$emit('done', this.sbAuth);
            }
        }
    }

</script>

<style scoped>

</style>
