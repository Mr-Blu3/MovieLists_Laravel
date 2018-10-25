<template >
    <div class="ViewWrap">

        <p>
            <router-link :to="{ name: 'movies' }">Home</router-link> |
            <router-link :to="{ name: 'user' }">user</router-link>
        </p>

        <div class="WrapHeader">
            <Header-component :pUserInfo="oUserInfo"></Header-component>
        </div>

        <div class="WrapContent">
            <router-view @done="OnUserLoggedIn"></router-view>
        </div>

        <div class="WrapFooter">
            <Footer-component></Footer-component>
        </div>
    </div>
</template>

<script>

    import HeaderComponent from './Header.component'
    import FooterComponent from './Footer.component'

    export default{
        name: 'Init-component',
        data: function() {
            return {
                oUserInfo: undefined
            }
        },
        components: {
            'Header-component': HeaderComponent,
            'Footer-component': FooterComponent
        },
        methods: {
            OnUserLoggedIn: function(gUser) {
                this.oUserInfo = gUser;
            }
        }
    }
</script>
