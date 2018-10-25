<template>
    <div id="signin-button">
        {{ message }}
        {{ OnUserLoggedIn() }}
        <GSignInBtn-component @done="OnUserLoggedIn"></GSignInBtn-component>
    </div>
</template>

<script>
    import GSignInBtnComponent from "./GsignInBtn"
    import DataUsers from "./../Data/Users.data"

    export default {
        name: "LogIn-component",
        data: function() {
            return {
                message: 'Hello'
            }
        },
        mounted(){},

        methods: {

            OnUserLoggedIn: function(gUser) {
                //if(User.El) this.$router.push({name: "movies"})
                this.$emit('done', gUser);
                return;
                if(gUser) DataUsers.gUserInfo = gUser;

                let FetchedUser = DataUsers._AuthenticateUser();
                this._ValidateUser();
            },

            _ValidateUser(ValidateUser) {
                // ToDo: Validate user if it is = to gmail login store it
            }
        },

        components: {
            'GSignInBtn-component': GSignInBtnComponent
        }
    }
</script>

<style scoped>
</style>

