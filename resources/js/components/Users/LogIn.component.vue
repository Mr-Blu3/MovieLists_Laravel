<template>
    <div id="signin-button">
        <GSignInBtn-component @done="_OnUserLoggedIn"></GSignInBtn-component>
    </div>
</template>

<script>

    import GSignInBtnComponent from "./GsignInBtn"
    import DataUsers from "./../Data/Users.data"
    import IGoogle from "./../Interfaces/GoogleInterface"
    import VueSession from 'vue-session'
    import Vue from 'vue'
    Vue.use(VueSession)

    export default {

        name: "LogIn-component",
        props: ["pbAuth"],

        data: function() {
            return {}
        },

        watch: {
            pbAuth: function (vpbAuth) {
                console.log(vpbAuth, 'Property changed?')
                if(!vpbAuth) DataUsers._DestroySession(this);
            }
        },

        methods: {
            _OnUserLoggedIn: function(gUser = IGoogle) {

                if(!gUser) return;
                DataUsers._SetSession(gUser, this);
                this.$emit('done', true);
            }
        },

        components: {
            'GSignInBtn-component': GSignInBtnComponent
        }
    }
</script>

<style scoped>
</style>

