<template>
    <div id="WrapGoogleBtn">
        <div ref="signinBtn" id="customBtn">
            <span class="icon"></span>
            <span class="buttonText">Google</span>
        </div>
    </div>
</template>

<script>

    /* Secret id: TQzq44gfmB4TCXx-wIOsSFQg
    *  Client id: 107181182192-igdgs1dp4ifeo69g6tuqumrc6kb0ijlc.apps.googleusercontent.com
    * */

    import AuthGApi from "./../Data/Users.data"

    export default{
        name: "GSignInBtn-component",
        mounted(){
            window.gapi.load('auth2', () => {
                AuthGApi._AuthGApi(this);
            })
        },
        methods: {
        }
    }
</script>


<style scoped>
    #customBtn {
        display: inline-block;
        background: white;
        color: #444;
        width: 190px;
        border-radius: 5px;
        border: thin solid #888;
        box-shadow: 1px 1px 1px grey;
        white-space: nowrap;
    }

    #customBtn:hover {
        cursor: pointer;
    }

    span.icon {
        background: url(https://google-developers.appspot.com/identity/sign-in/g-normal.png) transparent 5px 50% no-repeat;
        display: inline-block;
        vertical-align: middle;
        width: 42px;
        height: 42px;
    }

    span.buttonText {
        display: inline-block;
        vertical-align: middle;
        padding-left: 42px;
        padding-right: 42px;
        font-size: 14px;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
    }

</style>
