import "./bootstrap";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import VueLazyLoad from "vue3-lazyload";
import route from "ziggy-js";

// Plugin Initializations
import Notifications from "notiwind";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .mixin({ methods: { route } })
            .use(plugin)
            .use(Notifications)
            .use(VueLazyLoad)
            .mount(el);
    },
});
