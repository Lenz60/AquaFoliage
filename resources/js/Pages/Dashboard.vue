<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import Menu from "./Components/Plants/Menu.vue";
import Section from "./Components/Dashboard/section.vue";

export default {
    components: {
        Head,
        AuthenticatedLayout,
        Menu,
        Section,
    },
    props: {},
    setup(props) {
        const Content = ref("Dashboard");

        return { Content };
    },
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout data-theme="foliage">
        <div class="flex">
            <div class="w-[30%]">
                <Menu :Content="Content"></Menu>
            </div>
            <div class="w-[70%] border-2 border-blue-500">
                <h3
                    class="text-primary font-montserrat font-semibold text-md p-5"
                >
                    Hello {{ $page.props.auth.user.name }}
                </h3>
                <Section></Section>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
