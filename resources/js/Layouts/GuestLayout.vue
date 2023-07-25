<script>
import Navbar from "../Pages/Components/Home/Navbar.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Navbar,
    },
    setup() {
        return {};
    },
};
</script>

<template>
    <Navbar :NoAuthLink="true"></Navbar>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-neutral dark:bg-gray-900"
    >
        <div>
            <!-- <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link> -->
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
