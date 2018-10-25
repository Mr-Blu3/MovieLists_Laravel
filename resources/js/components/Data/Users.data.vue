<script>
    import axios from 'axios'

    export default {
        name: "Users.data",
        gUserInfo: { err: 'No user information available'},

        FetchAllUsers(){
            // ToDo: get request to take out all users from db
        },

        InsertUser() {
            // ToDo: Insert user to database
            const sUrl = "https://jsonplaceholder.typicode.com/posts";
            const oParams = {
                name: "Said",
                id: 21
            };

            axios.get(sUrl, oParams)
                .then(data => console.log(data))
                .catch(err => console.log(err))

        },

        LoginToUserFromdb(UserId){
            // Todo: Fetch out movies to user from db
        },

        _AuthGApi(){
            return window.gapi.auth2.init({
                client_id: '107181182192-igdgs1dp4ifeo69g6tuqumrc6kb0ijlc.apps.googleusercontent.com',
                cookiepolicy: 'http://movie-list.local'
            })
        },


        _AuthenticateUser() {
            return 'Gmail';
            // Todo: Login with gmail, send a request to Gmail web api
        },

        RegisterToUser(UserId) {
            // Todo: Register user to db
        }
    }
</script>
