import VueRouter from "vue-router";

const routes = [
    {
        path: "/loggedin/:userId?",
        name: "logged1",
        component: require("./components/LoggedInComponent").default,
    },
    {
        path: "/",
        name: "home",
        component: require("./components/Home").default,
    },
];

const router = new VueRouter({
    routes,
});

export default router;
