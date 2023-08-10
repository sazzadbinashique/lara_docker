import AllPosts from './components/posts/AllPosts.vue';
import AddPost from './components/posts/AddPost.vue';
import EditPost from './components/posts/EditPost.vue';
export const routes = [
    {
        name: 'home',
        path: '/posts',
        component: AllPosts
    },
    {
        name: 'add',
        path: '/posts/add',
        component: AddPost
    },
    {
        name: 'edit',
        path: '/posts/edit/:id',
        component: EditPost
    }
];
