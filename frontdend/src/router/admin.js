const admin = [
    {
        path: "/admin",
        component: () => import("../layouts/Admin.vue"),
        children: [
            {
                path: "users",
                name: "admin-users",
                component: () => import("../pages/admin/users/Index.vue")
            },
            {
                path: "roles",
                name: "admin-roles",
                component: () => import("../pages/admin/roles/Index.vue")
            },
            {
                path: "setting",
                name: "admin-setting",
                component: () => import("../pages/admin/setting/Index.vue")
            },
            {
                path: "/:pathMatch(.*)*",
                name: "error",
                component: () => import("../pages/Error.vue")
            },
        ]
    }
]

export default admin