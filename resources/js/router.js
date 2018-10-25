import LogInComponent from "./components/Users/LogIn.component";
import MoviesListComponent from "./components/Movies/Movies.component"

export const routes = [
    {
        path: '/User',
        name: 'user',
        component: LogInComponent,

    },
    {
        path: '/',
        alias: '/Movies',
        name: 'movies',
        meta: {auth: false},
        component: MoviesListComponent
    }
]



