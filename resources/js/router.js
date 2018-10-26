import LogInComponent from "./components/Users/LogIn.component";
import MoviesListComponent from "./components/Movies/Movies.component"

export const routes = [
    {
        path: '/Users',
        name: 'users',
        component: LogInComponent,

    },
    {
        path: '/Movies',
        alias: '/',
        name: 'movies',
        meta: {auth: false},
        component: MoviesListComponent
    }
]




