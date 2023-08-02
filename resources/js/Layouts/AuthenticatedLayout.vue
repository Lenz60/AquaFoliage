<template>
    <div>
        <div>
            <div class="min-h-screen bg-neutral dark:bg-gray-900">
                <Navbar class="sticky top-0 z-50"></Navbar>

                <header
                    class="bg-neutral-focus rounded-md font-montserrat text-primary shadow"
                    v-if="$slots.header"
                >
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>

                <!-- Page Content -->
                <main>
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Navbar from "../Pages/Components/Home/Navbar.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
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

<style lang="scss" scoped></style>
