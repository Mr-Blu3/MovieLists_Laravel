<template>
    <div>
        Movies
        <button v-on:click="Movies">Go to Login</button>
    </div>
</template>

<script>

    export default {
        name: "Movies-component",
        methods: {
            Movies(){
                this.$router.push({name: "user"})
                // ToDo: Validate and check if it requested to data.user
            },
        },
    }
</script>

<style scoped>

</style>

