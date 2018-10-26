<template >
    <div class="ViewWrap">

        <p>
            <router-link :to="{ name: 'movies' }">Movies</router-link> |
            <router-link :to="{ name: 'users' }">Users</router-link>
        </p>

        <div class="WrapHeader">
            <Header-component :pbAuth="sbAuth" @done="_Authenticate"></Header-component>
        </div>

        <div class="WrapContent">
            <router-view @done="_Authenticate" :pbAuth="sbAuth"></router-view>
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
                sbAuth: false
            }
        },

        mounted(){
            //if(!this.sbAuth) this.$router.push('/User')
        },

        components: {
            'Header-component': HeaderComponent,
            'Footer-component': FooterComponent
        },
        methods: {
            _Authenticate: function(vsbAuth) {
                this.sbAuth = vsbAuth;
            }
        }
    }
</script>
